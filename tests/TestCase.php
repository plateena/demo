<?php

namespace Plateena\Demo\Tests;

use Orchestra\Testbench\TestCase as BaseTestCase;
use Plateena\Demo\DemoServiceProvider;

/**
 * Class TestCase
 * @author yourname
 */
class TestCase extends BaseTestCase
{
    public function setUp(): void
    {
        parent::setUp();
        $this->artisan('migrate')->run();
    }

    protected function getPackageProviders($app)
    {
        return [DemoServiceProvider::class];
    }

    protected function getEnvironmentSetUp($app)
    {
        // Setup default database to use sqlite :memory:
        $app['config']->set('database.default', 'testbench');
        $app['config']->set('database.connections.testbench', [
            'driver' => 'sqlite',
            'database' => ':memory:',
            'prefix' => '',
        ]);
    }
}
