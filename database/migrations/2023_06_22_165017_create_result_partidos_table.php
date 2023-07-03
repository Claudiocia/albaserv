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
		Schema::create('result_partidos', function(Blueprint $table) {
            $table->increments('id');
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
			$table->string('tp_agremiacao')->nullable();
			$table->string('nr_partido')->nullable();
			$table->string('sg_partido')->nullable();
			$table->string('nm_partido')->nullable();
			$table->string('nr_federacao')->nullable();
			$table->string('nm_federacao')->nullable();
			$table->string('sg_federacao')->nullable();
			$table->string('ds_composicao_federacao')->nullable();
			$table->string('sq_coligacao')->nullable();
			$table->string('nm_coligacao')->nullable();
			$table->string('ds_composicao_coligacao')->nullable();
			$table->string('st_voto_em_transito');
			$table->string('qt_votos_legenda_validos');
			$table->string('qt_votos_nominais_convr_leg');
			$table->string('qt_total_votos_leg_validos');
			$table->string('qt_votos_nominais_validos');
			$table->string('qt_votos_legenda_anul_subjud');
			$table->string('qt_votos_nominais_anul_subjud');
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
		Schema::drop('result_partidos');
	}
};
