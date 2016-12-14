<?php namespace Modules\Alumnos\Providers;

use Illuminate\Support\ServiceProvider;

class AlumnosServiceProvider extends ServiceProvider
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
            'Modules\Alumnos\Repositories\AlumnosRepository',
            function () {
                $repository = new \Modules\Alumnos\Repositories\Eloquent\EloquentAlumnosRepository(new \Modules\Alumnos\Entities\Alumnos());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Alumnos\Repositories\Cache\CacheAlumnosDecorator($repository);
            }
        );
        $this->app->bind(
            'Modules\Alumnos\Repositories\InscripcionesRepository',
            function () {
                $repository = new \Modules\Alumnos\Repositories\Eloquent\EloquentInscripcionesRepository(new \Modules\Alumnos\Entities\Inscripciones());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Alumnos\Repositories\Cache\CacheInscripcionesDecorator($repository);
            }
        );
// add bindings


    }
}
