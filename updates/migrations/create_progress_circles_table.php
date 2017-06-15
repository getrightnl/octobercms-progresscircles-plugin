<?php namespace GetRight\ProgressCircles\Updates;

use Schema;
use October\Rain\Database\Schema\Blueprint;
use October\Rain\Database\Updates\Migration;

class CreateProgressCirclesTable extends Migration
{
    public function up()
    {
        Schema::create('getright_progresscircles_progress_circles', function(Blueprint $table) {
            $table->engine = 'InnoDB';
            $table->increments('id');

            $table->string('name', 75);
            $table->string('title', 75);
            $table->text('text');
            $table->integer('value');

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('getright_progresscircles_progress_circles');
    }
}
