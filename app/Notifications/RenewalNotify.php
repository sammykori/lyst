<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;

class RenewalNotify extends Notification
{
    use Queueable;
    protected $dates;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($dates)
    {
        $this->dates = $dates;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail','database'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->subject('RENEWAL OF LICENCE, LYST NOTIFICATION')
                    ->greeting($this->dates->company_name. " Licence is almost up")
                    ->line('This is the Licence ID: '.$this->dates->licence_id)
                    ->line('The expiry date is '.$this->dates->expiry_date)
                    ->line('Click on the action button to view details')
                    ->action('View', url('/pending'));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'company_name' => $this->dates->company_name,
            'licence_id' => $this->dates->licence_id,
            'expiry_date' => $this->dates->expiry_date
        ];
    }
}
