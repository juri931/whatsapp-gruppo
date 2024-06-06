<?php

namespace Database\Seeders;

use App\Models\Message;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Chat;

class MessageTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $messages = [
            [
                'text' => "Ciao! Come va?",
                'user_id' => 1,
                'chat_id' => 1,
            ],
            [
                'text' => "Sto pensando di fare una passeggiata più tardi.",
                'user_id' => 6,
                'chat_id' => 1,
            ],
            [
                'text' => "Hai provato quel nuovo ristorante in città?",
                'user_id' => 6,
                'chat_id' => 2,
            ],
            [
                'text' => "Ho appena finito di leggere un libro fantastico!",
                'user_id' => 2,
                'chat_id' => 2,
            ],
            [
                'text' => "Sto pensando di fare una passeggiata più tardi.",
                'user_id' => 6,
                'chat_id' => 3,
            ],
            [
                'text' => "Sto cercando una nuova ricetta da provare a cucinare.",
                'user_id' => 3,
                'chat_id' => 3,
            ],
            [
                'text' => "Hai visto l'eclissi di ieri sera? Era incredibile!",
                'user_id' => 6,
                'chat_id' => 4,
            ],
            [
                'text' => "Qual è il tuo piatto preferito?",
                'user_id' => 4,
                'chat_id' => 4,
            ],
            [
                'text' => "Voglio iniziare un nuovo hobby, ma non so quale scegliere.",
                'user_id' => 6,
                'chat_id' => 5,
            ],
            [
                'text' => "Ho appena scoperto una nuova serie TV, non posso smettere di guardarla!",
                'user_id' => 5,
                'chat_id' => 5,
            ],
        ];

        foreach ($messages as $message) {

            $new_message = new Message();
            $new_message->text = $message['text'];
            $new_message->user_id = $message['user_id'];
            $new_message->chat_id = $message['chat_id'];

            $new_message->save();
        }
    }
}
