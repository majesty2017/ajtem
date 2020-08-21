<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateManuscriptsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('manuscripts', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('admin_id')->nullable();
            $table->integer('category_id')->nullable();
            $table->integer('author_id')->nullable();
            $table->string('title')->nullable();
            $table->string('email')->nullable();
            $table->string('author')->nullable();
            $table->longText('abstract')->nullable();
            $table->string('keywords')->nullable();
            $table->boolean('status')->default(0);
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
        Schema::dropIfExists('manuscripts');
    }
}
