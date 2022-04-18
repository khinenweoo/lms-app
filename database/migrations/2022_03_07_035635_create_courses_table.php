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
            $table->string('short_description');
            $table->longText('course_description')->nullable();
            $table->longText('course_requirements')->nullable();
            $table->longText('course_outcomes')->nullable();
            $table->string('cover_image')->nullable();

            $table->unsignedInteger('category_id');
            $table->bigInteger('instructor_id')->unsigned();

            $table->tinyInteger('is_free')->default(0)->nullable();
            $table->decimal('course_fee', 15, 2)->nullable();
            $table->string('duration_length')->nullable();
            $table->date('started_date')->nullable();
            $table->date('end_date')->nullable();
            $table->date('enroll_close_date')->nullable();

            $table->tinyInteger('published')->default(0)->nullable();
            $table->tinyInteger('featured')->default(0)->nullable();
            $table->tinyInteger('trending')->default(0)->nullable();
            $table->tinyInteger('popular')->default(0)->nullable();

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
