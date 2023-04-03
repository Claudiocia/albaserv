<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Ambiente.
 *
 * @package namespace App\Models;
 * @property int $id
 * @property string $nome
 * @property string|null $num
 * @property string $tipo
 * @property int $andar_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente whereAndarId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente whereNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente whereTipo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente whereUpdatedAt($value)
 * @property string|null $chave
 * @property string|null $tag
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente whereChave($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ambiente whereTag($value)
 * @mixin \Eloquent
 */
class Ambiente extends Model implements Transformable
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
		'num',
		'tipo',
        'tag',
		'andar_id',
	];

    public function andar()
    {
        return $this->belongsTo(Andar::class);
    }

}
