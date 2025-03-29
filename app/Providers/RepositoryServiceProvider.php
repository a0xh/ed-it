<?php declare(strict_types=1);

namespace App\Providers;

use App\Contracts\Interface\RepositoryIntervalInterface;
use App\Repositories\IntervalRepository;
use Illuminate\Support\ServiceProvider;

final class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->bind(
            abstract: RepositoryIntervalInterface::class,
            concrete: IntervalRepository::class
        );
    }
}
