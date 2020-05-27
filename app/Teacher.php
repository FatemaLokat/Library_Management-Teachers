<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $fillable = [
        'Teacher_ID',
        'Name',
        'Book_ID',
        'Department',
        'Email_ID',
        'Mobile_Number'

    ];
}
