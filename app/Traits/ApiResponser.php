<?php

namespace App\Traits;

use Illuminate\Support\Collection;
use Illuminate\Database\Eloquent\Model;

trait ApiResponser
{
    private function successResponse($data, $code){
        return response()->json($data, $code);
    }

    protected function errorResponse($message, $code){
        return response()->json(['error' => $message, 'code' => $code], $code);
    }

    protected function showOne(Model $instance, $code = 200){

        $transformer = $instance->transformer;
		$instance = $this->transformData($instance, $transformer);

        return $this->successResponse([$instance], $code);
    }

    protected function transformData($data, $transformer){
        $transformation = new $transformer;
        
        return $transformation->transform($data);
    } 
}