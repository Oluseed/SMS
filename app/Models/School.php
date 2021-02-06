<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class School extends Model
{
    protected $connection = 'srms';

    protected $primaryKey = 'school_name';

    public $incrementing = false;

    protected $keyType = 'string';

}
