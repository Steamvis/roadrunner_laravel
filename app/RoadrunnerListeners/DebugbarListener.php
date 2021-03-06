<?php

declare(strict_types=1);

namespace App\RoadrunnerListeners;

use Spiral\RoadRunnerLaravel\Listeners\ListenerInterface;

/**
 * @link https://github.com/avto-dev/roadrunner-laravel/issues/10
 * @link https://github.com/spiral/roadrunner/issues/133
 */
class DebugbarListener implements ListenerInterface
{
    /**
     * {@inheritdoc}
     */
    public function handle($event): void
    {
        if(config('app.env') !== 'production') {
            debugbar()->enable();
        }
    }
}
