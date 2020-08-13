<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateArticlesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('articles', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('author_id')->nullable();
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->string('year')->nullable();
            $table->string('volume')->nullable();
            $table->string('author')->nullable();
            $table->string('pages')->nullable();
            $table->longText('abstract')->nullable();
            $table->string('tags')->nullable();
            $table->boolean('is_published')->default(0);
            $table->string('upload_image')->nullable();
            $table->string('upload_files')->nullable();
            $table->softDeletes();
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
        Schema::dropIfExists('articles');
    }
}
