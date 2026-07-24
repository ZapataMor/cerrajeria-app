<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;

class LocksmithPageController extends Controller
{
    public function home(): View
    {
        return view('locksmith.home', [
            'trustItems' => [
                ['icon' => 'clock', 'title' => 'Atención 24/7', 'description' => 'Emergencias a cualquier hora, todos los días del año.'],
                ['icon' => 'home', 'title' => 'Servicio a domicilio', 'description' => 'Vamos hasta su ubicación en toda Santa Marta.'],
                ['icon' => 'badge', 'title' => 'Técnico certificado', 'description' => 'Trabajo profesional y con años de experiencia.'],
                ['icon' => 'shieldcheck', 'title' => 'Trabajo garantizado', 'description' => 'Respaldamos cada servicio realizado.'],
            ],
            'featuredServices' => [
                ['icon' => 'door', 'title' => 'Apertura de puertas y autos', 'description' => 'Sin dañar la cerradura.'],
                ['icon' => 'lock', 'title' => 'Cambio de cerraduras', 'description' => 'Reparación e instalación.'],
                ['icon' => 'key', 'title' => 'Duplicado de llaves', 'description' => 'Comunes y de seguridad.'],
                ['icon' => 'bolt', 'title' => 'Emergencias 24/7', 'description' => 'Respuesta inmediata.'],
            ],
            'neighborhoods' => [
                'El Rodadero',
                'Gaira',
                'Bello Horizonte',
                'Mamatoco',
                'Centro Histórico',
                'Bavaria',
                'Los Alcázares',
                'El Prado',
                'Pescaíto',
                'Taganga',
                'Ciudad Jardín',
                'Curinca',
            ],
            'testimonials' => [
                ['quote' => 'Me quedé sin llaves a medianoche y en menos de 30 minutos ya estaba dentro de mi casa. Excelente servicio.', 'author' => 'Marcela R.', 'location' => 'El Rodadero'],
                ['quote' => 'Cambió las cerraduras de mi local con total profesionalismo y a muy buen precio. Muy recomendado.', 'author' => 'Andrés G.', 'location' => 'Centro Histórico'],
                ['quote' => 'Llegó hasta mi carro en Gaira y solucionó el problema de la llave rapidísimo. Serio y puntual.', 'author' => 'Carolina P.', 'location' => 'Gaira'],
            ],
        ]);
    }

    public function services(): View
    {
        return view('locksmith.services', [
            'services' => [
                ['icon' => 'door', 'title' => 'Apertura de puertas y vehículos', 'description' => 'Abrimos puertas de casas, oficinas y autos sin dañar la cerradura.'],
                ['icon' => 'lock', 'title' => 'Cambio y reparación de cerraduras', 'description' => 'Reparamos o reemplazamos cerraduras dañadas, desgastadas o forzadas.'],
                ['icon' => 'key', 'title' => 'Duplicado de llaves', 'description' => 'Copias precisas de llaves comunes y de alta seguridad.'],
                ['icon' => 'carkey', 'title' => 'Llaves codificadas de auto', 'description' => 'Programación y duplicado de llaves con chip para vehículos.'],
                ['icon' => 'shield', 'title' => 'Cerraduras de seguridad', 'description' => 'Asesoría e instalación de cerraduras y sistemas de alta seguridad.'],
                ['icon' => 'safe', 'title' => 'Apertura de cajas fuertes', 'description' => 'Apertura profesional de cajas fuertes sin dañar su contenido.'],
                ['icon' => 'bolt', 'title' => 'Atención de emergencias', 'description' => 'Respuesta inmediata si se queda por fuera o pierde sus llaves.'],
            ],
        ]);
    }

    public function products(): View
    {
        return view('locksmith.products', [
            'products' => [
                ['icon' => 'lock', 'title' => 'Cerraduras de sobreponer y embutir', 'description' => 'Para puertas de madera, metálicas y de seguridad.'],
                ['icon' => 'shield', 'title' => 'Candados de alta seguridad', 'description' => 'Antibroca, antipalanca y de larga durabilidad.'],
                ['icon' => 'keypad', 'title' => 'Cerraduras digitales y biométricas', 'description' => 'Acceso con clave, huella o tarjeta.'],
                ['icon' => 'carkey', 'title' => 'Llaves y controles de vehículo', 'description' => 'Llaves con chip, carcasas y controles remotos.'],
                ['icon' => 'handle', 'title' => 'Manijas y accesorios', 'description' => 'Manijas, rosetas y herrajes para todo tipo de puerta.'],
                ['icon' => 'latch', 'title' => 'Pasadores y cerrojos', 'description' => 'Refuerzos y cerrojos para mayor seguridad.'],
            ],
        ]);
    }
}
