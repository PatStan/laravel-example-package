<?php

namespace PatStan\Example\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MyModel extends Model
{
    use HasFactory;

    public $guarded = [];

    public function getUppercaseName() : string
    {
        return strtoupper($this->name);
    }
}
