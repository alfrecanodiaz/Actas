<?php namespace Modules\Semestres\Providers;

use Illuminate\Support\ServiceProvider;

class SemestresServiceProvider extends ServiceProvider
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
            'Modules\Semestres\Repositories\SemestresRepository',
            function () {
                $repository = new \Modules\Semestres\Repositories\Eloquent\EloquentSemestresRepository(new \Modules\Semestres\Entities\Semestres());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Semestres\Repositories\Cache\CacheSemestresDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Semestres\Repositories\ConvocatoriasRepository',
            function () {
                $repository = new \Modules\Semestres\Repositories\Eloquent\EloquentConvocatoriasRepository(new \Modules\Semestres\Entities\Convocatorias());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Semestres\Repositories\Cache\CacheConvocatoriasDecorator($repository);
            }
        );
// add bindings


    }
}
