<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ResultPartidoRepository;
use App\Models\ResultPartido;
use App\Validators\ResultPartidoValidator;

/**
 * Class ResultPartidoRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ResultPartidoRepositoryEloquent extends BaseRepository implements ResultPartidoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ResultPartido::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
