<?php

namespace App\Repositories;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\AlebraRepository;
use App\Models\Alebra;
use App\Validators\AlebraValidator;

/**
 * Class AlebraRepositoryEloquent.
 *
 * @package namespace App\Repositories;
 */
class AlebraRepositoryEloquent extends BaseRepository implements AlebraRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Alebra::class;
    }

    

    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
