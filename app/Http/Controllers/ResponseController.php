<?php namespace App\Http\Controllers;

Class ResponseController extends Controller {

    protected $statusCode = 200;

    public function getStatusCode()
    {
        return $this->statusCode;
    }

    public function setStatusCode($statusCode)
    {
        $this->statusCode = $statusCode;
    }

    public function respondNotFound($message = 'Not found')
    {
        return \Response::json([
            'error' => [
                'message'       => $message,
                'status_code'   => $this->getStatusCode()
            ]
        ]);
    }

}
