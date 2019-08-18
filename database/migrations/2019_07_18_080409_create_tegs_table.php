<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTegsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tags', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->timestamps();
        });
        
        
        //pivot s alpha_betical
        
        Schema::create('note_tag', function (Blueprint $table) {
            $table->integer('tag_id')->unsigned()->index();// important tag_id
//            $table->foreign('tag_id')->references('id')->on('notes')->onDelete('cascade')->onUpdate('cascade');
            
            $table->integer('note_id')->unsigned()->index();
//             $table->foreign('note_id')->references('id')->on('tags')->onDelete('cascade')->onUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('tags');
        Schema::dropIfExists('note_tag');
    }
}
