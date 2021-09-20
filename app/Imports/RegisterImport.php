<?php

namespace App\Imports;

use App\Models\Registration;
use App\Services\qrCodeGenerated;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\DB;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class RegisterImport implements ToModel, WithHeadingRow
{
    private $data;
    private $qrCode;

    public function __construct($data)
    {
        $this->data = $data;
        $this->qrCode = new qrCodeGenerated();
    }

    /**
     * @param array $row
     * @return Registration|null
     */
    public function model(array $row): ?Registration
    {
        $email = str_replace(' ', '', $row['email']);
        if ($this->isDoctorExisted($email))
            return null;

        if (!$email)
            return null;

        $userCode = '12' . rand(1000, 9999);

        $qrcode = $this->qrCode->create($userCode);

        $path = url('/') . '/qrcodes/' . $qrcode;


        if (strpos($this->data['venue'], 'OBGYN') !== false) {
            $eventTime    = 'September 16-17, 2021';
            $location     = 'InterContinental Cairo Semiramis, an IHG Hotel, Cairo';
            $locationMap  = 'https://maps.app.goo.gl/M3SgikdKXRyfPNhEA';
        }elseif (strpos($this->data['venue'], 'Cairo') !== false){
            $eventTime    = 'October 8, 2021';
            $location     = 'The St. Regis, Cairo';
            $locationMap  = 'https://maps.app.goo.gl/HsdVmDbgaQNgLmqD7';
        }else{
            $eventTime    = 'October 15, 2021';
            $location     = 'Golden Jewel Beach & Hotel, Alexandria';
            $locationMap  = 'https://maps.app.goo.gl/e4YR31xWUCbhwneo7';
        }

        sendMail($path,$email,$userCode, $row['first_name'], $eventTime, $location,$locationMap);

        //sendWhatsApp($registration->original_path,$request->phone,$userCode);

        return new Registration([
            'first_name' => $row['first_name'],
            'last_name' => $row['last_name'],
            'email' => $email,
            'phone' => $row['phone'],
            'venue' => $this->data['venue'],
            'qrcode' => $qrcode,
            'user_code' => $userCode,
            'register_as' => $row['register_as'] === 'Physician' ? $row['physician'] : $row['register_as']
        ]);
    }

    public function headingRow(): int
    {
        return 1;
    }

    private function isDoctorExisted($email)
    {
        return Registration::where('email', $email)->first();
    }
}
