<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ResultDetalheRepository;
use App\Models\ResultDetalhe;
use App\Validators\ResultDetalheValidator;

/**
 * Class ResultDetalheRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ResultDetalheRepositoryEloquent extends BaseRepository implements ResultDetalheRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ResultDetalhe::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
