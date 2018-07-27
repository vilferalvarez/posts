<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $filliable=["titulo","descripcion","url"];
    
}
