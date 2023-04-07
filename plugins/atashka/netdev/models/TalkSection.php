<?php namespace Atashka\Netdev\Models;

use Model;

/**
 * Model
 */
class TalkSection extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'atashka_netdev_talk_section';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];

	public $attachOne = [
    		'logo' => 'System\Models\File',
		'file' => 'System\Models\File'
	];
}
