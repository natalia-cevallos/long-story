<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class SchemaGeneralDatabase extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
      Schema::create('categories', function (Blueprint $table) {
               $table->increments('id');
               $table->string('name', 255);
               $table->timestamps();
      });

    Schema::create('editoriales', function (Blueprint $table) {
              $table->increments('id');
              $table->string('name', 255);
              $table->timestamps();
      });

      Schema::create('autors', function (Blueprint $table) {
              $table->increments('id');
              $table->string('name', 255);
              $table->string('last_name', 255);
              $table->timestamps();
      });

      Schema::create('images', function (Blueprint $table) {
            $table->increments('id');
            $table->string('src');
            $table->timestamps();
      });

      Schema::create('books', function (Blueprint $table) {
           $table->increments('id');
           $table->string('name', 255);
           $table->float('price');
           $table->integer('stock');
           $table->text('description');
           $table->integer('category_id')->unsigned();
           $table->foreign('category_id')->references('id')->on('categories');
           $table->integer('editorial_id')->unsigned();
           $table->foreign('editorial_id')->references('id')->on('editoriales');
           $table->integer('imagen_id')->unsigned();
           $table->foreign('imagen_id')->references('id')->on('images');
           $table->timestamps();
    });

    Schema::create('autor_book', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('book_id')->unsigned();
            $table->foreign('book_id')->references('id')->on('books');
            $table->integer('autor_id')->unsigned();
            $table->foreign('autor_id')->references('id')->on('autors');
          });



    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
      Schema::dropIfExists('books');
      Schema::dropIfExists('categories');
      Schema::dropIfExists('editoriales');
      Schema::dropIfExists('autors');
      Schema::dropIfExists('autor_book');
      Schema::dropIfExists('images');
    }
}
