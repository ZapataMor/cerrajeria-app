<?php

namespace Tests\Feature;

use PHPUnit\Framework\Attributes\DataProvider;
use Tests\TestCase;

class LocksmithPagesTest extends TestCase
{
    #[DataProvider('marketingPages')]
    public function test_locksmith_marketing_pages_are_available(string $route, string $text): void
    {
        $this->get(route($route))
            ->assertOk()
            ->assertSee($text);
    }

    #[DataProvider('routeNames')]
    public function test_marketing_pages_reference_only_permanent_public_assets(string $route): void
    {
        $this->get(route($route))
            ->assertOk()
            ->assertSee('/images/keyPress/logo.png', escape: false)
            ->assertDontSee('Sitio de cerrajería William', escape: false)
            ->assertDontSee('image-slot.js', escape: false);
    }

    public static function marketingPages(): array
    {
        return [
            'home' => ['home', 'Cerrajería a domicilio en Santa Marta'],
            'services' => ['services', 'Todo lo que hacemos por usted'],
            'products' => ['products', 'Catálogo de productos'],
        ];
    }

    public static function routeNames(): array
    {
        return [
            'home' => ['home'],
            'services' => ['services'],
            'products' => ['products'],
        ];
    }
}
