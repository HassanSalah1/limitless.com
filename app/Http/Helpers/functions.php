<?php

use Socketlabs\SocketLabsClient;
use Socketlabs\Message\BulkMessage;
use Socketlabs\Message\EmailAddress;
use App\Http\Enums\MailConfig;

use Illuminate\Support\Facades\Session;
use App\Models\Registration;

use Twilio\Rest\Client;

function sendMail($qrcode, $email, $userCode, $userName, $eventTime, $location, $locationMap)
{

    $serverId = 35045;
    $injectionApiKey = "x5Q8Rdz9ZWq76LfKj43Y";
    $client = new SocketLabsClient($serverId, $injectionApiKey);
    $message = new BulkMessage();
    $message->subject = MailConfig::SUBJECT;
    $message->htmlBody = file_get_contents(resource_path('/views/emails/registration.blade.php'));
    $message->from = new EmailAddress(MailConfig::FROM, MailConfig::NAME);
    $recipient1 = $message->addToAddress($email, "Recipient #1");
    $recipient1->addMergeData("qrcode", $qrcode);
    $recipient1->addMergeData("userCode", $userCode);
    $recipient1->addMergeData("userName", $userName);
    $recipient1->addMergeData("location", $location);
    $recipient1->addMergeData("eventTime", $eventTime);
    $recipient1->addMergeData("locationMap", $locationMap);
    $client->send($message);

}
function setCurrentUser($phone)
{
    Session::put('user_phone', $phone);
}

function getCurrentUser()
{
    $phone = Session::get('user_phone');
    $model = new Registration();
    return $model->findByPhone($phone);
}

function clearCurrentUser()
{
    Session::forget('user_phone');
}

function sendWhatsApp($qrcode, $phone, $userCode)
{
    $sid = 'AC902dd084452808a10abb690f5de30e60';
    $token = '83812342376de4ff3d1200968215e2d1';

    $twilio = new Client($sid, $token);

    $message = $twilio->messages
        ->create("whatsapp:" . $phone,
            [
                "from" => "whatsapp:+12025197412",
                "body" => "Your $userCode pin code is $qrcode"
            ]
        );
}

