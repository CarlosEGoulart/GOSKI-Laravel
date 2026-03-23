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
        Schema::create('posts', function (Blueprint $table) {
            $table->id();
            $table->foreignUuid('user_id')->constrained('users')->onDelete('cascade');
            $table->text('description');
            $table->string('image_url');
            $table->boolean('is_nsfw')->default(false);
            $table->string('moderation_status')->default('pending'); 
            $table->timestamps();
        });
        
        DB::unprepared('
            ALTER TABLE public.posts ENABLE ROW LEVEL SECURITY;

            CREATE POLICY "Posts visíveis por todos" ON public.posts FOR SELECT USING (true);
            CREATE POLICY "Usuários criam seus posts" ON public.posts FOR INSERT WITH CHECK (auth.uid() = user_id);
            CREATE POLICY "Usuários editam/deletam seus posts" ON public.posts FOR ALL USING (auth.uid() = user_id);
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('posts');
    }
};
