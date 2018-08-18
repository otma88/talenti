<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Kategorije;

class TalentiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talenti = User::all();

        return view('talenti', compact('talenti'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('register');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        var_dump($request('name'));

      /*  $this->validate(request(),[
            'name' => 'required',
            'surname' => 'required',
            'spol' => 'required'

        ]);

        $talent = new User();
        $talent->name=$request['name'];
        $talent->surname=$request['prezime'];
        $talent->spol=$request['spol'];
        $talent->$request->input('role_id','1');
        $talent->email=$request['email'];
        $talent->password=$request['password'];

        $talent -> save();

        return redirect()->route('home');*/

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $talent = User::findBySlugOrFail($slug);

        $kategorije = $talent->kategorije()->where('parent_id','=',0)->get();

        $podkategorije = $talent->kategorije()->where('parent_id','!=',0)->orderBy("id")->get();

      //  $inputs = $podkategorije->inputs()->get();

        $images = $talent->img_gallery()->get();

        $videos = $talent->vid_gallery()->get();

        return view('talent', compact('talent','kategorije','podkategorije','images','videos','inputs'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
