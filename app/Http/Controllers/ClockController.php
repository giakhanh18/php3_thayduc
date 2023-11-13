<?php

namespace App\Http\Controllers;

use App\Models\Clock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ClockController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    const PATH_VIEW = 'clocks.';
    const PATH_UPLOAD = 'clocks';
    public function index()
    {
        $data = Clock::query()->latest('id')->paginate(5);

        return view(self::PATH_VIEW . __FUNCTION__, compact('data'));
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
        $data = $request->except(['image']);

        if ($request->hasFile('image')) {
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }

        Clock::query()->create($data);

        return back()->with('msg', 'Thao tác thành công');
    }

    /**
     * Display the specified resource.
     */
    public function show(Clock $clock)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('clock'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Clock $clock)
    {
        return view(self::PATH_VIEW . __FUNCTION__, compact('clock'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Clock $clock)
    {
        $data = $request->except(['image']);

        if ($request->hasFile('image')) {
            $data['image'] = Storage::put(self::PATH_UPLOAD, $request->file('image'));
        }

        $oldPathImg = $clock->image;

        $clock->update($data);

        if ($request->hasFile('image')) {
            Storage::delete($oldPathImg);
        }

        return back()->with('msg', 'Thao tác thành công');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Clock $clock)
    {
        $clock->delete();

        if (Storage::exists($clock->image)) {
            Storage::delete($clock->image);
        }

        return back()->with('msg', 'Thao tác thành công');
    }
}
