<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateStudentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->enum('gender', ['l', 'p']);
            $table->string('nis');
            $table->enum('kelas', ['10', '11', '12']);
            $table->text('address');
            $table->date('birth_date');
            $table->enum('jurusan', ['IPA', 'IPS', 'AGAMA', 'BAHASA']);
            $table->integer('tinggi');
            $table->integer('berat');
            $table->unsignedBigInteger('guardians_id');
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
        Schema::dropIfExists('students');
    }
}
