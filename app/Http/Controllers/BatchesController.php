<?php

namespace App\Http\Controllers;

use App\Models\Batches;
use App\Http\Requests\StoreBatchesRequest;
use App\Http\Requests\UpdateBatchesRequest;
use App\Models\Courses;
use GuzzleHttp\Psr7\Request;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request as HttpRequest;
use Illuminate\Support\Facades\Redirect;

class BatchesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $batches = Batches::all();
        return view ('batches.index')->with('batches', $batches);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create():View
    {
       $courses=Courses::pluck('name','id');
       return view ('batches.create', compact('courses'));
        //return view('batches.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreBatchesRequest $request)
    {
        $input = $request->all();
        Batches::create($input);
        return redirect('batches')->with('flash_message', 'Batches Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $batches = Batches::find($id);
        return view('batches.show')->with('batches', $batches);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $batches = Batches::find($id);
        return view('batches.edit')->with('batches', $batches);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBatchesRequest $request, String $id)
    {
        $batches = Batches::find($id);
        $input = $request->all();
        $batches->update($input);
        return redirect('batches')->with('flash_message', 'batches Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Batches::destroy($id);
        return redirect('batches')->with('flash_message', 'Batches deleted!');
    }
}
