<?php

namespace App\Exceptions;

use Exception;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;
use Symfony\Component\HttpFoundation\Response;


trait ExceptionTrait{
	public function apiException($request,$e){
		if($this->isHttp($e)){
            return response()->json([
              "error" => 'Incorrect route'
            ],Response::HTTP_NOT_FOUND);

        }
        if($request->expectsJson()){
             if($this->isModel($e)){
            return response()->json([
              "error" => 'model not found'
            ],Response::HTTP_NOT_FOUND);

        }
       
        }
       
         
	
        }
         public function isModel($e){
        	return $e instanceof  Exception;
        }
        public function isHttp($e){
        	 return $e instanceof  NotFoundHttpException;
        }

}