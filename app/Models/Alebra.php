<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Alebra.
 *
 * @package namespace App\Models;
 */
class Alebra extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'chave',
		'nome',
		'sigla',
		'presid',
		'end',
		'bairro',
		'cep',
		'cidade',
		'uf',
		'tel',
		'cnpj',
		'url',
		'email',
		'tag',
	];

}
