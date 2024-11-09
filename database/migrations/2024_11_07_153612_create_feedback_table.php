<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFeedbackTable extends Migration
{
    public function up()
    {
        Schema::create('feedback', function (Blueprint $table) {
            $table->id();
            $table->string('gamertag'); // Menyimpan gamertag pengguna
            $table->text('message'); // Menyimpan pesan feedback
            $table->timestamps(); // Menyimpan created_at dan updated_at
        });
    }

    public function down()
    {
        Schema::dropIfExists('feedback');
    }
}
