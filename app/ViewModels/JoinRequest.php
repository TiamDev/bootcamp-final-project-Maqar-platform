<?php

namespace App\ViewModels;

class JoinRequest

{
  public $user;
  public $provider;
  public $directorate;
  public $governorate;

  public function __construct($user, $provider, $directorate, $governorate)
  {
    $this->user = $user;
    $this->provider = $provider;
    $this->directorate = $directorate;
    $this->governorate = $governorate;
  }

  // You can also define additional methods as needed
}
