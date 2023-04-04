<?php

namespace App\Mail;

use App\Models\Newspaper;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class MailBack extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(Newspaper  $newspaper)

    {
        //
        $this->newpaper=$newspaper;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()

    {

        return $this->view('mail.mail-thong-bao-khong-duyet',[
            'newspaper'=>$this->newpaper
        ]);
    }
}
