<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Platillo;

class PlatilloSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $platillos = [
            [
                'nombre' => 'Arroz a la cubana',
                'descripcion' => 'Un platillo clásico de arroz con plátano y huevo.',
                'precio' => 12.00,
                'imagen' => 'imagenes/Arroz a la cubana.jpeg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
            [
                'nombre' => 'Arroz con pato',
                'descripcion' => 'Arroz verde con pato a la norteña.',
                'precio' => 18.00,
                'imagen' => 'imagenes/Arroz con pato.jpeg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
            [
                'nombre' => 'Arroz con pollo',
                'descripcion' => 'Arroz verde con pollo y salsa criolla.',
                'precio' => 15.00,
                'imagen' => 'imagenes/Arroz con pollo.jpeg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
            [
                'nombre' => 'Cabrito norteño',
                'descripcion' => 'Cabrito tierno al estilo norteño.',
                'precio' => 25.00,
                'imagen' => 'imagenes/Cabrito norteño.jpeg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
            [
                'nombre' => 'Cau cau',
                'descripcion' => 'Un plato criollo de mondongo y papas.',
                'precio' => 13.00,
                'imagen' => 'imagenes/Cau cau.jpeg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
            [
                'nombre' => 'Chuleta',
                'descripcion' => 'Chuleta de cerdo acompañada de ensalada y papas fritas.',
                'precio' => 16.00,
                'imagen' => 'imagenes/Chuleta.jpeg',
                'categoria' => 'Segundo',
                'estado' => true,
            ],
            [
                'nombre' => 'Estofado de res',
                'descripcion' => 'Carne de res guisada con verduras.',
                'precio' => 14.00,
                'imagen' => 'imagenes/Estofado de res.jpeg',
                'categoria' => 'Segundo',
                'estado' => true,
            ],
            [
                'nombre' => 'Guiso de pollo',
                'descripcion' => 'Un guiso de pollo con papas y zanahorias.',
                'precio' => 12.00,
                'imagen' => 'imagenes/Guiso de pollo.jpeg',
                'categoria' => 'Segundo',
                'estado' => true,
            ],
            [
                'nombre' => 'Hígado encebollado',
                'descripcion' => 'Hígado de res con cebolla y especias.',
                'precio' => 10.00,
                'imagen' => 'imagenes/Higado encebollado.jpeg',
                'categoria' => 'Segundo',
                'estado' => true,
            ],
            [
                'nombre' => 'Mondonguito',
                'descripcion' => 'Mondongo en trozos con papas y especias.',
                'precio' => 11.00,
                'imagen' => 'imagenes/Mondonguito.jpeg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
            [
                'nombre' => 'Parrilla',
                'descripcion' => 'Selección de carnes a la parrilla.',
                'precio' => 30.00,
                'imagen' => 'imagenes/Parrilla.jpeg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
            [
                'nombre' => 'Pescado frito',
                'descripcion' => 'Filete de pescado frito con ensalada.',
                'precio' => 15.00,
                'imagen' => 'imagenes/Pescado frito.jpg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
            [
                'nombre' => 'Pollada',
                'descripcion' => 'Pollo frito con papas y ensalada.',
                'precio' => 13.00,
                'imagen' => 'imagenes/Pollada.jpeg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
            [
                'nombre' => 'Pollo broaster',
                'descripcion' => 'Pollo crujiente estilo broaster.',
                'precio' => 14.00,
                'imagen' => 'imagenes/Pollo broaster.jpeg',
                'categoria' => 'Plato a la carta',
                'estado' => true,
            ],
        ];

        foreach ($platillos as $platillo) {
            Platillo::create($platillo);
        }
    }
}
