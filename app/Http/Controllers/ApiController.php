<?php

namespace App\Http\Controllers;

Class ApiController extends Controller {

    public function indexGET()
    {
        $data = \App\Lesson::all();
        return \Response::json([
            'data' => (array)$data
            ], 200);
    }

}
