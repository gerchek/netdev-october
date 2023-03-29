<?php namespace Atashka\Netdev\Models;

use Model;

/**
 * Model
 */
class Services extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'atashka_netdev_services';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    protected $fillable = ['data'];
    protected $casts = [
        'data' => 'json',
    ];
}
