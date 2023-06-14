<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Team;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Team\StoreRequest;
use App\Http\Requests\Dashboard\Team\UpdateRequest;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $teams = Team::get();
        return view('dashboard.team.index', compact('teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        $team = Team::create($request->validated());
        $team->addMedia($request->image)->toMediaCollection('default');

        flash()->translate('ar')->addSuccess('تمت عملية النشاء بنجاح');
        return redirect()->route('dashboard.teams.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function show(Team $team)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function edit(Team $team)
    {
        return view('dashboard.team.edit', compact('team'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateRequest $request, Team $team)
    {
        $team->update($request->validated());
        if ($request->image)
            $team->addMedia($request->image)->toMediaCollection('default');

        flash()->translate('ar')->addSuccess('تمت عملية التعديل بنجاح');
        return redirect()->route('dashboard.teams.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Team  $team
     * @return \Illuminate\Http\Response
     */
    public function destroy(Team $team)
    {
        $team->delete();
        flash()->translate('ar')->addSuccess('تمت عملية الحذف بنجاح');
        return redirect()->route('dashboard.teams.index');
    }
}
