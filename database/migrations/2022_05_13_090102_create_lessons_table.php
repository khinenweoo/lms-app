<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateLessonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lessons', function (Blueprint $table) {
            $table->increments('id');
            $table->bigInteger('chapter_id')->unsigned();
            $table->string('name');
            $table->integer('duration')->nullable()->comment('in minute');
            $table->text('short_text')->nullable();
            $table->text('full_text')->nullable();
            $table->string('type')->nullable();
            $table->string('url')->nullable();
            $table->string('material_file')->nullable();
            $table->integer('position')->nullable()->unsigned();
            $table->tinyInteger('free_lesson')->nullable()->default(1);

            $table->foreign('chapter_id')->references('id')->on('chapters')->onDelete('cascade');
            $table->timestamps();
            $table->softDeletes();
            $table->index(['deleted_at']);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('lessons');
    }
}
