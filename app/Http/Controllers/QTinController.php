<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QTinController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function showRegisterForm()
    {
        $days = range(1, 31);
        $months = range(1, 12);
        $years = range(1900, date('Y'));
        $genders = ['Nam', 'Nữ', 'Khác'];
        $hobbies = ['Đọc sách', 'Du lịch', 'Thể thao', 'Âm nhạc'];

        return view('auth.registerz', compact('days', 'months', 'years', 'genders', 'hobbies'));
    }

    public function showLoginForm()
    {
        return view('auth.loginz');
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
