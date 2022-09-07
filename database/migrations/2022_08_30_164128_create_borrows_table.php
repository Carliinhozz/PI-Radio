<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('borrows', function (Blueprint $table) {
            $table->id();

            $table->unsignedBigInteger('ins_id')->default(1);
            $table->foreign('ins_id')->references('id')->on('instruments');
            
            $table->unsignedBigInteger('usr_id')->default(1);
            $table->foreign('usr_id')->references('id')->on('users');
                

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
        Schema::dropIfExists('borrow');
    }
};
