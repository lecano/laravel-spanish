<?php

namespace Lecano\Spanish\Tests\Lang;

use Lecano\Spanish\Tests\TestCase;

class LangTest extends TestCase
{
    /** @test */
    public function has_failed_auth_translation()
    {
        $this->assertEquals(
            trans('auth.failed'),
            'Estas credenciales no coinciden con nuestros registros.'
        );
    }

    /** @test */
    public function has_template_translation()
    {
        $this->assertEquals(
            __('Name'),
            'Nombre'
        );
    }
}
