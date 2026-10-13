<?php

return [
    App\Providers\AppServiceProvider::class,
    // Provider Modular Monolith (Modul 2)
    App\Providers\AdminServiceProvider::class,
    App\Providers\CatalogServiceProvider::class,
    App\Providers\InventoryServiceProvider::class,
    App\Providers\BookingServiceProvider::class,
    App\Providers\PaymentsServiceProvider::class,
    App\Providers\ReportingServiceProvider::class,
];