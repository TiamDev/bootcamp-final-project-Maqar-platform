<?php

namespace App\TempReservatian;

class TempReservatian
{
  public $office_id;
  public $services_ids;
  public $date;
  public $time;

  public function __construct($office_id, $services_ids, $date, $time)
  {
    $this->office_id = $office_id;
    $this->services_ids = $services_ids;
    $this->date = $date;
    $this->time = $time;
  }
  public static function fetch($reservationId)
  {
  }

  public function save()
  {
  }

  public function clear()
  {
  }
}
