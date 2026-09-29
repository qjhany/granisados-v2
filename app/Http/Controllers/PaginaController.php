<?php

namespace App\Http\Controllers;

use App\Models\Producto;

class PaginaController extends Controller
{
    public function inicio()
    {
        return view('inicio');
    }

    public function menu()
    {
        $productos = Producto::all();

        if ($productos->isEmpty()) {
            $productos = collect([
                (object) [
                    'nombre' => 'Granizado de Mango',
                    'descripcion' => 'Mango tropical, hielo fino y un toque cítrico.',
                    'precio' => 8000,
                    'imagen' => 'https://images.unsplash.com/photo-1622597467836-f3285f2131b8?auto=format&fit=crop&w=900&q=80',
                ],
                (object) [
                    'nombre' => 'Granizado de Fresa',
                    'descripcion' => 'Fresas dulces y refrescantes con sabor intenso.',
                    'precio' => 8500,
                    'imagen' => 'https://images.unsplash.com/photo-1544145945-f90425340c7e?auto=format&fit=crop&w=900&q=80',
                ],
                (object) [
                    'nombre' => 'Granizado de Maracuyá',
                    'descripcion' => 'El equilibrio perfecto entre ácido, dulce y frío.',
                    'precio' => 9000,
                    'imagen' => 'https://images.unsplash.com/photo-1621263764928-df1444c5e859?auto=format&fit=crop&w=900&q=80',
                ],
                (object) [
                    'nombre' => 'Granizado de Mora Azul',
                    'descripcion' => 'Mezcla frutal azul con notas de mora y limón.',
                    'precio' => 9500,
                    'imagen' => 'https://images.unsplash.com/photo-1579954115545-a95591f28bfc?auto=format&fit=crop&w=900&q=80',
                ],
                (object) [
                    'nombre' => 'Granizado de Sandía',
                    'descripcion' => 'Sandía jugosa y hielo triturado para días calurosos.',
                    'precio' => 8000,
                    'imagen' => 'https://images.unsplash.com/photo-1497534446932-c925b458314e?auto=format&fit=crop&w=900&q=80',
                ],
            ]);
        }

        return view('menu', compact('productos'));
    }

    public function nosotros()
    {
        return view('nosotros');
    }

    public function contacto()
    {
        return view('contacto');
    }

    public function mensaje2()
    {
        return view('mensaje2');
    }
}
