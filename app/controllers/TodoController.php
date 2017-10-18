<?php

class TodoController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		try{
            
            $todos = Todo::all()->take(9);

			$response = [
                'data' => []
            ];
            $statusCode = 200;
            foreach($todos as $todo){

                $response['data'][] = [
					"type" => "todos",
					'id' => $todo->id,
					"attributes" => [
						'title' => $todo->title,
						'completed' => $todo->completed
					]
				];
				
            }

        }catch (Exception $e){
            $statusCode = 404;
        }finally{
            return Response::json($response, $statusCode);
        }
	}


	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		// $validator = Validator::make(
		//     array('title' => 'required'),
		//     array('isCompleted' => 'required')
		// );

		try{
			
			$attributes = json_decode(Request::getContent())->data->attributes;

			$todo = Todo::create([
				'title' => $attributes->title, 'completed' => $attributes->completed
			]);
			$todo->save();
			
			$statusCode = 200;
	
			$response = [
				'data' => [
					'type' => 'todos',
					'id' => $todo->id,
					'attributes' => [
						'title' => $todo->title,
						'completed' => $todo->completed
					]
				]
			];

		}catch (Exception $e){
			$statusCode = 404;
		}finally{
			return Response::json($response, $statusCode);
		}


	}


	/**
	 * Display the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function show($id)
	{
		//		
	    try{
            
			$todo = Todo::find($id);
			
			$statusCode = 200;
    
            $response = [
				'data' => [
					'type' => 'todos',
					'id' => $todo->id,
					'attributes' => [
						'title' => $todo->title,
						'completed' => $todo->completed
					]
				]
            ];
            
        }catch (Exception $e){
            $statusCode = 404;
        }finally{
            return Response::json($response, $statusCode);
        }

	
	}


	/**
	 * Update the specified resource in storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function update($id)
	{
		//
		
		try{

			// $validator = Validator::make(
			// 	array('is-completed' => 'required')
			// );
		
			$attributes = json_decode(Request::getContent())->data->attributes;

            $todo = Todo::find($id);			
			$todo->completed = $attributes->completed;
			$todo->title = $attributes->title;
			$todo->save();
			
			$statusCode = 200;

			$response = [
				'data' => [
					'type' => 'todos',
					'id' => $todo->id,
					'attributes' => [
						'title' => $todo->title,
						'completed' => $todo->completed
					]
				]
            ];
			
		}catch (Exception $e){
			$statusCode = 404;
			$response->errors = $e; 
		}finally{
			return Response::json($response, $statusCode);
		}
	}


	/**
	 * Remove the specified resource from storage.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function destroy($id)
	{
		//
		try{

			$todo = Todo::find($id);
			
			$statusCode = 200;
			
			$response = [
				'data' => [
					'type' => 'todos',
					'id' => $todo->id,
					'attributes' => [
						'title' => $todo->title,
						'completed' => $todo->completed
					]
				]
			];

			$todo->delete();
			
		}catch (Exception $e){
			$statusCode = 404;
		}finally{
			return Response::json($response, $statusCode);
		}
	}


}
