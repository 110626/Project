<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Fee;
use App\Student;
use DB;

class WelcomeController extends Controller
{
     /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      
      $fees = Fee::orderBy('student_name', 'desc')->get();
      $students = Student::orderBy('id', 'desc')->get();
      //$kb_files = Kb_files::orderBy('idkb_files','desc')->get();
      // $jjj=Bookmarked_kb_file::find($id);
      // $fields = $jjj->kb_files()->idkb_files;
      // $variables = array($bookmarked_kb_files,$fields);
       //->paginate(5);
      // $data= array(
      //   'kb_files'=> $kb_files,
      //   'bookmarked_kb_files'=> $bookmarked_kb_files,
      //   );
        // var_dump(json_encode($bookmarked_kb_files[0]->kb_files));
        //     die();

       $data= array(
        'fees'=> $fees,
        'students'=> $students,
        );

       return view('Daniel.welcome')->with('data', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
    
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
       
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       
    }
}
