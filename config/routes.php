<?php

function mountRoute(string $controllerName, string $methodName): array
{
    return [
        'controller' => $controllerName,
        'method' => $methodName.'Action',
    ];
}

return [
    '/' => mountRoute(HomeController::class, 'index'),
    
];