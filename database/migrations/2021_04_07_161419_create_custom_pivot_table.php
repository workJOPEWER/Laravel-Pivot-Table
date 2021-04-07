<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCustomPivotTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('custom_pivot', function (Blueprint $table) {
            $table->id();
			$table->foreignId( 'my_p_id' )->constrained( 'posts' )->onDelete( 'cascade' );
			$table->foreignId( 'my_c_id' )->constrained( 'categories' )->onDelete( 'cascade' );
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
        Schema::dropIfExists('custom_pivot');
    }
}
