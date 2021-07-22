<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\Seeders;

class NewSeeder extends Notification
{
  use Queueable;

  private $seeder;

  /**
   * Create a new notification instance.
   *
   * @return void
   */
  public function __construct(Seeders $seeder_data)
  {
      $this->seeder = $seeder_data;
  }

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
          ->line('New seeder has registered with email ' . $this->seeder->email);
  }

    public function toDatabase($notifiable)
    {
        return [
            'body' => $this->seeder->name . ' has registered with email ' . $this->seeder->email,
            // 'player' =>  $this->seeder
        ];
    }

}
