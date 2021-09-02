<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDigestsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('digests', function (Blueprint $table) {
            $table->id();
            $table->string('title', '255')->nullable();
            $table->text('body')->nullable();
            $table->text('img')->nullable();
            $table->integer('status')->nullable();
            $table->unsignedBigInteger('category')->nullable();
            $table->foreign('category')->references('id')->on('categories');

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
        Schema::dropIfExists('digests');
    }
}
