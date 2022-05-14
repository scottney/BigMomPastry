<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateBookMasterclassTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('book_masterclass', function (Blueprint $table) {
            $table->bigincrements('id')->unsignedBigInteger();
            $table->unsignedBigInteger('user_id')->index()->unique()->nullable();
            $table->unsignedBigInteger('apprentice_id')->index()->unique();
            $table->string('first_name');
            $table->string('surname');
            $table->string('middle_name');
            $table->unsignedBigInteger('id_number')->index();
            $table->string('receipt_number', 39)->unique()->nullable();
            $table->date('date_of_birth');
            $table->date('current_date');
            $table->time('current_time');
            $table->integer('age');
            $table->string('phone_number');
            $table->string('email');
            $table->string('place_of_residence');
            $table->string('apprentice_session');
            $table->string('product_course');
            $table->string('payment_mode');
            $table->string('field_office_location');
            $table->string('office_attendant');
            $table->integer('amount');
            $table->timestamps();

            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('book_masterclass');
    }
}
