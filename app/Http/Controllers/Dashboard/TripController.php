<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Trip;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Trip\StoreTripRequest;
use App\Http\Requests\Dashboard\Trip\UpdateTripRequest;
use App\Http\Requests\Dashboard\Trip\StorePlanTripRequest;

class TripController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trips = Trip::get();
        return view('dashboard.trip.index', compact('trips'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.trip.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTripRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTripRequest $request)
    {
        $trip = Trip::create($request->validated());
        $trip->addMedia($request->image)->toMediaCollection('default');

        return redirect()->route('dashboard.trips.index');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function edit(Trip $trip)
    {
        return view('dashboard.trip.edit', compact('trip'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateTripRequest  $request
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTripRequest $request, Trip $trip)
    {
        $trip->update($request->validated());
        if ($request->image)
            $trip->addMedia($request->image)->toMediaCollection();

        return redirect()->route('dashboard.trips.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function destroy(Trip $trip)
    {
        $trip->delete();
        return redirect()->route('dashboard.trips.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Trip  $trip
     * @return \Illuminate\Http\Response
     */
    public function plan(Trip $trip)
    {
        return view('dashboard.plan.create', compact('trip'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreTripRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function planStore(StorePlanTripRequest $request, Trip $trip)
    {
        $trip->plans()->create($request->validated());
        return redirect()->route('dashboard.trips.index');
    }
}
