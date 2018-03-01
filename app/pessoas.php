<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pessoas extends Model
{
    protected $table = 'pessoas';

    protected $guarded = ['RECNO'];

    protected $fillable = ['NOME','EMAIL'];

    public $timestamps = false;
}
