<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLinksTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('link', function (Blueprint $table) {
            $table->integer('id')->unsigned();
            $table->integer('newsid')->nullable();
            $table->text('destlink')->nullable();
            $table->string('title')->nullable();
            $table->text('link')->nullable();
            $table->string('active')->nullable();
            $table->integer('newsnumber')->nullable();
            $table->text('andkeywords')->nullable();
            $table->text('orkeywords')->nullable();
            $table->text('notkeywords')->nullable();
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
            $table->text('mainlink')->nullable();
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
        Schema::dropIfExists('link');
    }
}
