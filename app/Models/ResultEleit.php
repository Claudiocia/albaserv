<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ResultEleit.
 *
 * @package namespace App\Models;
 * @property int $id
 * @property string $dt_geracao
 * @property string $hh_geracao
 * @property string $ano_eleicao
 * @property string $cod_tipo_eleicao
 * @property string $nm_tipo_eleicao
 * @property string $nr_turno
 * @property string $cd_eleicao
 * @property string $ds_eleicao
 * @property string $dt_eleicao
 * @property string $tp_abrangencia
 * @property string $sg_uf
 * @property string $sg_ue
 * @property string $nm_ue
 * @property string $cod_municipio
 * @property string $nm_municipio
 * @property string $nr_zona
 * @property string $cd_cargo
 * @property string $ds_cargo
 * @property string $sq_candidato
 * @property string $nr_candidato
 * @property string $nm_candidato
 * @property string $nm_urna_candidato
 * @property string $nm_social_candidato
 * @property string $cod_situacao_candidatura
 * @property string $ds_situacao_candidatura
 * @property string $cod_detalhe_situacao_cand
 * @property string $ds_detalhe_sit_cand
 * @property string $tp_agremiacao
 * @property string $nr_partido
 * @property string $sg_partido
 * @property string $nm_partido
 * @property string $nr_federacao
 * @property string $nm_federacao
 * @property string $sg_federacao
 * @property string $ds_composicao_federacao
 * @property string $sq_coligacao
 * @property string $nm_coligacao
 * @property string $ds_composicao_coligacao
 * @property string $st_voto_em_transito
 * @property string $qt_votos_nominais
 * @property string $nm_tipo_destinacao_votos
 * @property string $qt_votos_nominais_validos
 * @property string $cd_sit_tot_turno
 * @property string $ds_sit_tot_turno
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereAnoEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereCdCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereCdEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereCdSitTotTurno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereCodDetalheSituacaoCand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereCodMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereCodSituacaoCandidatura($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereCodTipoEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereDsCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereDsComposicaoColigacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereDsComposicaoFederacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereDsDetalheSitCand($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereDsEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereDsSitTotTurno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereDsSituacaoCandidatura($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereDtEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereDtGeracao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereHhGeracao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmCandidato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmColigacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmFederacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmPartido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmSocialCandidato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmTipoDestinacaoVotos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmTipoEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmUe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNmUrnaCandidato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNrCandidato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNrFederacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNrPartido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNrTurno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereNrZona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereQtVotosNominais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereQtVotosNominaisValidos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereSgFederacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereSgPartido($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereSgUe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereSgUf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereSqCandidato($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereSqColigacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereStVotoEmTransito($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereTpAbrangencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereTpAgremiacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultEleit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ResultEleit extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
		'dt_geracao', 'hh_geracao', 'ano_eleicao', 'cod_tipo_eleicao',
		'nm_tipo_eleicao', 'nr_turno', 'cd_eleicao', 'ds_eleicao',
		'dt_eleicao', 'tp_abrangencia', 'sg_uf', 'sg_ue',
		'nm_ue', 'cod_municipio', 'nm_municipio', 'nr_zona',
		'cd_cargo', 'ds_cargo', 'sq_candidato', 'nr_candidato',
		'nm_candidato', 'nm_urna_candidato', 'nm_social_candidato', 'cod_situacao_candidatura',
		'ds_situacao_candidatura', 'cod_detalhe_situacao_cand', 'ds_detalhe_sit_cand', 'tp_agremiacao',
		'nr_partido', 'sg_partido', 'nm_partido', 'nr_federacao',
		'nm_federacao', 'sg_federacao', 'ds_composicao_federacao', 'sq_coligacao',
		'nm_coligacao', 'ds_composicao_coligacao', 'st_voto_em_transito', 'qt_votos_nominais',
		'nm_tipo_destinacao_votos', 'qt_votos_nominais_validos', 'cd_sit_tot_turno', 'ds_sit_tot_turno',
	];

}
