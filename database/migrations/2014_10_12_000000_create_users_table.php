<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('prefix')->nullable();
            $table->string('name')->nullable();
            $table->string('degree')->nullable();
            $table->string('phone')->nullable();
            $table->tinyInteger('role')->default(0);
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password')->nullable();
            $table->string('institution')->nullable();
            $table->string('department')->nullable();
            $table->string('area_of_interest')->nullable();
            $table->string('address')->nullable();
            $table->string('country')->nullable();
            $table->string('state')->nullable();
            $table->string('city')->nullable();
            $table->string('postal_code')->nullable();
            $table->string('fax')->nullable();
            $table->string('researcher_id')->nullable();
            $table->string('gender')->nullable();
            $table->string('academia')->nullable();
            $table->string('area_of_expertise1')->nullable();
            $table->string('area_of_expertise2')->nullable();
            $table->string('area_of_expertise3')->nullable();
            $table->string('area_of_expertise4')->nullable();
            $table->string('area_of_expertise5')->nullable();
            $table->string('job_title')->nullable();
            $table->softDeletes();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
