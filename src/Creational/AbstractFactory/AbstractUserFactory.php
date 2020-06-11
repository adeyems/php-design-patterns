<?php
declare(strict_types=1);

namespace DesignPatterns\Creational\AbstractFactory;


abstract class AbstractUser
{
     public abstract function createAccount();
}