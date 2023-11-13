<?php

namespace App\Http\Controllers;

use App\Models\People;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PeopleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW='peoples.';
    const PATH_UPLOAD='peoples';
    public function index()
    {
        $data=People::query()->latest('id')->paginate(5);

        return view(self::PATH_VIEW . __FUNCTION__,compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view(self::PATH_VIEW . __FUNCTION__);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data =$request->except(['image']);

        if($request->hasFile('image')){
            $data['image']=Storage::put(self::PATH_UPLOAD,$request->file('image'));
        }

        People::query()->create($data);

        return back()->with('msg','oke');
    }

    /**
     * Display the specified resource.
     */
    public function show(People $people)
    {
        return view(self::PATH_VIEW . __FUNCTION__,compact('people'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(People $people)
    {
        return view(self::PATH_VIEW . __FUNCTION__,compact('people'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, People $people)
    {
        $data =$request->except(['image']);

        if($request->hasFile('image')){
            $data['image']=Storage::put(self::PATH_UPLOAD,$request->file('image'));
        }

        $oldPathImg=$people->image;

        $people ->update();

        if($request->hasFile('image')){
            Storage::delete($oldPathImg);
        }

        return back()->with('msg','oke');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(People $people)
    {
        $people->delete();

        if(Storage::exists($people->image)){
            Storage::delete($people->image);
        }

        return back()->with('msg','oke');
    }

    
}
