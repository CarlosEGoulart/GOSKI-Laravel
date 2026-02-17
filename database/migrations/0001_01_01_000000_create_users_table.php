<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('username')->unique();
            $table->string('email')->unique();
            $table->string('avatar_url')->nullable();
            $table->timestamps();
            $table->rememberToken();

            $table->foreign('id')->references('id')->on('auth.users')->onDelete('cascade');
        });

        DB::unprepared('
            CREATE OR REPLACE FUNCTION public.handle_new_user()
            RETURNS trigger AS $$
            BEGIN
                INSERT INTO public.users (id, email, username, created_at, updated_at)
                VALUES (new.id, new.email, split_part(new.email, \'@\', 1), now(), now());
                RETURN new;
            END;
            $$ LANGUAGE plpgsql SECURITY DEFINER;

            CREATE OR REPLACE TRIGGER on_auth_user_created
            AFTER INSERT ON auth.users
            FOR EACH ROW EXECUTE PROCEDURE public.handle_new_user();
        ');

        Schema::create('laravel.password_reset_tokens', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id');
            $table->string('token')->unique();
            $table->timestamp('expires_at');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('public.users')->onDelete('cascade');
        });

        Schema::create('laravel.sessions', function (Blueprint $table) {
            $table->string('id')->primary();
            $table->uuid('user_id')->nullable()->index();
            $table->string('ip_address', 45)->nullable();
            $table->text('user_agent')->nullable();
            $table->longText('payload');
            $table->integer('last_activity')->index();
    
            $table->foreign('user_id')->references('id')->on('public.users')->onDelete('cascade');
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::unprepared('DROP TRIGGER IF EXISTS on_auth_user_created ON auth.users');
        DB::unprepared('DROP FUNCTION IF EXISTS public.handle_new_user');
        
        Schema::dropIfExists('laravel.sessions');
        Schema::dropIfExists('laravel.password_reset_tokens');
        Schema::dropIfExists('users');
    }
};