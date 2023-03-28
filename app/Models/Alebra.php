<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Alebra.
 *
 * @package namespace App\Models;
 * @property int $id
 * @property string $chave
 * @property string $nome
 * @property string $sigla
 * @property string|null $presid
 * @property string $end
 * @property string|null $bairro
 * @property string|null $cep
 * @property string $cidade
 * @property string $uf
 * @property string|null $tel
 * @property string|null $cnpj
 * @property string $url
 * @property string|null $email
 * @property string $tag
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra query()
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereBairro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereCep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereChave($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereCidade($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereCnpj($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereEnd($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra wherePresid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereSigla($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereTag($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereTel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereUf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Alebra whereUrl($value)
 * @mixin \Eloquent
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
        'id',
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
