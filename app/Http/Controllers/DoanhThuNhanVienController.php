<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\DoanhThuNhanVien;
use Illuminate\Support\Facades\DB;
class DoanhThuNhanVienController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $doanhThuNhanVien=DoanhThuNhanVien::all();

        $doanhThuNhanVien = DB::select('select * from view_DoanhThuNhanVien order by tongdoanhthu desc');
        
        return view('thongke.doanhThuNhanVien',compact('doanhThuNhanVien'));
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
