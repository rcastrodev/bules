<?php

use App\Content;
use Illuminate\Database\Seeder;

class ContentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /** Home  */
        /** Slider */
        for ($i=0; $i <= 2; $i++) { 
            Content::create([
                'section_id' => 1,
                'order'     => 'AA',
                'image'     => 'images/home/Enmascarar_grupo_818.png',
                'content_1' => 'ESPARRAGOS',
                'content_2' => '<p>Fabricados en acero SAE 4140, templados, revenidos y bonificados. Disponibles en Pulgadas: Desde 1/2" a 2 y bajo pedido hasta 4 Longitudes: Hasta 4 mts. (dependiendo el diámetro)</p>',
            ]);
        }

        Content::create([
            'section_id'    => 2,
            'content_1'     => '<p>Somos una empresa líder en la fabricación de elementos de fijación, desarrollados bajo normas específicas y planos exigentes. Nos especializamos en la producción de una amplia variedad de bulones, tornillos, remaches, bujes, como también de otras alternativas que se adaptan a las necesidades del cliente.</p>',
        ]);

        Content::create([
            'section_id'    => 3,
            'order'         => 'AA',
            'image'         => 'images/home/iso-9001-2015-logo.png',
        ]);

        Content::create([
            'section_id'    => 3,
            'order'         => 'BB',
            'image'         => 'images/home/iso9001-dnv-gl.png',
        ]);

        Content::create([
            'section_id'    => 3,
            'order'         => 'CC',
            'image'         => 'images/home/Enmascarar_grupo_537.png',
        ]);


        /** Fin home page */

        /** Empresa  */

        Content::create([
            'section_id'    => 4,
            'image'         => 'images/home/Enmascarar_grupo_537.png',
        ]);

        Content::create([
            'section_id' => 5,
            'image' => 'images/company/Enmascarar_grupo539.png',
            'content_1' => 'SOBRE NOSOTROS',
            'content_2' => '<p>Somos una empresa líder en la fabricación de elementos de fijación, desarrollados bajo normas específicas y planos exigentes. Nos especializamos en la producción de una amplia variedad de bulones, tornillos, remaches, bujes, como también de otras alternativas que se adaptan a las necesidades del cliente.</p>
            <p>BULES S.R.L. está comprometida con el sector energético atendiendo a las más importantes empresas de nuestro país, somos proveedores de las industrias de autopartes, línea blanca y electromecánicas. Nuestros profesionales y nuestro personal, son nuestro motor de crecimiento, son quienes dan respuesta a las necesidades de cada uno de nuestros clientes. Nuestros proveedores están calificados para atender nuestras necesidades.</p>'
        ]);

        Content::create([
            'section_id'    => 6,
            'order'         => 'AA',
            'image'         => 'images/company/hourglass.svg',
            'content_1'     => 'Amplia trayectoria en el rubro',
        ]);

        Content::create([
            'section_id'    => 6,
            'order'         => 'AA',
            'image'         => 'images/company/medal.svg',
            'content_1'     => 'Productos de alta gamma',
        ]);

        Content::create([
            'section_id'    => 6,
            'order'         => 'AA',
            'image'         => 'images/company/trophy.svg',
            'content_1'     => 'Lideres en el mercado',
        ]);

        /** fin empresa  */

        /** Novedades  */

        Content::create([
            'section_id'    => 7,
            'image'         =>'images/news/editada_665.png',
            'content_1'     => 'Tuercas Flange (lisas y estriadas)',
            'content_2'     => '<p>A partir de Agosto de 2018 incorporamos la linea completa de tuercas flange en acero al carbono. Se ofrecen tuercas lisas y moleteadas,</p>',
            'content_3'     => 'productos'
        ]);

        Content::create([
            'section_id'    => 7,
            'image'         =>'images/news/editada_640.png',
            'content_1'     => 'Bulones A325 Templados',
            'content_2'     => '<p>A partir de Agosto de 2018 incorporamos la linea de Bulones A325 que completa la oferta de "Perno+tuerca+arandela"</p>',
            'content_3'     => 'productos'
        ]);

        Content::create([
            'section_id'    => 7,
            'image'         =>'images/news/editada_622.png',
            'content_1'     => 'Nuevas Listas de Precios en PDF',
            'content_2'     => '<p>Ya estan disponibles nuestras nuevas listas de precios en la sección "Descargas" y en cada articulo individual dentro de la seccion "Productos"</p>',
            'content_3'     => 'productos'
        ]);
    
        Content::create([
            'section_id'    => 7,
            'image'         =>'images/news/Anillos_Seeger_de_seguridad_(acero)3.png',
            'content_1'     => 'Anillos Seeger',
            'content_2'     => '<p>Un circlip (acrónimo en inglés unión de círculo y pinza ), también conocido como anillo de seguridad, anillo elástico o anillo Seeger, 1​2​ es un tipo</p>',
            'content_3'     => 'ACTUALIDAD'
        ]);

        /** fin novedades  */

        /** calidad  */

        Content::create([
            'section_id' => 8,
            'image'     => 'images/quality/Enmascarar_grupo_510.png',
        ]);

        Content::create([
            'section_id'    => 9,
            'content_1'     => 'Políticas de calidad',
            'content_2'     => '<p>En BULES S.R.L tenemos el objetivo permanente de asegurar la calidad en nuestros productos y servicios, junto a la participación de todos los integrantes de la organización.</p><p>Para lograrlo, asumimos el compromiso de cumplir con los requisitos acordados de nuestros clientes y con los de la Norma ISO 9001:2015.</p><p>Nuestro trabajo continuo sobre el sistema de gestión, la capacitación permanente de todos los integrantes de la empresa y una constante actualización tecnológica, nos posiciona como una de las empresas líderes en el sector desde su fundación.</p>',
        ]);

        Content::create([
            'section_id'    => 10,
            'order'         => 'AA',
            'image'         => 'images/quality/Enmascarar_grupo_510.png',
        ]);

        Content::create([
            'section_id'    => 10,
            'order'         => 'BB',
            'image'         => 'images/quality/Enmascarar_grupo_510.png',
        ]);

        Content::create([
            'section_id'    => 10,
            'order'         => 'CC',
            'image'         => 'images/quality/Enmascarar_grupo_510.png',
        ]);

        Content::create([
            'section_id'    => 11,
            'content_1'     => 'Política de Calidad BULES S.R.L.',
        ]);

        Content::create([
            'section_id'    => 11,
            'content_1'     => 'Certificado ISO 9001:2015',
        ]);

        /** fin calidad  */
        
    }
}