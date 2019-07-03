<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class ReservationConfirmed extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance by abdelwahed .
     * @author Abdelwahed Madani Yousfi
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the notification's delivery channels by abdelwahed .
     * @author Madani yousfi Abdelwahed
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification abdelwahed.
     * @author Abdelwahed Madani yousfi
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('sahit mon frr reservation has been confirmed ')
                    ->line('Thank you for using Guidech wow omg');
    }

    /**
     * Get the array representation of the notification.
     *  @author Abdelwahed Madani Yousfi
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}
