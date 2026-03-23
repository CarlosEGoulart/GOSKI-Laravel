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
        Schema::create('post_tag', function (Blueprint $table) {
            $table->id();
            $table->foreignId('post_id')->constrained('posts')->onDelete('cascade');
            $table->foreignId('tag_id')->constrained('tags')->onDelete('cascade');
            $table->decimal('confidence', 5, 2);
        });

        DB::unprepared('
            ALTER TABLE public.post_tag ENABLE ROW LEVEL SECURITY;

            CREATE POLICY "Associações visíveis por todos" ON public.post_tag FOR SELECT USING (true);
            -- Geralmente quem cria isso é o backend/IA, mas se for o App:
            -- CREATE POLICY "Criação de associações" ON public.post_tag FOR INSERT WITH CHECK (true);
        ');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('post_tag');
    }
};
