<?php

namespace App\Tests\Entity;

use App\Entity\User;
use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testName()
    {
      $user = new User();

      $user->setName("TestName");

      $this->assertEquals("TestName", $user->getName());
    }

    public function testPassword()
    {
      $user = new User();

      $user->setPassword("TestPassword");

      $this->assertEquals("TestPassword", $user->getPassword());
    }

    public function testPseudo()
    {
      $user = new User();

      $user->setPseudo("TestPseudo");

      $this->assertEquals("TestPseudo", $user->getPseudo());
    }
}
