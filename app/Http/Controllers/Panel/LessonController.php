<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

use App\Models\Lesson;
use App\Http\Requests\Panel\LessonFormRequest;

class LessonController extends Controller
{

	public function __construct( Lesson $lesson ){

		$this->lesson = $lesson;

	}
    
    public function index(){

    	$lessions = $this->lesson->all();
		return view('panel/lesson/lessons', compact('lessions'));

	}

	public function create( LessonFormRequest $request ){
		return view('panel/lesson/addLesson');
	}

	public function store(){

	}

	public function edit(){

	}

	public function update(){

	}

}
