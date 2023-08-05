<?php

declare(strict_types=1);

namespace BombenProdukt\GeoNames;

use BombenProdukt\PackagePowerPack\Package\AbstractServiceProvider;
use Spatie\LaravelPackageTools\Package;

final class ServiceProvider extends AbstractServiceProvider
{
    public function configurePackage(Package $package): void
    {
        parent::configurePackage($package);

        $package->hasCommand(ImportPostalCodes::class);
    }

    public function packageRegistered(): void
    {
        $this->app->singleton(
            ConfigurationInterface::class,
            Configuration::class,
        );
    }
}
