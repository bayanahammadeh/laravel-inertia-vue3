<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Inertia\Inertia;

class CustomerController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return Inertia::render('index', compact('customers'));
    }

    public function create()
    {
        return Inertia::render('create');
    }

    public function edit(Customer $customer)
    {
        return Inertia::render('edit', compact('customer'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers',
            'phone' => 'required|unique:customers|max:14|min:10',
        ]);

        Customer::create($validated);

        return Redirect::route('customers.index')->with('message','Customer Created Successfully');
    }

    public function update(Customer $customer,Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|email|unique:customers,id,'.$customer->id,
            'phone' => 'required|max:14|min:10|unique:customers,id,'.$customer->id,
        ]);

        $customer->update($validated);

        return Redirect::route('customers.index')->with('message','Customer Updated Successfully');
    }

    public function destroy(Customer $customer)
    {
        $customer->delete();
        return Redirect::route('customers.index')->with('message','Customer Deleted Successfully');
    }
}
