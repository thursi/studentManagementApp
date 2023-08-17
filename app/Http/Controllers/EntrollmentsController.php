<?php

namespace App\Http\Controllers;

use App\Models\Entrollments;
use App\Http\Requests\StoreEntrollmentsRequest;
use App\Http\Requests\UpdateEntrollmentsRequest;
use App\Models\Batches;
use App\Models\Student;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\Redirect;

class EntrollmentsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $entrollments = Entrollments::all();
        return view ('entrolments.index')->with('entrolments', $entrollments);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $batches=Batches::pluck('name','id');
        $students=Student::pluck('name','id');
        return view ('entrolments.create', compact('batches','students'));
        //return view('entrolments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreEntrollmentsRequest $request)
    {
        $input = $request->all();
        Entrollments::create($input);
        return redirect('entrolments')->with('flash_message', 'Entrollment Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $entrollments = Entrollments::find($id);
        return view('entrolments.show')->with('entrolments', $entrollments);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $entrollments = Entrollments::find($id);
        return view('entrolments.edit')->with('entrolments', $entrollments);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEntrollmentsRequest $request, String $id)
    {
        $entrollments = Entrollments::find($id);
        $input = $request->all();
        $entrollments->update($input);
        return redirect('entrolments')->with('flash_message', 'Entrollments Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Entrollments::destroy($id);
        return redirect('entrolments')->with('flash_message', 'Entrollments deleted!');
    }
}
