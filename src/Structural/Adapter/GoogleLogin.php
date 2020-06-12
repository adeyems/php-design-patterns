<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

class GoogleLogin {

    private $authToken;

    public function signIn(string $email , $authToken){
        return "signing in with $email and $authToken";
    }
    
    public function getAuthToken(){
        return 'authToken';
    }
}