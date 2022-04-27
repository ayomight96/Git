<?php

declare(strict_types=1);

namespace App\Middleware;

use Psr\Container\ContainerInterface;

class TestFactory
{
    public function __invoke(ContainerInterface $container) : Test
    {
        return new Test();
    }
}
