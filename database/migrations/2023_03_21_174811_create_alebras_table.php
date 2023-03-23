<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('alebras', function(Blueprint $table) {
            $table->id();
            $table->string('chave');
            $table->string('nome');
            $table->string('sigla');
            $table->string('presid')->nullable();
            $table->string('end');
            $table->string('bairro')->nullable();
            $table->string('cep')->nullable();
            $table->string('cidade');
            $table->string('uf');
            $table->string('tel')->nullable();
            $table->string('cnpj')->nullable();
            $table->string('url');
            $table->string('email')->nullable();
			$table->text('tag')->tag();
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
		Schema::drop('alebras');
	}
};
