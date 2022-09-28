<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class PhotosController extends BaseController
{
    
    public function index(){

        return [
            [
                'id' => 1,
                "name" => "adaa"
            ],
            [
                'id' => 2,
                "name" => "adaa"
            ]
        ];

    }

    public function store(){

        return [
            'id' => 1,
        ];

    }

    public function show(){

        return 'find one';

    }

    public function update(){

        return 'updating';

    }

    public function destroy(){
        
        return 'delete';

    }

}
