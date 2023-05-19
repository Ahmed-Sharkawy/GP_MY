<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Hotel;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Hotel\StoreHotelRequest;
use App\Http\Requests\Dashboard\Hotel\UpdateHotelRequest;

class HotelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $hotels = Hotel::get();
        return view('dashboard.hotel.index', compact('hotels'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dashboard.hotel.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreHotelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreHotelRequest $request)
    {
        $hotel = Hotel::create($request->validated());
        $hotel->addMedia($request->image)->toMediaCollection();

        return redirect()->route('dashboard.hotels.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function show(Hotel $hotel)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function edit(Hotel $hotel)
    {
        return view('dashboard.hotel.edit', compact('hotel'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateHotelRequest  $request
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateHotelRequest $request, Hotel $hotel)
    {
        $hotel->update($request->validated());
        if ($request->image)
            $hotel->addMedia($request->image)->toMediaCollection();

        return view('dashboard.hotel.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Hotel  $hotel
     * @return \Illuminate\Http\Response
     */
    public function destroy(Hotel $hotel)
    {
        dd($hotel);
    }
}
