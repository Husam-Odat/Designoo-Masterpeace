<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Support\Facades\Hash;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $admins = Admin::all();
        return view('Dash.admin', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Dash.add_admin');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            // 'username' => ['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'name' => ['required', 'max:30', 'regex:/^[a-zA-Z\s]+$/'],
            'email' => 'required|email|unique:admins',
            // 'password' => [
            //     'required',
            //     'min:8',
            //     'regex:/^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[@$!%*?&])[A-Za-z\d@$!%*?&]+$/'
            // ]
        ]);

        $input = $request->all();
        Admin::create([
            // 'username' => $request->username,
            'name' => $request->name,
            'lastName' => $request->lastName,
            'phone' => $request->phone,
            'email' => $request->email,
            'password' => Hash::make($request->password) // Hash the password

        ]);

        return redirect()->route('admin.index')
        ->with('success', 'New admin added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    // public function destroy(Admin $admin)
    public function destroy($id)
    {
        Admin::destroy($id);
        return redirect()->route('admin.index')->with(['deleted' => 'Admin deleted successfully
        ']);
    }
}
