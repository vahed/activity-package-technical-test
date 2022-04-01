<?php

declare(strict_types=1);

namespace Activity\Tests;

use Activity\ActivityServiceProvider;
use Orchestra\Testbench\TestCase as OrchestraTestCase;

class TestCase extends OrchestraTestCase
{
    protected function getPackageProviders($app)
    {
        return [ActivityServiceProvider::class];
    }
}
