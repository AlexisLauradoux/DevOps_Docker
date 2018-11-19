<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function NameTest()
    {
      $user = new User();

      $user->setName("TestName");

      $this->assertEquals("TestName", $user->getName());
    }

    public function PasswordTest()
    {
      $user = new User();

      $user->setPassword("TestPassword");

      $this->assertEquals("TestPassword", $user->getPassword());
    }

    public function PseudoTest()
    {
      $user = new User();

      $user->setPseudo("TestPseudo");

      $this->assertEquals("TestPseudo", $user->getPseudo());
    }
}