function medicalReps(): array
{
    return [
        0 => "Abanoub Ragaie Roshdy Dakdouk",
        1 => "Abanoub Samy Bekhit Shehata",
        2 => "Adel Hamed Mostafa Mostafa",
      3 => "Afnan Mohamed Farid Eissa",
      4 => "Ahmed Mohamed Ahmed Ghoraba",
      5 => "Ahmed Mohamed Elsayed Asaad ",
      6 => "Ahmed Mohamed Mohamed Elsayed",
      7 => "Ahmed Saeed Mohamed Abdelhalim",
      8 => "Alaa Samy Abdelrahman Hassan",
      9 => "Aml Makram Elsayed",
      10 => "Amr Mohamed Talaat Zaki",
      11 => "Amr Tarek Youssry Elsayed",
      12 => "Asmaa Mohamed Osman Ali",
      13 => "Aya Adel Sadeldien Morsy Lashin ",
      14 => "Aya Hamada Elsayed Ali",
      15 => "Aya Yasser Abdelnour Abdelnour",
      16 => "Basma Salah Gaballah Ibrahim ",
      17 => "Bassant Bakhoum Abdelmalak Awad",
      18 => "Bassant Mounir Samy",
      19 => "Berbara Nader Zakaria",
      20 => "Christina Abdallah Faried Atta",
      21 => "Christine Said Iskander Boules",
      22 => "Dalia Bahyeldin Mostafa Mohamed",
      23 => "Dalia Mohamed Abdelmeniem Mohamed",
      24 => "Dina Saadallah Isaac Ibrahem",
      25 => "Ehab Nashaat Thabet Saeed ",
      26 => "Eman Ibrahem Metwally Ahmed",
      27 => "Engy Isaac Gergis Isaac",
      28 => "Fady Mohsen Samaan Basta",
      29 => "Gehad Nasser Mahmoud Ahme",
      30 => "Gihan Ahmed Kamel Mohamed",
      31 => "Gina George Azer Nasrallah",
      32 => "Gina Hakem Fekry Makary",
      33 => "Hadeer Ayman Abdelrazek Abdelgawad",
      34 => "Hadeer Magdy Othman Aql",
      35 => "Haidy Samy Zaki Soliman",
      36 => "Hedra Nagy Fakhry Aziz",
      37 => "Ibrahim Safy Salah El Degwy",
      38 => "Ibram Morees Wadie Tawfik",
      39 => "Juliana Mansour Aziz Basta",
      40 => "Kirolos Fayez Shenouda Rofael",
      41 => "Kirolos Samir Abdelmalak Hanna",
      42 => "Madonna Onsy Wadie Abdelnour",
      43 => "Magdoline Magdy Bibawy Morkos",
      44 => "Mahmoud Abdelaziz Mohamed Abdelaziz",
      45 => "Mai Abdelmaksoud Galal Abdelmaksoud",
      46 => "Mai Mohamed Abdelaziz Alam",
      47 => "Mai Nabil Hamed Eladwy",
      48 => "Maivel Boshra Zikry Mousaad",
      49 => "Marina Hany Ibrahem Botros",
      50 => "Marina Magdy Sobhy Saad",
      51 => "Marina moanes Nasrallah Ibrahim",
      52 => "Marina Mofdy Arsalious Abdelmeseh",
      53 => "Marina Naeem Adly Boules",
      54 => "Marina Raafat Gaballah Atallah",
      55 => "Mario Ashraf Anwar Habashy",
      56 => "Martina Ashraf Samir Iscandar",
      57 => "Martina Michel Wilson Megly",
      58 => "Marvy Ayman Milad Awad",
      59 => "Maureen Adel Kameel Fahim",
      60 => "Mavie Maher Mankarious Nashed",
      61 => "Merna Magdy Zakria Tawfik",
      62 => "Michael Alfons Michael Balamon",
      63 => "Michael Elkess Tadaros Sami",
      64 => "Mirna Ashraf Alfonse Gergis",
      65 => "Mirna Iskander Hanna Morkos",
      66 => "Moaaz Khalid Mohamed Mohamed",
      67 => "Mohamed Hossam Mohamed Hafez",
      68 => "Mohamed Takiy Eldin Tawfik",
      69 => "Monica Ashraf Yacoub Yassa",
      70 => "Mostafa Gamal Abdelmeniem Azab",
      71 => "Nada Elsayed elbadawy amin",
      72 => "Nahed Mohamed Mahdy Metwly",
      73 => "Nouran Elsayed Elmadawy Ahmed ",
      74 => "Nourhan Mohamed Farag Ibrahem",
      75 => "Olivia Asem Amin Hanna ",
      76 => "Olivia Samy Adly Ibrahem",
      77 => "Omar Mohamed Soliman Mohamed",
      78 => "Radwa Adel Ebrahim",
      79 => "Rafik Ibrahim Michael Mousa ",
      80 => "Ramez Maher Shehata Wahba",
      81 => "Rogina Emad Helmy Gobran",
      82 => "Sameh Samir Fathy Mostafa",
      83 => "Sarah Wael Ibrahem Elazab",
      84 => "Shahinaz Assem Mohamed Abdelmeniem",
      85 => "Sharon Fouad Aziz Gergis",
      86 => "Sherif Mounir Abdelgawad Mohamed",
      87 => "Sherif Nasser Qostandy Mikhael",
      88 => "Sylvia Emad Saad Ghatas",
      89 => "Teres Maged Mounir Kamel",
      90 => "Youssef Abdelsamad Shehata Mikhael",
      91 => "Youssef Osama Hamed Ibrahem",
      92 => "Youstina Yehia Khalaf Abdelsahed",
    ];
}
