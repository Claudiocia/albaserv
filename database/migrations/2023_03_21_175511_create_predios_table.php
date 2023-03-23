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
		Schema::create('predios', function(Blueprint $table) {
            $table->id();
			$table->string('nome');
			$table->unsignedBigInteger('alebra_id');
            $table->foreign('alebra_id')->references('id')->on('alebras');
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
		Schema::drop('predios');
	}
};
