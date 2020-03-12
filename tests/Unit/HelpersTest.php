<?php

namespace Javleds\LaraPayPal\Tests\Unit;

use Orchestra\Testbench\TestCase;

class HelpersTest extends TestCase
{
    /**
     * @dataProvider getDirsProvider
     */
    public function testGetBaseDir(string $path, bool $shouldExist): void
    {
        $srcDir = realpath(getBaseDir($path));
        $this->assertSame($shouldExist, !!$srcDir);

        if ($shouldExist) {
            $this->assertStringContainsString($path, $srcDir);
        }
    }

    public function getDirsProvider(): array
    {
        return [
            ['config', true],
            ['src', true],
            ['tests', true],
            ['another', false],
        ];
    }
}
