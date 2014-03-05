<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateRelationship extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		// reference member and comment.
		Schema::table('comments', function(Blueprint $table){
			$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		// drop foreign reference.
		Schema::table('comments', function(Blueprint $table){
			$table->dropForeign('comments_user_id_foreign');
		});
	}

}
