<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customers;


class CustomersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Customers::all();
        return view('pages.index', [ 'customers' => $data ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'email' => 'required|email|unique:customers,email|max:255',
        ]);

        $customer = new Customers();

        $customer->name = $validatedData['name'];
        $customer->age = $validatedData['age'];
        $customer->email = $validatedData['email'];

        $customer->save();

        session()->flash('success', 'Customer created successfully.');
        return view('pages.add-customers');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = Customers::find($id);
        return view('pages.edit-customer',['customer' => $data]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $customer = Customers::findOrFail($id);

        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'age' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:customers,email,' . $id,
        ]);

        $customer->name = $validatedData['name'];
        $customer->age = $validatedData['age'];
        $customer->email = $validatedData['email'];

        $customer->save();

        session()->flash('success', 'Customer updated successfully.');
        return view('pages.edit-customer', ['customer' => $customer]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $customer = Customers::findOrFail($id);
        $customer->delete();
        session()->flash('success', 'Customer deleted successfully.');
        return redirect('/');
    }
}
