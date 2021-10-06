<?php

namespace Watchlearn\Photos\Models;

use Model;

/**
 * Model
 */
class Category extends Model
{
    use \October\Rain\Database\Traits\Validation;


    /**
     * @var string The database table used by the model.
     */
    public $table = 'watchlearn_photos_categories';

    /**
     * @var array Validation rules
     */
    public $rules = [];

    public $attachOne = [
        'category_poster' => 'System\Models\File'
    ];
}
