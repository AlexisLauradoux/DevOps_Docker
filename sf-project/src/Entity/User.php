<?php

namespace App\Entity;

class User
{
  private $Name;
  private $Password;
  private $Pseudo;

  public function getName()
  {
     return $this->Name;
  }

  public function getPassword()
  {
     return $this->Password;
  }

  public function getPseudo()
  {
     return $this->Pseudo;
  }

  public function setName($name)
  {
    $this->Name = $name;
  }

  public function setPassword($password)
  {
     $this->Password = $password;
   }

  function setPseudo($pseudo)
  {
    $this->Pseudo = $pseudo;
  }

}
