<?php

namespace Watchlearn\Photos\Components;

use Cms\Classes\ComponentBase;
use PhpParser\Node\Expr\FuncCall;
use Watchlearn\Photos\Models\Photo;

class Photos extends ComponentBase
{

    public function componentDetails()
    {

        return [
            'name' => 'Photo list by slug',
            'description' => 'List of photos'
        ];
    }

    public function onRun()
    {

        $this->photos = $this->loadPhotos();
    
        
    }

    protected function loadPhotos()
    {
        $slug = $this->param('slug');

         return Photo::where('slug', $slug)->get();
    }

    protected $slug;
    public $photos;
}
