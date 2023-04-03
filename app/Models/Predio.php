<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Predio.
 *
 * @package namespace App\Models;
 * @property int $id
 * @property string $nome
 * @property int $alebra_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Predio newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Predio newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Predio query()
 * @method static \Illuminate\Database\Eloquent\Builder|Predio whereAlebraId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Predio whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Predio whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Predio whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Predio whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Predio extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'nome',
		'alebra_id',
	];

    public function alebra()
    {
        return $this->belongsTo(Alebra::class);
    }

}
