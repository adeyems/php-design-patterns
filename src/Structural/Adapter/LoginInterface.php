<?php

declare(strict_types=1);

namespace DesignPatterns\Structural\Adapter;

interface LoginInterface
{
    public function login(string $email);
}