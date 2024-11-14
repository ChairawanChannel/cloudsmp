<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id'); // Primary Key
            $table->string('username')->unique();
            $table->string('gamertag')->unique();
            $table->string('name');
            $table->string('email')->unique();
            $table->smallInteger('isLogged')->default(0);
            $table->smallInteger('hasSession')->default(0);
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('remember_token', 100)->nullable();
            $table->timestamps();
            $table->string('ip', 40)->charset('ascii')->collation('ascii_bin')->nullable();
            $table->bigInteger('lastlogin')->nullable();
            $table->double('x')->default(0);
            $table->double('y')->default(0);
            $table->double('z')->default(0);
            $table->string('world')->default('world');
            $table->bigInteger('regdate')->default(0);
            $table->string('regip', 40)->charset('ascii')->collation('ascii_bin')->nullable();
            $table->float('yaw')->nullable();
            $table->float('pitch')->nullable();
            $table->string('totp', 32)->nullable();
        });

        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->foreignId('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
        Schema::dropIfExists('password_reset_tokens');
        Schema::dropIfExists('sessions');
    }
};
