<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Andar.
 *
 * @package namespace App\Models;
 * @property int $id
 * @property string $nome
 * @property int $ala_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Andar newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Andar newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Andar query()
 * @method static \Illuminate\Database\Eloquent\Builder|Andar whereAlaId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Andar whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Andar whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Andar whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Andar whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Andar extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'nome',
		'ala_id',
	];

}
