<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $supabase = app('supabase');

        $this->createSupabaseUser($supabase, [
            'email' => 'admin@teste.com',
            'password' => 'SenhaSegura123',
            'username' => 'AdminMaster'
        ]);

        User::factory(2)->make()->each(function($userFake) use ($supabase){
            $this->createSupabaseUser($supabase, [
                'email' => $userFake->email,
                'password' => 'password123',
                'username' => $userFake->username,
                'profile_photo_url' => $userFake->profile_photo_url
            ]);
        });
    }


    private function createSupabaseUser($supabase, array $data)
    {
        $response = $supabase->auth()->admin()->createUser([
            'email' => $data['email'],
            'password' => $data['password'],
            'email_confirm' => true,
        ]);

        if ($response->getError()) {
            $this->command->error("Erro ao criar {$data['email']}: " . $response->getError()->getMessage());
            return;
        }

        $supabaseUser = $response->getUser();
        User::where('id', $supabaseUser->id)->update([
            'username' => $data['username'],
            'profile_photo_url' => $data['profile_photo_url'] ?? null,
        ]);

    }
}
