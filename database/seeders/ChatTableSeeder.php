<?php

namespace Database\Seeders;

use App\Models\Chat;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class ChatTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $stefano = User::where('name', 'Stefano')->first();
        $alex = User::where('name', 'Alex')->first();
        $elena = User::where('name', 'Elena')->first();
        $matteo = User::where('name', 'Matteo')->first();
        $nicola = User::where('name', 'Nicola')->first();
        $laroussi = User::where('name', 'Laroussi')->first();

        $new_chat = new Chat();
        $new_chat->user1_id = $stefano->id;
        $new_chat->user2_id = $alex->id;
        $new_chat->save();

        $new_chat = new Chat();
        $new_chat->user1_id = $stefano->id;
        $new_chat->user2_id = $elena->id;
        $new_chat->save();

        $new_chat = new Chat();
        $new_chat->user1_id = $stefano->id;
        $new_chat->user2_id = $matteo->id;
        $new_chat->save();

        $new_chat = new Chat();
        $new_chat->user1_id = $stefano->id;
        $new_chat->user2_id = $nicola->id;
        $new_chat->save();

        $new_chat = new Chat();
        $new_chat->user1_id = $stefano->id;
        $new_chat->user2_id = $laroussi->id;
        $new_chat->save();
    }
}
