<?php

return [
    'timezone' => 'Asia/Ho_Chi_Minh',
    'url' => env('APP_URL', '127.0.0.1:8000'),
    'key' => env('APP_KEY', ''),
    'layout' => env('MAIN_LAYOUT', 'master'),
    'autoload' => [
        'helpers/helpers.php'
    ],

    'aliases' => [
        'App' => Midun\Supports\Facades\App::class,
        'Route' => Midun\Supports\Facades\Route::class,
        'DB' => Midun\Supports\Facades\QueryBuilder::class,
        'AppException' => Midun\Http\Exceptions\AppException::class,
        'Session' => Midun\Supports\Facades\Session::class,
        'Request' => Midun\Supports\Facades\Request::class,
        'Hash' => Midun\Supports\Facades\Hash::class,
        'Hustle' => Midun\Supports\Facades\Hustle::class,
        'Auth' => Midun\Supports\Facades\Auth::class,
        'Log' => Midun\Supports\Facades\Logger::class,
        'Storage' => Midun\Supports\Facades\Storage::class,
        'Config' => Midun\Supports\Facades\Config::class,
        'Validator' => Midun\Supports\Facades\Validator::class,
        'View' => Midun\Supports\Facades\View::class,
    ],

    'providers' => [
        Midun\Hashing\HashServiceProvider::class,
        Midun\Database\QueryBuilder\QueryBuilderServiceProvider::class,
        Midun\Http\RequestServiceProvider::class,
        Midun\Routing\Controller\ControllerServiceProvider::class,
        Midun\Supports\Response\DataResponseServiceProvider::class,
        Midun\Session\SessionServiceProvider::class,
        Midun\Database\Connections\ConnectionServiceProvider::class,
        Midun\Configuration\ConfigurationServiceProvider::class,
        Midun\Bus\BusServiceProvider::class,
        Midun\Logger\LoggerServiceProvider::class,
        Midun\Storage\StorageServiceProvider::class,
        Midun\View\ViewServiceProvider::class,
        Midun\Translator\TranslatorServiceProvider::class,

        App\Providers\AppServiceProvider::class,
        App\Providers\AuthServiceProvider::class,
        App\Providers\RouteServiceProvider::class,
        App\Providers\RepositoryServiceProvider::class,
        App\Providers\ValidationServiceProvider::class
    ]
];
