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
        return $this->respond([
            'data' => $this->lessonTransformer->transformCollection($data->toArray())
            ]);
    }

    public function lessonGET($id)
    {
        $lesson = \App\Lesson::find($id);

        if (!$lesson) {
            return $this->respondNotFound();
        }


        return $this->respond([
            'data' => $this->lessonTransformer->transform($lesson)
        ]);
    }

    public function storePOST()
    {
        return 'store';
    }
}
