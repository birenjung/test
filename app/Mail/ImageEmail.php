<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ImageEmail extends Mailable
{
    use Queueable, SerializesModels;

    public function build()
    {
        return $this->view('image')
            ->attach(public_path('qrcodes/qrcode1.png'), [
                'as' => 'image.jpg',
                'mime' => 'image/jpeg',
            ]);
    }
}
