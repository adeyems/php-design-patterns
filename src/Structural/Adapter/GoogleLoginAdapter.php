<?php


namespace DesignPatterns\Structural\Adapter;


class GoogleLoginAdapter implements LoginInterface
{
    public $googleLogin;

    public function __construct(GoogleLogin $googleLogin)
    {
        $this->googleLogin = $googleLogin;
    }

    public function login(string $email)
    {
        return $this->googleLogin->signIn($email, $this->googleLogin->getAuthToken());
    }
}