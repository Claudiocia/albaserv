<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\ResultEleitRepository;
use App\Models\ResultEleit;
use App\Validators\ResultEleitValidator;

/**
 * Class ResultEleitRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class ResultEleitRepositoryEloquent extends BaseRepository implements ResultEleitRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return ResultEleit::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
