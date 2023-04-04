<?php

namespace App\Listeners;

use App\Events\KhongDuyetBai;
use App\Mail\MailBack;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;

class NotifyKhongDuyet
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  \App\Events\KhongDuyetBai  $event
     * @return void
     */
    public function handle(KhongDuyetBai $event)
    {
        //
        $newspaper = $event ->newspaper;
        $data['message'] = 'co 1 don hang moi ban co muon tai lai trang?';
        $data['confirm'] = true;
        notify('my-channel','my-event',$data);

        $mail =$newspaper->User->email;

        Mail::to($mail)->send(new MailBack($newspaper));

    }
}
