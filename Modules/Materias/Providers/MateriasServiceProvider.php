<?php namespace Modules\Materias\Providers;

use Illuminate\Support\ServiceProvider;

class MateriasServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerBindings();
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }

    private function registerBindings()
    {
        $this->app->bind(
            'Modules\Materias\Repositories\MateriasRepository',
            function () {
                $repository = new \Modules\Materias\Repositories\Eloquent\EloquentMateriasRepository(new \Modules\Materias\Entities\Materias());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Materias\Repositories\Cache\CacheMateriasDecorator($repository);
            }
        );
// add bindings

    }
}
