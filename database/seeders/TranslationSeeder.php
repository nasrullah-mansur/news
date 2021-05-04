<?php

namespace Database\Seeders;

use App\Models\Admin\Translation;
use Illuminate\Database\Seeder;

class TranslationSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Translation::create([
            'pl_one' => 'Breaking News',
            'sl_one' => 'Noticias de última',
            'pl_two' => 'News Category',
            'sl_two' => 'Categoría',
            'pl_three' => 'Follow Us',
            'sl_three' => 'Síganos',
            'pl_four' => 'Join 456k Followers',
            'sl_four' => 'Únete a 456k Followers',
            'pl_five' => 'All News',
            'sl_five' => 'All News',
            'pl_six' => 'Trending News',
            'sl_six' => 'Noticias de actualidad',
            'pl_seven' => 'World News',
            'sl_seven' => 'Noticias del mundo',
            'pl_eight' => 'Sport News',
            'sl_eight' => 'Noticias deportivas',
            'pl_nine' => 'Entertainment News',
            'sl_nine' => 'Noticias del espectáculo',
            'pl_ten' => 'Video News',
            'sl_ten' => 'Video Noticias',
            'pl_eleven' => 'Most Viewed Post',
            'sl_eleven' => 'Publicación más vista',
            'pl_twelve' => 'Quick Links',
            'sl_twelve' => 'enlaces rápidos',
            'pl_thirteen' => 'Categories',
            'sl_thirteen' => 'Categorías',
            'pl_fourteen' => 'Read More',
            'sl_fourteen' => 'Lee mas',
            'pl_fifteen' => 'News Details',
            'sl_fifteen' => 'Detalles de noticias',
            'pl_sixteen' => 'Comment Post',
            'sl_sixteen' => 'Publicar comentario',
            'pl_seventeen' => 'Leave A Reply',
            'sl_seventeen' => 'Deja una respuesta',
            'pl_eighteen' => 'Write you text here . . .',
            'sl_eighteen' => 'Escribe tu texto aquí ...',
            'pl_nineteen' => 'Your Name',
            'sl_nineteen' => 'Tu nombre',
            'pl_twenty' => 'Email Address',
            'sl_twenty' => 'dirección electrónico',
            'pl_twenty_one' => 'Phone No',
            'sl_twenty_one' => 'Telefono no',
            'pl_twenty_two' => 'Post Comment',
            'sl_twenty_two' => 'publicar comentario',
            'pl_twenty_three' => 'Related News',
            'sl_twenty_three' => 'Noticias relacionadas',
            'pl_twenty_four' => 'News Categories',
            'sl_twenty_four' => 'Categorías de noticias',
            'pl_twenty_five' => 'Popular News',
            'sl_twenty_five' => 'Noticias populares',
            'pl_twenty_six' => 'Stay Connected',
            'sl_twenty_six' => 'Mantente conectad',
            'pl_twenty_seven' => 'Recent News',
            'sl_twenty_seven' => 'Noticias recientes',
            'pl_twenty_eight' => 'Gallery Images',
            'sl_twenty_eight' => 'Galería de imágenes',
            'pl_twenty_nine' => 'Privacy Policy',
            'sl_twenty_nine' => 'Política de privacidad',
            'pl_thirty' => 'Cookies',
            'sl_thirty' => 'Galletas',
            'pl_thirty_one' => 'Contact',
            'sl_thirty_one' => 'Contacto',
            'pl_thirty_two' => 'Need To Talk?',
            'sl_thirty_two' => 'Necesito hablar?',
            'pl_thirty_three' => 'Address',
            'sl_thirty_three' => 'Habla a',
            'pl_thirty_four' => 'Support Hour',
            'sl_thirty_four' => 'Hora de soporte',
            'pl_thirty_five' => 'Quick Contact',
            'sl_thirty_five' => 'Contacto rápido',
            'pl_thirty_six' => 'Send Us Message',
            'sl_thirty_six' => 'Envíanos un mensaje',
            'pl_thirty_seven' => 'send massage',
            'sl_thirty_seven' => 'enviar masaje',
            'pl_thirty_eight' => 'It is a long established fact that a reader distracted by the readable content of a page.',
            'sl_thirty_eight' => 'Es un hecho establecido desde hace mucho tiempo que un lector se distrae con el contenido legible de una página.',
            'pl_thirty_nine' => 'Request For Ad',
            'sl_thirty_nine' => 'Solicitud de anuncio',
            'pl_forty' => 'blank',
            'sl_forty' => 'blank',

        ]);
    }
}
