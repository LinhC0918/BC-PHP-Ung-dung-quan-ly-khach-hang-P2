<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){

        //tao mang khach hang
        $customers = [
            '0' => [
                'id'  => 1,
                'name'=> 'customer1',
                'bod' => '1998-09-01',
                'email' => 'customer1@gmail.com'
            ],

            '1' => [
                'id'  => 2,
                'name'=> 'customer2',
                'bod' => '1998-09-01',
                'email' => 'customer2@gmail.com'
            ],

            '2' => [
                'id'  => 3,
                'name'=> 'customer3',
                'bod' => '1998-09-01',
                'email' => 'customer3@gmail.com'
            ]
        ];

        //goi view va truyen du lieu sang view
        return view('list', compact('customers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        echo 'Hiển thị form tạo khách hàng mới';
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
//    public function store(Request $request)
//    {
//        //
//    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        echo 'Xem danh sách khách hàng';
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        echo 'Sửa đổi danh sách khách hàng';
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
//    public function update(Request $request, $id)
//    {
//        echo 'Thêm khách hàng mới';
//    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy()
    {
        return 2;
    }
}
