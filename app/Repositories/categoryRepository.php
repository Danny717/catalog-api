<?php

namespace App\Repositories;

use App\Models\category;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class categoryRepository
 * @package App\Repositories
 * @version October 26, 2018, 7:54 pm UTC
 *
 * @method category findWithoutFail($id, $columns = ['*'])
 * @method category find($id, $columns = ['*'])
 * @method category first($columns = ['*'])
*/
class categoryRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'title',
        'description',
        'alias',
        'active'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return category::class;
    }
}
