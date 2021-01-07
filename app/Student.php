<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    protected $table = 'student';
    protected $primarykey = 'id';
    public $timestamps = false;    // defaultnya true
    protected $fillable = ['nis', 'name', 'image', 'rank', 'score'];    // data yang boleh diisi
}
