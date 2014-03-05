<?php
use \Illuminate\Database\Eloquent\ModelNotFoundException;
class CommentController extends \BaseController {

	/**
	 * Display a listing of the resource.
	 *
	 * @return Response
	 */
	public function index()
	{
		//
		$menu_active = "/comment";
		$comments = \Comment::all();
		return View::make('comment.index', compact('menu_active', 'comments'));
	}

	/**
	 * Show the form for creating a new resource.
	 *
	 * @return Response
	 */
	public function create()
	{
		//
		$menu_active = "/comment/create";
		$user = \User::first();
		return View::make('comment.create', compact('menu_active', 'user'));
	}

	/**
	 * Store a newly created resource in storage.
	 *
	 * @return Response
	 */
	public function store()
	{
		//
		$comment = new \Comment;
		if($comment->save())
		{
			return Redirect::route('comment.index')->with('message', '新增完成');
		}
		else
		{
			return Redirect::route('comment.create')
				   ->withInput()
				   ->withErrors($comment->errors());
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
	}

	/**
	 * Show the form for editing the specified resource.
	 *
	 * @param  int  $id
	 * @return Response
	 */
	public function edit($id)
	{
		//
		try
		{
			$menu_active = "";
			$user = \User::first();
			$comment = \Comment::find($id);
			return View::make('comment.edit', compact('menu_active', 'comment', 'user'));
		}
		catch(ModelNotFoundException $e)
		{
			return Redirect::route('comment.index')
				   ->with('message', '無此筆資料')
				   ->with('style', 'Information');
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
	}

}