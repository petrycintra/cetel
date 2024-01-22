<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Indexpage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Indexpage::factory()->create([

            'email' => 'seuemail@gmail.com' ,
            'tel_one' => '(73) 9 0101-0202' ,
            'tel_two' => '(73) 9 0303-0404' ,
            'menu_one' => 'Curso Presencial' ,
            'menu_btn' => 'Realizar Login' ,
            'submenu_one' => 'Inicio' ,
            'submenu_two' => 'Quem Somos' ,
            'submenu_three' => 'Docentes' ,
            'submenu_four' => 'FAQ' ,
            'submenu_five' => 'Contato' ,
            'slider_title' => 'Curso Presencial' ,
            'slider_content' => 'Inscreva-se na proxima turma.' ,
            'slider_btn' => 'Quero me inscrever' ,
            'slider_photo_one' => '1.jpg' ,
            'slider_photo_two' => '2.jpg' ,
            'slider_photo_three' => '3.jpg' ,
            'description_one_bolder' => 'Livre Associação' ,
            'description_one_text' => 'de Idéias' ,
            'description_two_bolder' => 'Interpretação' ,
            'description_two_text' => 'dos Sonhos' ,
            'description_three_bolder' => 'Observação do' ,
            'description_three_text' => 'Fenômeno da Transferência' ,
            'description_four_bolder' => 'Analise dos' ,
            'description_four_text' => 'Atos Falhos e da Resistência' ,
            'description_photo_left' => 'banner.png' ,
            'description_photo_right' => 'banner2.png' ,
            'description_title' => 'Matrículas Abertas' ,
            'description_subtitle' => 'Vagas abertas para a turma de janeiro de 2024' ,
            'description_text' => 'No Brasil e no Mundo a psicanálise é exercida livremente e não é uma profissão regulamentada. Sendo assim, é uma profissão livre, reconhecida pelo Ministério do Trabalho e Emprego.' ,
            'description_btn' => 'Quero me matricular hoje' ,
            'about_title' => 'Sobre Nossa escola' ,
            'about_paragraph_one' => 'Somos uma uma instituição científica, de direito privado, sem finalidade lucrativa, com sede na Praça Castro Alves, 83, Centro, Itororó-BA, com foro no Cartório de Notas e Ofícios da mesma cidade, destinada a congregar psicanalistas, pesquisadores do psiquismo humano, formar psicanalistas clínicos e didáticos para o exercício da profissão, realizar cursos de especialização e congressos nas suas respectivas áreas de interesse.' ,
            'about_paragrapgh_two_bolder' => 'Nossa Missão:',
            'about_paragraph_two' => 'A Sociedade de Psicanálise Evolutiva do Brasil tem como missão zelar pela praxis da psicanálise em âmbito nacional, assistir e supervisionar o exercício da prática psicanalítica dos seus membros, promover estudos de formação em Psicanálise e ciências afins, bem como capacitar novos Psicanalistas em todo território nacional para o exercício da profissão de acordo com as disposições legais em vigência, além de proporcionar a capacitação do profissional Psicanalista nos postulados das doutrinas Freudianas.' ,
            'about_photo' => 'about.png' ,
            'about_footer_title' => 'O curso chamou sua atenção?' ,
            'about_footer_paragraph_one' => 'Curso Presencial' ,
            'about_footer_paragraph_two' => 'Inscreva-se na proxima turma. e não deixe a oportunidade ir embora.' ,
            'about_footer_btn' => 'matricule-se agora' ,
            'about_footer_photo' => 'about2.png' ,

        ]);
    }
}
