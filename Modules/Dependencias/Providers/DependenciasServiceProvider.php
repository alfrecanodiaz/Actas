<?php namespace Modules\Dependencias\Providers;

use Illuminate\Support\ServiceProvider;

class DependenciasServiceProvider extends ServiceProvider
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
            'Modules\Dependencias\Repositories\DepartamentosRepository',
            function () {
                $repository = new \Modules\Dependencias\Repositories\Eloquent\EloquentDepartamentosRepository(new \Modules\Dependencias\Entities\Departamentos());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Dependencias\Repositories\Cache\CacheDepartamentosDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Dependencias\Repositories\SeccionesRepository',
            function () {
                $repository = new \Modules\Dependencias\Repositories\Eloquent\EloquentSeccionesRepository(new \Modules\Dependencias\Entities\Secciones());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Dependencias\Repositories\Cache\CacheSeccionesDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Dependencias\Repositories\TurnosRepository',
            function () {
                $repository = new \Modules\Dependencias\Repositories\Eloquent\EloquentTurnosRepository(new \Modules\Dependencias\Entities\Turnos());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Dependencias\Repositories\Cache\CacheTurnosDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Dependencias\Repositories\AulasRepository',
            function () {
                $repository = new \Modules\Dependencias\Repositories\Eloquent\EloquentAulasRepository(new \Modules\Dependencias\Entities\Aulas());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Dependencias\Repositories\Cache\CacheAulasDecorator($repository);
            }
        );
// add bindings




    }
}
