<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePermissionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('permissions', function (Blueprint $table) {
            $table->bigIncrements('id')->unsigned();
            $table->string('name');
            $table->string('label')->nullable();
            $table->timestamps();
            $table->softDeletes();

        });
        Schema::create('permission_role', function (Blueprint $table) {
           // $table->bigIncrements('id')->unsigned();
            $table->integer('role_id')->unsigned();
           // $table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->integer('permission_id')->unsigned();
           // $table->foreign('permission_id')->references('id')->on('permissions')->onDelete('cascade');
            $table->primary(['role_id','permission_id']);
            $table->softDeletes();
        });
        Schema::create('role_user', function (Blueprint $table) {
           // $table->bigIncrements('id')->unsigned();
            $table->integer('role_id')->unsigned();
            //$table->foreign('role_id')->references('id')->on('roles')->onDelete('cascade');
            $table->integer('user_id')->unsigned();
           // $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
            $table->primary(['role_id','user_id']);
            $table->softDeletes();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('permissions');
    }
}
