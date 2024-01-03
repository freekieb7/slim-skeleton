<?php

/** @noinspection PhpUnused */
declare(strict_types=1);

use App\Controller\HelloController;
use Slim\App;

return function (App $app) {
    $app->get('/', [HelloController::class, 'hello']);
};
