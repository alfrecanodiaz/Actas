<?php namespace Modules\Cursos\Repositories\Cache;

use Modules\Cursos\Repositories\CursosRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheCursosDecorator extends BaseCacheDecorator implements CursosRepository
{
    public function __construct(CursosRepository $cursos)
    {
        parent::__construct();
        $this->entityName = 'cursos.cursos';
        $this->repository = $cursos;
    }
}
