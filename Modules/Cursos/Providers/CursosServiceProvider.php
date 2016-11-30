<?php namespace Modules\Cursos\Providers;

use Illuminate\Support\ServiceProvider;

class CursosServiceProvider extends ServiceProvider
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
            'Modules\Cursos\Repositories\CursosRepository',
            function () {
                $repository = new \Modules\Cursos\Repositories\Eloquent\EloquentCursosRepository(new \Modules\Cursos\Entities\Cursos());

                if (! config('app.cache')) {
                    return $repository;
                }

                return new \Modules\Cursos\Repositories\Cache\CacheCursosDecorator($repository);
            }
        );
// add bindings

    }
}
