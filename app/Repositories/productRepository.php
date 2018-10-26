<?php

namespace App\Repositories;

use App\Models\product;
use InfyOm\Generator\Common\BaseRepository;

/**
 * Class productRepository
 * @package App\Repositories
 * @version October 26, 2018, 7:54 pm UTC
 *
 * @method product findWithoutFail($id, $columns = ['*'])
 * @method product find($id, $columns = ['*'])
 * @method product first($columns = ['*'])
*/
class productRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'category_id',
        'title',
        'description',
        'price',
        'active',
        'count'
    ];

    /**
     * Configure the Model
     **/
    public function model()
    {
        return product::class;
    }
}
