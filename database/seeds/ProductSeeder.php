<?php

use App\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //factory(Product::class, 100)->create();

        Product::create([
            'category_id'       => 1,
            'name'              => 'BULONES CUELLO CON ALA (ARANDELA)',
            'short_description' => '<ul><li>Medidas por pulgada desde 3/16 a 5/8 de diámetro</li><li>Largos variables hasta 300 mm</li><li>Se provee en zincado electrolítico azul,</li></ul>',
            'description'       => '<p>Bulón utilizado para el uso en madera, su cuello cuadrado permite que el mismo trabe y no gire. Disponible en medidas por pulgada desde 3/16 a 5/8 de diámetro, otras medidas son de fabricación bajo pedido. En largos variables hasta 300 mm dependiendo del diámetro, se provee en zincado electrolítico azul, otras terminaciones, consulte.</p>'
        ]);

        Product::create([
            'category_id'       => 1,
            'name'              => 'BULONES CUELLO MOLETEADO',
            'short_description' => '<ul><li>Medidas por pulgada desde 3/16 a 5/8 de diámetro</li><li>Largos variables hasta 300 mm</li><li>Se provee en zincado electrolítico azul,</li></ul>',
            'description'       => '<p>Bulón utilizado para el uso en madera, su cuello cuadrado permite que el mismo trabe y no gire. Disponible en medidas por pulgada desde 3/16 a 5/8 de diámetro, otras medidas son de fabricación bajo pedido. En largos variables hasta 300 mm dependiendo del diámetro, se provee en zincado electrolítico azul, otras terminaciones, consulte.</p>'
        ]);

        Product::create([
            'category_id'       => 1,
            'name'              => 'BULONES CABEZA ALLEM',
            'short_description' => '<ul><li>Medidas por pulgada desde 3/16 a 5/8 de diámetro</li><li>Largos variables hasta 300 mm</li><li>Se provee en zincado electrolítico azul,</li></ul>',
            'description'       => '<p>Bulón utilizado para el uso en madera, su cuello cuadrado permite que el mismo trabe y no gire. Disponible en medidas por pulgada desde 3/16 a 5/8 de diámetro, otras medidas son de fabricación bajo pedido. En largos variables hasta 300 mm dependiendo del diámetro, se provee en zincado electrolítico azul, otras terminaciones, consulte.</p>'
        ]);

        Product::create([
            'category_id'       => 1,
            'name'              => 'BULONES DE TAPAS DE CILINDRO',
            'short_description' => '<ul><li>Medidas por pulgada desde 3/16 a 5/8 de diámetro</li><li>Largos variables hasta 300 mm</li><li>Se provee en zincado electrolítico azul,</li></ul>',
            'description'       => '<p>Bulón utilizado para el uso en madera, su cuello cuadrado permite que el mismo trabe y no gire. Disponible en medidas por pulgada desde 3/16 a 5/8 de diámetro, otras medidas son de fabricación bajo pedido. En largos variables hasta 300 mm dependiendo del diámetro, se provee en zincado electrolítico azul, otras terminaciones, consulte.</p>'
        ]);
    }
}

