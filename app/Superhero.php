<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Superhero extends Model
{
	protected $table = 'superheros';

    protected $fillable = [
        'nome', 'nomereal', 'descricao', 'superpoderes', 'frasecomercial', 'images'
    ];

}
