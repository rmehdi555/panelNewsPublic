<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDataTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('data', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->text('link')->nullable();
            $table->text('destlink')->nullable();

            $table->text('forxpath')->nullable();
            $table->text('ftitlexpath')->nullable();
            $table->text('fdatexpath')->nullable();
            $table->text('fabsxpath')->nullable();
            $table->text('fcontxpath')->nullable();
            $table->text('fimgxpath')->nullable();


            $table->text('titlexpath')->nullable();
            $table->text('absxpath')->nullable();
            $table->text('datexpath')->nullable();
            $table->text('tgxpath')->nullable();
            $table->text('contxpath')->nullable();
            $table->text('imgxpath')->nullable();


            $table->timestamps();

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
        Schema::dropIfExists('data');
    }
}
