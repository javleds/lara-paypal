<?php

namespace Javleds\LaraPayPal\Tests\Unit;

use Javleds\LaraPayPal\Tests\BaseTestCase;

class ConfigTest extends BaseTestCase
{

    /**
     * @dataProvider getRequiredConfigKeysProvider
     */
    public function testConfigHasSandboxEnvironment($configKey): void
    {
        $this->assertNotNull(
            config($configKey)
        );
    }

    public function getRequiredConfigKeysProvider(): array
    {
        return [
            ['lara_paypal.sandbox'],
            ['lara_paypal.sandbox.url'],
            ['lara_paypal.production'],
            ['lara_paypal.production.url'],
        ];
    }
}
