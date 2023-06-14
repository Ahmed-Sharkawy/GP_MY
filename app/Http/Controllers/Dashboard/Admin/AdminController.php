<?php

namespace App\Http\Controllers\Dashboard\Admin;

use App\Models\Admin;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Admin\StoreAdminRequest;
use App\Http\Requests\Dashboard\Admin\UpdateAdminRequest;
use Illuminate\Support\Facades\Hash;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admin::get();
        return view('dashboard.admin.index', compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.admin.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreAdminRequest $request)
    {
        Admin::create($request->validated());

        flash()->translate('ar')->addSuccess('تمت عملية الانشاء بنجاح');
        return redirect()->route('dashboard.admins.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function edit(Admin $admin)
    {
        return view('dashboard.admin.edit', compact('admin'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAdminRequest  $request
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        $admin->update($request->validated());

        flash()->translate('ar')->addSuccess('تمت عملية التعديل بنجاح');
        return redirect()->route('dashboard.admins.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Admin  $admin
     * @return \Illuminate\Http\Response
     */
    public function destroy(Admin $admin)
    {
        $admin->delete();
        flash()->translate('ar')->addSuccess('تمت عملية الحذف بنجاح');
        return redirect()->route('dashboard.admins.index');
    }
}
