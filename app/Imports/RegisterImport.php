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


        $eventTime = 'September 2, 2021';
        $location = 'National museum of Civilization, Cairo';
        $locationMap = 'https://maps.app.goo.gl/H8YXDbFmgMG7ozQG8';
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
