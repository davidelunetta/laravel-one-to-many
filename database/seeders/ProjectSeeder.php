<?php

namespace Database\Seeders;

use App\Models\Project;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Project::create([
            'name' => 'htmlcss-discord',
            'description' => 'Replica base di discord web utilizzando html-css',
            'start_date' => '2023-09-11',
            'image_path'=> 'storage\app\public\project_images\discord.png',
        ]);
        Project::create([
            'name' => 'js-our-team',
            'description' => 'Utilizzando i dati forniti, il software crea un array di oggetti per rappresentare i membri del team. Ogni membro è caratterizzato dalle seguenti informazioni: nome, ruolo e foto.',
            'start_date' => '2023-10-23',
            'image_path'=> 'storage\app\public\project_images\js.png',
        ]);
        Project::create([
            'name' => 'vue-slider',
            'description' => 'Partendo da un markup di base, il codice implementa un carousel con l utilizzo di VueJs.',
            'start_date' => '2023-10-30',
            'image_path'=> 'storage\app\public\project_images\Vue.png',
        ]);
        Project::create([
            'name' => 'vite-boolflix',
            'description' => 'Replica base di netflix web utilizzando VueJs',
            'start_date' => '2023-11-20',
            'image_path'=> 'storage\app\public\project_images\netflix.png',
        ]);
        Project::create([
            'name' => 'php-todo-list-json',
            'description' => 'Una web-app che permette di leggere e scrivere una lista di Todo. Stack Html, CSS, VueJS (importato tramite CDN), axios, PHP',
            'start_date' => '2023-12-04',
            'image_path'=> 'storage\app\public\project_images\php.png',
        ]);
    }
}
