<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name')->unique();
            $table->string('slug');
            $table->longText('course_description')->nullable();

            $table->unsignedInteger('category_id');
            $table->bigInteger('instructor_id')->unsigned();

            $table->longText('course_requirements')->nullable();
            $table->longText('course_outcomes')->nullable();
            $table->decimal('price', 15, 2)->nullable();
            $table->string('course_image')->nullable();
            $table->string('overview_video')->nullable();
            $table->timestamp('started_date')->nullable();
            $table->timestamp('end_date')->nullable();


            $table->date('reg_close_date')->nullable();
            $table->tinyInteger('published')->default(0)->nullable();
            $table->tinyInteger('free')->default(0)->nullable();
            $table->integer('featured')->default(0)->nullable();
            $table->integer('trending')->default(0)->nullable();
            $table->integer('popular')->default(0)->nullable();
            $table->longText('meta_keywords')->nullable();
            $table->longText('meta_description')->nullable();


            $table->foreign('category_id')->references('id')->on('categories')->onDelete('cascade');
            $table->foreign('instructor_id')->references('id')->on('instructors')->onDelete('cascade');
            
            $table->enum('status', ['enabled', 'disabled'])->default('disabled');
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
        Schema::dropIfExists('courses');
    }
}
