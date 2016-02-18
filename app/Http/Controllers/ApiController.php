<?php namespace App\Http\Controllers;

use \utils\Transformers\LessonTransformer;

Class ApiController extends ResponseController {

    protected $lessonTransformer;

    public function __construct(lessonTransformer $lessonTransformer)
    {
        $this->lessonTransformer = $lessonTransformer;
    }

    public function indexGET()
    {
        $data = \App\Lesson::all();
        return \Response::json([
            'data' => $this->lessonTransformer->transformCollection($data->toArray())
            ], 200);
    }

    public function lessonGET($id)
    {
        $lesson = \App\Lesson::find($id);

        if (!$lesson) {
            return $this->respondNotFound();
        }


        return \Response::json([
            'data' => $this->lessonTransformer->transform($lesson)
        ]);
    }
}
