<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class ResultDetalhe.
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
 * @property string $qt_aptos
 * @property string $qt_secoes_principais
 * @property string $qt_secoes_agregadas
 * @property string $qt_secoes_nao_instaladas
 * @property string $qt_total_secoes
 * @property string $qt_comparecimento
 * @property string $qt_eleitores_secoes_nao_instaladas
 * @property string $qt_abstencoes
 * @property string $st_voto_em_transito
 * @property string $qt_votos
 * @property string $qt_votos_concorrentes
 * @property string $qt_votos_validos
 * @property string $qt_votos_nominais_validos
 * @property string $qt_total_votos_leg_validos
 * @property string $qt_votos_legenda_validos
 * @property string $qt_votos_nominais_convr_leg
 * @property string $qt_total_votos_anulados
 * @property string $qt_votos_nominais_anulados
 * @property string $qt_votos_legenda_anulados
 * @property string $qt_total_votos_anul_subjud
 * @property string $qt_votos_nominais_anul_subjud
 * @property string $qt_votos_legenda_anul_subjud
 * @property string $qt_votos_brancos
 * @property string $qt_total_votos_nulos
 * @property string $qt_votos_nulos
 * @property string $qt_votos_nulo_tecnico
 * @property string $qt_votos_anulados_apu_sep
 * @property string $hh_ultima_totalizacao
 * @property string $dt_ultima_totalizacao
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe query()
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereAnoEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereCdCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereCdEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereCdMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereCdTipoEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereDsCargo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereDsEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereDtEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereDtGeracao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereDtUltimaTotalizacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereHhGeracao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereHhUltimaTotalizacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereNmMunicipio($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereNmTipoEleicao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereNmUe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereNrTurno($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereNrZona($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtAbstencoes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtAptos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtComparecimento($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtEleitoresSecoesNaoInstaladas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtSecoesAgregadas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtSecoesNaoInstaladas($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtSecoesPrincipais($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtTotalSecoes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtTotalVotosAnulSubjud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtTotalVotosAnulados($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtTotalVotosLegValidos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtTotalVotosNulos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosAnuladosApuSep($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosBrancos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosConcorrentes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosLegendaAnulSubjud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosLegendaAnulados($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosLegendaValidos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosNominaisAnulSubjud($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosNominaisAnulados($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosNominaisConvrLeg($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosNominaisValidos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosNuloTecnico($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosNulos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereQtVotosValidos($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereSgUe($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereSgUf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereStVotoEmTransito($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereTpAbrangencia($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ResultDetalhe whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class ResultDetalhe extends Model implements Transformable
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
		'qt_aptos',
		'qt_secoes_principais',
		'qt_secoes_agregadas',
		'qt_secoes_nao_instaladas',
		'qt_total_secoes',
		'qt_comparecimento',
		'qt_eleitores_secoes_nao_instaladas',
		'qt_abstencoes',
		'st_voto_em_transito',
		'qt_votos',
		'qt_votos_concorrentes',
		'qt_votos_validos',
		'qt_votos_nominais_validos',
		'qt_total_votos_leg_validos',
		'qt_votos_legenda_validos',
		'qt_votos_nominais_convr_leg',
		'qt_total_votos_anulados',
		'qt_votos_nominais_anulados',
		'qt_votos_legenda_anulados',
		'qt_total_votos_anul_subjud',
		'qt_votos_nominais_anul_subjud',
		'qt_votos_legenda_anul_subjud',
		'qt_votos_brancos',
		'qt_total_votos_nulos',
		'qt_votos_nulos',
		'qt_votos_nulo_tecnico',
		'qt_votos_anulados_apu_sep',
		'hh_ultima_totalizacao',
		'dt_ultima_totalizacao',
	];

}
