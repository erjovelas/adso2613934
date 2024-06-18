<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $game = new Game;
        $game->title        = 'God of War';
        $game->developer    = 'Play Station 5';
        $game->releasedate  = '2022-11-09';
        $game->category_id  = 1;
        $game->user_id      = 1;
        $game->price        = 59;
        $game->genre        = 'action-adventure';
        $game->description  = 'Lorem ipsum dolor sit amet';
        $game->save();

        $game = new Game;
        $game->title        = 'The Last of Us';
        $game->developer    = 'Play Station 5';
        $game->releasedate  = '202-09-02';
        $game->category_id  = 1;
        $game->user_id      = 1;
        $game->price        = 59;
        $game->genre        = 'action-adventure';
        $game->description  = 'Lorem ipsum dolor sit amet';
        $game->save();

        $game = new Game;
        $game->title        = 'hola';
        $game->developer    = 'Play Station 5';
        $game->releasedate  = '202-09-02';
        $game->category_id  = 1;
        $game->user_id      = 1;
        $game->price        = 59;
        $game->genre        = 'action-adventure';
        $game->description  = 'Lorem ipsum dolor sit amet';
        $game->save();
    }
}
