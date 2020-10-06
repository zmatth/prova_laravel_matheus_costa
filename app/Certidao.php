<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Certidao extends Model
{
    protected $fillable = [
        'tipocertidao','envolvido1','envolvido2','datacertidao','tabeliao'
    ];
}
