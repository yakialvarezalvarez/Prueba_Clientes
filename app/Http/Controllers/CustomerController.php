<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;
use App\Models\Commune;
use Carbon\Carbon;

class CustomerController extends Controller
{
    public function index(Request $request)
    {
        $filt = $request->input('filt');
        if(isset($filt)){
            if (is_numeric($filt)) {
                $customers = Customer::where('status', 'A')
                                     ->where('id', $filt)
                ->get();
                return view('/customers.index', ['customers' => $customers]);
            }else{
                $customers = Customer::where('status', 'A')
                                     ->where('email', 'like', "%$filt%")
                ->get();
                return view('/customers.index', ['customers' => $customers]);
            }
        }
        $customers = Customer::where('status', 'A')->get();
        
        return view('/customers.index', ['customers' => $customers]);

        
      

        //return view('/customers.index', ['customers' => $customers]);
    }

    public function create()
    {
        
        $communes = Commune::all();
        return view('customers/create', compact('communes'));
    }

    public function store(Request $request)
    {
        $customer = new Customer();
        $customer->email = $request->input('email');
        $customer->name = $request->input('name');
        $customer->last_name = $request->input('last_name');
        $customer->address = $request->input('address');
        $customer->status = 'A';
        $customer->commune_id = $request->input('commune_id'); 
        $customer->date_reg = Carbon::now();
        $customer->created_at = Carbon::now();
        $customer->updated_at = Carbon::now();
        $customer->save();
       
        $customers = Customer::where('status', 'A')->get();
        return view('/customers.index', ['customers' => $customers])->with('success', 'Customer creado correctamente');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
        
    }

    public function update($id)
    {
        $customer = Customer::find($id);
        $customer->status = 'trash';
        $customer->save();
        $allcustomers = Customer::where('status', 'A')->get();
        return view('/customers.index', [
            'customers' => $allcustomers
        ])->with('success', 'Customer eliminado correctamente');
    }

    public function destroy($id)
    {
        
    }
}
