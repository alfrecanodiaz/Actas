<?php namespace Modules\Profesores\Providers;

use Illuminate\Support\ServiceProvider;

class ProfesoresServiceProvider extends ServiceProvider
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
            'Modules\Profesores\Repositories\ProfesoresRepository',
            function () {
                $repository = new \Modules\Profesores\Repositories\Eloquent\EloquentProfesoresRepository(new \Modules\Profesores\Entities\Profesores());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Profesores\Repositories\Cache\CacheProfesoresDecorator($repository);
            }
        );
// add bindings

    }
}
