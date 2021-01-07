<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    protected $table = 'teacher';
    protected $primarykey = 'id';
    public $timestamps = false;    // defaultnya true
    protected $fillable = ['nip', 'name', 'image', 'subject'];    // data yang boleh diisi
}
