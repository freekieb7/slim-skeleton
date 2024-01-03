<?php

declare(strict_types=1);

namespace App\Controller;

use Psr\Http\Message\ResponseInterface as Response;

final class HelloController
{
    public function hello(Response $response): Response
    {
        $response->getBody()->write('Hello world');
        return $response;
    }
}
