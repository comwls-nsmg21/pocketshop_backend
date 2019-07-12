<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Mockery\Exception;
use Route;
use App\Customers as Customers;
use Log as Log;

class CustomersController extends Controller
{
    var $data;

    public function __construct()
    {
        $this->data = [];
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = [];
        $data['list'] = Customers::paginate(20);
        return view('customer.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id = null)
    {
        $params['id'] = $id;
        try {

            if (empty($params['id']) and !is_numeric($params['id'])) {
                Log::error(" - validation fail - " . json_encode($params));
                throw new Exception();
            }

            $this->data['info'] = Customers::find($id);
            if (empty($this->data['info'])) {
                Log::error(" - data is empty - " . json_encode(\DB::getQueryLog()));
                throw new \Exception("데이터가 없습니다.");
            }


            return view('customer.show', $this->data);
        } catch (Exception $err) {

        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $validateData = $request->validate([
            'name' => 'required|string',
            'email' => 'required|string|email',
            'password' => '',
            'phone' => 'required|string',
            'postcode' => 'required',
            'address1' => 'required|string',
            'address2' => 'required|string',

        ]);


        if (!empty($validateData['password'])) {
            $validateData['password'] = Hash::make($validateData['password']);
        } else {
            unset($validateData['password']);
        }

        Customers::whereId($id)->update($validateData);
        redirect('/customers/' . $id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
