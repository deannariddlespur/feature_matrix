<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateClientSitesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('ClientSites', function(Blueprint $table)
		{
				
				$table->increments('clientID');
				$table->string('siteName');
				$table->Date('launchDate');
				$table->Text('description');
				$table->timestamps();
				//
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('ClientSites');
	}

}
