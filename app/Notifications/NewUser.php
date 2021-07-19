<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use App\Models\User;

class NewUser extends Notification
{
  use Queueable;

  private $user;

  /**
   * Create a new notification instance.
   *
   * @return void
   */
  public function __construct(User $user)
  {
      $this->user = $user;
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
          ->line('New user has registered with email ' . $this->user->email);
  }

    public function toDatabase($notifiable)
    {
        return [
            'body' => $this->user->name . ' has registered with email ' . $this->user->email,
            'player' =>  $this->user
        ];
    }

}
