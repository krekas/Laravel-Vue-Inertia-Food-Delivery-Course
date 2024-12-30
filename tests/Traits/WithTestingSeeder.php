<?php

namespace Tests\Traits;

use App\Providers\AppServiceProvider;

trait WithTestingSeeder
{
    public function setUpWithTestingSeeder(): void
    {
        $this->artisan('db:seed', ['--class' => 'TestingSeeder']);
        (new AppServiceProvider(app()))->boot();
    }
}
