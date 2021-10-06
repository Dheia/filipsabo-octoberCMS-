<?php namespace Watchlearn\Photos\Models;

use Model;

/**
 * Model
 */
class Photo extends Model
{
    use \October\Rain\Database\Traits\Validation;
    

    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_photos_';

    /**
     * @var array Validation rules
     */
    public $rules = [
    ];


    /* Relations */

    public $attachOne = [
        'poster' => 'System\Models\File'
    ];

    public $attachMany = [
        'photo_gallery' => 'System\Models\File'
    ];
}
