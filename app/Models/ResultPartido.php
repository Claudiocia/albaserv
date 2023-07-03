<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ResultPartido.
 *
 * @package namespace App\Models;
 * @property int $id
 * @property string $dt_geracao
 * @property string $hh_geracao
 * @property string $ano_eleicao
 * @property string $cd_tipo_eleicao
 * @property string $nm_tipo_eleicao
 * @property string $nr_turno
 * @property string $cd_eleicao
 * @property string $ds_eleicao
 * @property string $dt_eleicao
 * @property string $tp_abrangencia
 * @property string $sg_uf
 * @property string $sg_ue
 * @property string $nm_ue
 * @property string $cd_municipio
 * @property string $nm_municipio
 * @property string $nr_zona
 * @property string $cd_cargo
 * @property string $ds_cargo
 * @property string|null $tp_agremiacao
 * @property string|null $nr_partido
 * @property string|null $sg_partido
 * @property string|null $nm_partido
 * @property string|null $nr_federacao
 * @property string|null $nm_federacao
 * @property string|null $sg_federacao
 * @property string|null $ds_composicao_federacao
 * @property string|null $sq_coligacao
 * @property string|null $nm_coligacao
 * @property string|null $ds_composicao_coligacao
 * @property string $st_voto_em_transito
 * @property string $qt_votos_legenda_validos
 * @property string $qt_votos_nominais_convr_leg
 * @property string $qt_total_votos_leg_validos
 * @property string $qt_votos_nominais_validos
 * @property string $qt_votos_legenda_anul_subjud
 * @property string $qt_votos_nominais_anul_subjud
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereAnoEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereCdCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereCdEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereCdMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereCdTipoEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereDsCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereDsComposicaoColigacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereDsComposicaoFederacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereDsEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereDtEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereDtGeracao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereHhGeracao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNmColigacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNmFederacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNmMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNmPartido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNmTipoEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNmUe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNrFederacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNrPartido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNrTurno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereNrZona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereQtTotalVotosLegValidos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereQtVotosLegendaAnulSubjud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereQtVotosLegendaValidos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereQtVotosNominaisAnulSubjud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereQtVotosNominaisConvrLeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereQtVotosNominaisValidos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereSgFederacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereSgPartido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereSgUe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereSgUf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereSqColigacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereStVotoEmTransito($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereTpAbrangencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereTpAgremiacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultPartido whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ResultPartido extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'dt_geracao',
		'hh_geracao',
		'ano_eleicao',
		'cd_tipo_eleicao',
		'nm_tipo_eleicao',
		'nr_turno',
		'cd_eleicao',
		'ds_eleicao',
		'dt_eleicao',
		'tp_abrangencia',
		'sg_uf',
		'sg_ue',
		'nm_ue',
		'cd_municipio',
		'nm_municipio',
		'nr_zona',
		'cd_cargo',
		'ds_cargo',
		'tp_agremiacao',
		'nr_partido',
		'sg_partido',
		'nm_partido',
		'nr_federacao',
		'nm_federacao',
		'sg_federacao',
		'ds_composicao_federacao',
		'sq_coligacao',
		'nm_coligacao',
		'ds_composicao_coligacao',
		'st_voto_em_transito',
		'qt_votos_legenda_validos',
		'qt_votos_nominais_convr_leg',
		'qt_total_votos_leg_validos',
		'qt_votos_nominais_validos',
		'qt_votos_legenda_anul_subjud',
		'qt_votos_nominais_anul_subjud',
	];

}
