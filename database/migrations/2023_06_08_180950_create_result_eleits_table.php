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
		Schema::create('result_eleits', function(Blueprint $table) {
            $table->id();
			$table->string('dt_geracao');
			$table->string('hh_geracao');
			$table->string('ano_eleicao');
			$table->string('cod_tipo_eleicao');
			$table->string('nm_tipo_eleicao');
			$table->string('nr_turno');
			$table->string('cd_eleicao');
			$table->string('ds_eleicao');
			$table->string('dt_eleicao');
			$table->string('tp_abrangencia');
			$table->string('sg_uf');
			$table->string('sg_ue');
			$table->string('nm_ue');
			$table->string('cod_municipio');
			$table->string('nm_municipio');
			$table->string('nr_zona');
			$table->string('cd_cargo');
			$table->string('ds_cargo');
			$table->string('sq_candidato');
			$table->string('nr_candidato');
			$table->string('nm_candidato');
			$table->string('nm_urna_candidato');
			$table->string('nm_social_candidato')->nullable();
			$table->string('cod_situacao_candidatura');
			$table->string('ds_situacao_candidatura');
			$table->string('cod_detalhe_situacao_cand');
			$table->string('ds_detalhe_sit_cand');
			$table->string('tp_agremiacao');
			$table->string('nr_partido');
			$table->string('sg_partido');
			$table->string('nm_partido');
			$table->string('nr_federacao')->nullable();
			$table->string('nm_federacao')->nullable();
			$table->string('sg_federacao')->nullable();
			$table->string('ds_composicao_federacao')->nullable();
			$table->string('sq_coligacao');
			$table->string('nm_coligacao');
			$table->string('ds_composicao_coligacao');
			$table->string('st_voto_em_transito');
			$table->string('qt_votos_nominais');
			$table->string('nm_tipo_destinacao_votos');
			$table->string('qt_votos_nominais_validos');
			$table->string('cd_sit_tot_turno');
			$table->string('ds_sit_tot_turno');
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
		Schema::drop('result_eleits');
	}
};
