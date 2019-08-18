<?php

namespace App\Listeners;

use App\Events\UserwasBanned;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
    // در صف بزار هروقت سر سرور خلوت شد انجام بدش
class EmailBannedNotification implements ShouldQueue
{

    /**
     * @var \Mailer
     */
//    public $mailer;*********

    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
//    public function __construct(\Mailer $mailer)*****
    {
       
//        $this->mailer = $mailer;*******
    }

    /**
     * Handle the event.
     *
     * @param  UserwasBanned  $event
     * @return void
     */
    public function handle(UserwasBanned $event)
    {
//        $this->mailer->sendBanNotification($event->user->email);
        var_dump('notifi'.$event->user->name .'they have been baned');
    }
}
