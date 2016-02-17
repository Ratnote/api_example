<?php

namespace App\Http\Controllers;

Class ApiController extends Controller {

    public function indexGET()
    {
        $data = \App\Lesson::all();
        return \Response::json([
            'data' => $data
            ], 200);
    }

    public function lessonGET($id)
    {
        $lesson = \App\Lesson::find($id);

        if (!$lesson)
            return \Response::json([
                'error' => [
                    'message' => 'Lesson does not exist'
                ]
            ], 404);

        return \Response::json([
            'data' => $lesson
        ]);
    }

    private function transform($lessons)
    {

        return array_map(function($lessons)
        {
            return [
                'title'  => $lesson['title'],
                'body'   => $lesson['body'],
                'active' => $lesson['some_bool']
            ];
        }, $lessons->toArray());
    }

}
