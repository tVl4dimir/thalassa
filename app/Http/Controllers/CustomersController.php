<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomersController extends Controller
{   

    public function dashboard()
    {
        return view('dashboard');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //$customers = Customer::all();
        $customers = Customer::latest()->get();
        return view('customers.index', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('customers.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
        //validation
        $this->validate(request(), [

            'name' => 'bail|required|max:40',
            'surname' => 'required|max:40',
            'telephone' => 'max:10',
            'mobile' => 'max:10',
            'email' => 'email|required|unique:customers|max:40',
            'city' => 'max:40',
            'location' => 'max:40',
            'road' => 'max:40',
            'roadNumber' => 'max:5',
            'postalCode' => 'max:5',
            'infos' => 'max:255'
            ]);

        $customer = new Customer;
        
        /*Customer::create([
            'name' => request('name');
            'surname' => request('surname');
            'telephone' => request('telephone');
            'mobile' => request('mobile');
            'email' => request('email');
            'city' => request('city');
            'location' => request('location');
            'road' => request('road');
            'roadNumber' => request('roadNumber');
            'postalCode' => request('postalCode');
            'infos' => request('infos');
            ])*/
        
        $customer->name = request('name');
        $customer->surname = request('surname');
        $customer->telephone = request('telephone');
        $customer->mobile = request('mobile');
        $customer->email = request('email');
        $customer->city = request('city');
        $customer->location = request('location');
        $customer->road = request('road');
        $customer->roadNumber = request('roadNumber');
        $customer->postalCode = request('postalCode');
        $customer->infos = request('infos');
        

        $customer->save();
        //$message = 'There was an error';

        //if ($customer->save()){
            //$message = 'Post successfully created!';
        //}
        
        return redirect('/customers');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Customer $customer)
    {

        return view('customers.show', compact('customer'));
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
