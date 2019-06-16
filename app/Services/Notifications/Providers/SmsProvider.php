<?php
namespace App\Services\Notifications\Providers;

use GuzzleHttp\Client;
use App\Services\Notifications\Providers\Contracts\provider;

class SmsProvider implements provider
{
    private $number;
    private $text;
    public function __construct(char $number,String $text)
    {
        $this->number = $number;
        $this->text = $text;
    }

    public function send()
    {
       $client = new Client();
        $data =[
            array_merge(config('services.sms.auth') , 
                       ['op' => 'send',
                        'message' => $this->text,
                        'to' => $this->number ]
                        )        
                ];

         $options =[
             'json' => $data
         ];
 
         $response =  $client->post(config('services.sms.uri'),$options);


    }
}