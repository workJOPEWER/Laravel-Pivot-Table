<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCategoryPostTabel extends Migration
{
	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create( 'category_post', function (Blueprint $table) {
			$table->id();
			$table->foreignId( 'post_id' )->constrained( 'posts' )->onDelete( 'cascade' );
			$table->foreignId( 'category_id' )->constrained( 'categories' )->onDelete( 'cascade' );
			$table->string('extra_field')->nullable();
			$table->timestamps();
		} );
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::dropIfExists( 'category_post' );
	}
}
