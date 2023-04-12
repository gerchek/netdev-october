<?php namespace Atashka\Netdev\Models;

use Model;

/**
 * Model
 */
class Portfolio extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'atashka_netdev_portfolio';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

    public $attachOne = [
        'indeximage' => 'System\Models\File',
        'rightimage' => 'System\Models\File',
        'leftimage' => 'System\Models\File',
        'bottomimage' => 'System\Models\File'
    ];

    protected $fillable = ['tags','aboutsection'];
    protected $casts = [
        'tags' => 'json',
        'aboutsection' => 'json',
    ];
}
