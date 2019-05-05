<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\File ;
use DB;
class FileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */  
    public function index()
    {
$files=File::latest()->paginate(4);
return view('home',compact('files'))->with('i',(request()->input('page',1)-1)*4);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file.create');
    }


    public function search(Request $request){
    $search=$request->get('search');
    $files=DB::table('Files')->where('nom','like','%'.$search.'%')->paginate(4);
    return view('home',['files'=>$files]);


    }














    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
       $request->validate([
            'nom' =>'required' ,






            'image' =>'required'

       ]);

       $image=$request->file('image');
       $new_name= time().'.'.$image->getClientOriginalExtension();
       $image->move(public_path('images'),$new_name);
$mydata=array(

            'nom' =>$request->nom,

            'image' =>$new_name




 );












File::create($mydata);
 
return view('home',compact('files'));

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {   $file=File::find($id);
        return view('file.detail',compact('file'));
    }
 
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
      $file=File::find($id);
        return view('file.edit',compact('file'));
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
      $request->validate([
           'nom' =>'required' ,
           'formateur' =>'required' ,
           'code' =>'required' ,
           'duree' =>'required' ,
           'fiche_tech' =>'required' ,
           'cible_public' =>'required',
           'programme' =>'required',
           'status' =>'required'
      ]);

      $file=File::find($id);

      $file->nom=$request->get('nom');
      $file->formateur=$request->get('formateur');
      $file->code=$request->get('code');
      $file->duree=$request->get('duree');
      $file->fiche_tech=$request->get('fiche_tech');
      $file->programme=$request->get('programme');
      $file->status=$request->get('status');
      $file->save();
      return redirect()->route('home')->with('success', 'new file is updated succefully ');




    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $file=File::find($id);
           $file->delete();
           return redirect()->route('file.home')->with('success', 'new file is updated deleted ');

    }
}
