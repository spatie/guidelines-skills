<?php

namespace Spatie\Guidelines;

use Illuminate\Support\ServiceProvider;

class GuidelinesServiceProvider extends ServiceProvider
{
    public function boot(): void
    {
        // Boost auto-discovers resources/boost/ directory
    }
}
