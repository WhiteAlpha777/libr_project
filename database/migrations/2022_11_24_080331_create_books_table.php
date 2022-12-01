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
        Schema::create('books', function (Blueprint $table) {
            $table->id();

            $table->string('title');
            $table->boolean('is_rented')->default(0);
            $table->timestamp('rented_until')->nullable();//->useCurrent(); //расчет времени аренды до
            $table->softDeletes();
            //по конвенции Laravel
            $table->unsignedBigInteger('category_id');//будущий foreign key
            $table->unsignedBigInteger('user_id')->nullable();//будущий foreign key

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
        Schema::dropIfExists('books');
    }
};
