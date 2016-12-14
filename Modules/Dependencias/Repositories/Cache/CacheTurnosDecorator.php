<?php namespace Modules\Dependencias\Repositories\Cache;

use Modules\Dependencias\Repositories\TurnosRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheTurnosDecorator extends BaseCacheDecorator implements TurnosRepository
{
    public function __construct(TurnosRepository $turnos)
    {
        parent::__construct();
        $this->entityName = 'dependencias.turnos';
        $this->repository = $turnos;
    }
}
