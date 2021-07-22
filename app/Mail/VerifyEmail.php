<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class VerifyEmail extends Mailable
{
    use Queueable, SerializesModels;

    public $seeder_data;
    public $url;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct($seeder_data,$url)
    {
      $this->seeder = $seeder_data;
      $this->url = $url;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from('noreply@ntstradingrobot.com','Form Filling')->subject('Form Filling')->view('admin.user.verify-email');
    }
}
