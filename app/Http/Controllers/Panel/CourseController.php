<?php

namespace App\Http\Controllers\Panel;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use App\Http\Controllers\Controller;
use App\Models\Course;
use App\Http\Requests\Panel\CourseFormRequest;

class CourseController extends Controller
{

    public function __construct( Course $course )
    {

        $this->course = $course;

    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index( Course $course )
    {
        
        $courses = $course->all();
        return view('panel/course/courses', compact('courses'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('panel/course/addCourses');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CourseFormRequest $request)
    {
     
        $dataForm = $request->only(['title', 'description_text', 'description_html']);
        // dd($dataForm);
        
        $insert = $this->course->create( $dataForm );

        if( $insert ){
            return redirect()->route('panel.course.index');
        } else {
            return redirect()->route('panel.course.create');
        }

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        
        $course = $this->course->find($id);

        return view('panel/course/addCourses', compact('course'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(CourseFormRequest $request, $id)
    {
        
        $dataForm = $request->all();

        $course = $this->course->find($id);
        $update = $course->update( $dataForm );
        
        if( $update ){
            return redirect()->route('panel.course.index');
        } else {
            return redirect()->route('panel.course.edit', $id)->with(['errors' => 'Falha ao Editar']);
        }

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        
        $course = $this->course->find($id);
        $delete = $course->delete();

        if( $delete ){
            return redirect()->route('panel.course.index');
        } else {
            return redirect()->route('panel.course.index')->with(['errors' => 'Falha ao deletar este curso']);
        }

    }
}
