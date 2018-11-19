<?php

namespace App\Entity;

class User
{
  private $Name;
  private $Password;
  private $Pseudo;

  public function getName()
  {
     return $Name;
  }

  public function getPassword()
  {
     return $Password;
  }

  public function getPseudo()
  {
     return $Pseudo;
  }

  public function setName($name)
  {
    $Name = $name;
  }

  public function setPassword($password)
  {
     $Password = $password;
   }

  function setPseudo($pseudo)
  {
    $Pseudo = $pseudo;
  } 

}
