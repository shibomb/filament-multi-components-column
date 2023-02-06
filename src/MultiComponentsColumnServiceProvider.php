<?php

namespace Shibomb\FilamentMultiComponentsColumn;

use Filament\PluginServiceProvider;
use Spatie\LaravelPackageTools\Package;

class MultiComponentsColumnServiceProvider extends PluginServiceProvider
{
    public function configurePackage(Package $package): void
    {
        $package
            ->name('filament-multi-components-column')
            ->hasViews();
    }
}
