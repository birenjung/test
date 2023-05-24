<?php

namespace App\Http\Controllers;

use App\Mail\ImageEmail;
use App\Services\WorldpayService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class PayController extends Controller
{

    public function index()
    {
        $link = 'www.google.com';
        $qrCode = QrCode::format('png')->size(250)->generate($link);

        $qrCodePath = public_path('qrcodes/qrcode1.png');
        file_put_contents($qrCodePath, $qrCode);
    }

    function sendEmail()
    {
        $email = new ImageEmail();
        Mail::to('recipient@example.com')->send($email);
    }
}
