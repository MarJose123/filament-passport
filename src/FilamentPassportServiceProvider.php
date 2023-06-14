<?php

namespace MarJose123\FilamentPassport;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class FilamentPassportServiceProvider extends PluginServiceProvider
{
    public static string $name = 'filament-passport';

    protected array $resources = [
        // CustomResource::class,
    ];

    protected array $pages = [
        // CustomPage::class,
    ];

    protected array $widgets = [
        // CustomWidget::class,
    ];

    protected array $styles = [
        'plugin-filament-passport' => __DIR__.'/../resources/dist/filament-passport.css',
    ];

    protected array $scripts = [
        'plugin-filament-passport' => __DIR__.'/../resources/dist/filament-passport.js',
    ];

    // protected array $beforeCoreScripts = [
    //     'plugin-filament-passport' => __DIR__ . '/../resources/dist/filament-passport.js',
    // ];

    public function configurePackage(Package $package): void
    {
        $package->name(static::$name);
    }
}
