<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


class Appointment extends Model
{
    use HasFactory;

    protected $table = 'appointments'; // Set the table name if it's different from the model name
    protected $services;

  protected $fillable = [
      'name',
      'email',
      'message',
      'subject',
      'reservation_date',
      'reservation_time',
      'services',
  ];


}
