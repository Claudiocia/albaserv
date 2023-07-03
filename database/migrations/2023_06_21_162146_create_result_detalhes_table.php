<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('result_detalhes', function(Blueprint $table) {
            $table->id();
			$table->string('dt_geracao');
			$table->string('hh_geracao');
			$table->string('ano_eleicao');
			$table->string('cd_tipo_eleicao');
			$table->string('nm_tipo_eleicao');
			$table->string('nr_turno');
			$table->string('cd_eleicao');
			$table->string('ds_eleicao');
			$table->string('dt_eleicao');
			$table->string('tp_abrangencia');
			$table->string('sg_uf');
			$table->string('sg_ue');
			$table->string('nm_ue');
			$table->string('cd_municipio');
			$table->string('nm_municipio');
			$table->string('nr_zona');
			$table->string('cd_cargo');
			$table->string('ds_cargo');
			$table->string('qt_aptos');
			$table->string('qt_secoes_principais');
			$table->string('qt_secoes_agregadas');
			$table->string('qt_secoes_nao_instaladas');
			$table->string('qt_total_secoes');
			$table->string('qt_comparecimento');
			$table->string('qt_eleitores_secoes_nao_instaladas');
			$table->string('qt_abstencoes');
			$table->string('st_voto_em_transito');
			$table->string('qt_votos');
			$table->string('qt_votos_concorrentes');
			$table->string('qt_votos_validos');
			$table->string('qt_votos_nominais_validos');
			$table->string('qt_total_votos_leg_validos');
			$table->string('qt_votos_legenda_validos');
			$table->string('qt_votos_nominais_convr_leg');
			$table->string('qt_total_votos_anulados');
			$table->string('qt_votos_nominais_anulados');
			$table->string('qt_votos_legenda_anulados');
			$table->string('qt_total_votos_anul_subjud');
			$table->string('qt_votos_nominais_anul_subjud');
			$table->string('qt_votos_legenda_anul_subjud');
			$table->string('qt_votos_brancos');
			$table->string('qt_total_votos_nulos');
			$table->string('qt_votos_nulos');
			$table->string('qt_votos_nulo_tecnico');
			$table->string('qt_votos_anulados_apu_sep');
			$table->string('hh_ultima_totalizacao');
			$table->string('dt_ultima_totalizacao');
            $table->timestamps();
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('result_detalhes');
	}
};
