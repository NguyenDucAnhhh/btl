<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoanhThuKhachHang;
use Illuminate\Support\Facades\DB;
class DoanhThuKhachHangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doanhThuKhachHang=DoanhThuKhachHang::all();

        $doanhThuKhachHang = DB::select('select * from view_doanhThuKhachHang order by tongdoanhthu desc');

        return view('thongke.doanhThuKhachHang',compact('doanhThuKhachHang'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
