<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class Ala.
 *
 * @package namespace App\Models;
 * @property int $id
 * @property string $nome
 * @property int $predio_id
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Ala newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ala newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Ala onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Ala query()
 * @method static \Illuminate\Database\Eloquent\Builder|Ala whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ala whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ala whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ala whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ala wherePredioId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ala whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Ala withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|Ala withoutTrashed()
 * @property-read \App\Models\Predio $predio
 * @mixin \Eloquent
 */
}

namespace App\Models{
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
}

namespace App\Models{
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
 * @property-read \App\Models\Andar $andar
 * @mixin \Eloquent
 */
}

namespace App\Models{
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
 * @property-read \App\Models\Ala $ala
 * @mixin \Eloquent
 */
}

namespace App\Models{
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
 * @property-read \App\Models\Alebra $alebra
 * @mixin \Eloquent
 */
}

namespace App\Models{
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
}

namespace App\Models{
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

}

namespace App\Models{
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
}

namespace App\Models{
/**
 * Class Role.
 *
 * @package namespace App\Models;
 * @property int $id
 * @property string $nome
 * @property string $system
 * @property string|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 * @property-read int|null $users_count
 * @method static \Illuminate\Database\Eloquent\Builder|Role newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Role query()
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereNome($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereSystem($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Role whereUpdatedAt($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\User> $users
 */
}

namespace App\Models{
/**
 * Class User.
 *
 * @package namespace App\Models;
 * @property int $id
 * @property string $name
 * @property string $cpf
 * @property string $email
 * @property string|null $cadastro
 * @property string|null $lotacao
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $two_factor_secret
 * @property string|null $two_factor_recovery_codes
 * @property string|null $two_factor_confirmed_at
 * @property string|null $remember_token
 * @property int|null $current_team_id
 * @property string|null $profile_photo_path
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCadastro($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCpf($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCurrentTeamId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereLotacao($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereProfilePhotoPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorConfirmedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorRecoveryCodes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereTwoFactorSecret($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User withTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|User withoutTrashed()
 * @property string|null $celular
 * @property string|null $ramal
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCelular($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRamal($value)
 * @mixin \Eloquent
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Role> $roles
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 */
}

