<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Showroom;
use Auth;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $id = Auth::user()->id;
        $cars = Showroom::where('user_id', $id)->get();
        // return view ('user.profile',['users'=> $users])
        // dd($cars);
        return view('myCar',['cars'=>$cars]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('addCar');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        $files = $request->file('img');
        $destinationPath = 'img/';
        $image = "car". Auth::user()->id . ".jpg";
        $pathImg = $files->storeAs('img', $image);
        $files->move($destinationPath, $image);
        $showroom= Showroom::create([
            'image'     => $pathImg,
            'user_id'     => Auth::user()->id,
            'name'   => $request->name,
            'owner'   => $request->owner,
            'brand'   => $request->brand,
            'description'   => $request->desc,
            'purchase_date'   => $request->date,
            'status'   => $request->status, 
        ]);
        return redirect ('/myCar')->with('success','Mobil baru berhasil ditambah!');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cars = Showroom::where('id', $id)->get();
        return view ('carDetails',['cars' => $cars]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $cars = Showroom::where('id', $id)->get();
        return view ('carUpdate',['cars' => $cars]);
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
        if($request->img == null){
            $cars = Showroom::where('id', $id)
                ->update([
                    'user_id'     => Auth::user()->id,
                    'name'   => $request->name,
                    'owner'   => $request->owner,
                    'brand'   => $request->brand,
                    'description'   => $request->desc,
                    'purchase_date'   => $request->date,
                    'status'   => $request->status,
                ]);
        }
        else{
            $files = $request->file('img');
            $destinationPath = 'img/';
            $image = "car". Auth::user()->id . ".jpg";
            $pathImg = $files->storeAs('img', $image);
            $files->move($destinationPath, $image);
            $cars = Showroom::where('id', $id)
                ->update([
                    'image'     => $pathImg,
                    'user_id'     => Auth::user()->id,
                    'name'   => $request->name,
                    'owner'   => $request->owner,
                    'brand'   => $request->brand,
                    'description'   => $request->desc,
                    'purchase_date'   => $request->date,
                    'status'   => $request->status,
                ]);
        }
            return redirect('/myCar')->with('success','Data Berhasil Diperbarui!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $cars=Showroom::where('id',$id)->delete();
        return redirect('/myCar')->with('success','Data Berhasil Diperbarui!');
    }
}
