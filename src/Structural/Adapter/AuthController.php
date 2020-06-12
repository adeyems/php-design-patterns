<?php


namespace DesignPatterns\Structural\Adapter;


class AuthController
{

    /**
     * @var LoginInterface
     */
    private $loginType;

    public function __construct(LoginInterface $loginType)
    {
        $this->loginType = $loginType;
    }

    public function authenticate(string $email){
        return $this->loginType->login($email);
    }
}