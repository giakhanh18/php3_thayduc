<?php

namespace App\Http\Controllers;

use App\Models\Khanh1;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class Khanh1Controller extends Controller
{
    const PATH_VIEW ='khanh1s.';
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // $khanh1s = Khanh1::all();
        $data=Khanh1::query()->paginate();
        return view(self::PATH_VIEW.__FUNCTION__,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view(self::PATH_VIEW.__FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // $request->validate([
        //     'title' => 'required',
        //     'image' => 'required',
        //     'descrip'=>'required',   
        // ]);
  
        Khanh1::query()->create($request->all());
        return back()->with('msg','Thêm oke');
        // return view(self::PATH_VIEW.__FUNCTION__);
    }

    /**
     * Display the specified resource.
     */
    public function show(Khanh1 $khanh1)
    {
        //
        return view(self::PATH_VIEW.__FUNCTION__,compact('khanh1s'));    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Khanh1 $khanh1)
    {
        //
        return view(self::PATH_VIEW.__FUNCTION__,compact('khanh1s'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Khanh1 $khanh1)
    {
        $khanh1->update($request->all());
        return back()->with('msg','Sửa oke');
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Khanh1 $khanh1)
    {
        $khanh1->update();
        return back()->with('msg','Xóa  oke');
    }
}
