<?php

declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;

interface Account
{
    public function create(): string;
}
