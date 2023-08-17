<?php

namespace App\Http\Controllers;

use App\Models\Payment;
use App\Http\Requests\StorePaymentRequest;
use App\Http\Requests\UpdatePaymentRequest;
use App\Models\Entrollments;
use Illuminate\Contracts\View\View;

class PaymentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index():View
    {
        $payment =Payment::all();
        return view ('payments.index')->with('payments', $payment);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $payments=Entrollments::pluck('enroll_no','id');
        return view ('payments.create', compact('payments'));
        //return view('payments.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePaymentRequest $request)
    {
        $input = $request->all();
        Payment::create($input);
        return redirect('payments')->with('flash_message', 'Payments Addedd!');
    }

    /**
     * Display the specified resource.
     */
    public function show(String $id)
    {
        $payment = Payment::find($id);
        return view('payments.show')->with('payments', $payment);
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(String $id)
    {
        $payment =Payment::find($id);
        return view('payments.edit')->with('payments', $payment);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePaymentRequest $request, String $id)
    {
        $payment = Payment::find($id);
        $input = $request->all();
        $payment->update($input);
        return redirect('payments')->with('flash_message', 'Payment Updated!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(String $id)
    {
        Payment::destroy($id);
        return redirect('payments')->with('flash_message', 'Payment deleted!');
    }
}
