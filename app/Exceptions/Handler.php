public function renderException($request, Exception $exception) 
{ 
if ($exception instanceof NotFoundHttpException) { 
return response()->view('errors.404', [], 404); 
} 
return parent::render($request, $exception); 
}