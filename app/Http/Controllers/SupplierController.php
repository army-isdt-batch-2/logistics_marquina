<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;
use Redirect;

class SupplierController extends Controller
{
    protected $request;

    public function __construct(Request $request)
    {
        $this->request = $request;
    }
    public function index() 
    {
    return view('supplier.index')->with([
        'data' => Supplier::all()
    ]);    
    }

    public function add() 
    {
    return view('supplier.create');
    }
    public function save()
    {
         Supplier::create(
             $this->request->except('_token'));

        return Redirect::route('supplier');
    }

    public function update($id)
    {
       return view('supplier.update')->with([
           'data' => Supplier::find($id)
       ]);
    }

    public function update_save($id)
    {
        Supplier::find($id)->update(
            $this->request->except('_token'));

       return Redirect::route('supplier');
    }
}
