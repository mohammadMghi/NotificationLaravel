<?php
namespace App\Services\Notifications;
 
use App\Services\Notifications\Providers\Contracts\provider;

class Notification
{
    public function __call($method, $arguments)
    {
        $providerName = __NAMESPACE__ . '\Providers\\' . substr($method , 4) . 'Provider';
        $provider =  new $providerName;
        if(!\class_exists($provider)){
            throw new \Exception("class dose not exist");
        }
        if(is_subclass_of($provider,provider::class)){
            throw new \Exception("class must implements provider");
        }
        $provider->send(... $arguments);
    } 
}