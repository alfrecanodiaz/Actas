<?php namespace Modules\Semestres\Repositories\Cache;

use Modules\Semestres\Repositories\ConvocatoriasRepository;
use Modules\Core\Repositories\Cache\BaseCacheDecorator;

class CacheConvocatoriasDecorator extends BaseCacheDecorator implements ConvocatoriasRepository
{
    public function __construct(ConvocatoriasRepository $convocatorias)
    {
        parent::__construct();
        $this->entityName = 'semestres.convocatorias';
        $this->repository = $convocatorias;
    }
}
