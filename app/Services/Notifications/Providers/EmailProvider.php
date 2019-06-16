<?php
namespace APP\Services\Notifications\Providers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailable;
use App\Services\Notifications\Providers\Contracts\provider;

class EmailProvider implements provider
{
    private $email;
    private $mailable;
    public function __construct(String $email,Mailable $mailable)
    {
        $this->email = $email;
        $this->mailable =$mailable;
    }
    public function send()
    {
        Mail::to($this->email)->send($this->mailable);
    }
 
}