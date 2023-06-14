<?php

namespace App\Http\Controllers\Dashboard;

use App\Models\Plan;
use App\Models\Trip;
use App\Http\Controllers\Controller;
use App\Http\Requests\Dashboard\Plan\StoreRequest;
use App\Http\Requests\Dashboard\Plan\UpdateRequest;

class PlanController extends Controller
{
    public function index(Trip $trip)
    {
        $trip->load('plans');
        return view('dashboard.plan.index', compact('trip'));
    }

    public function create(Trip $trip)
    {
        return view('dashboard.plan.create', compact('trip'));
    }

    public function store(StoreRequest $request, Trip $trip)
    {
        $trip->plans()->create($request->validated());

        flash()->translate('ar')->addSuccess('تمت عملية الانشاء بنجاح');
        return redirect()->route('dashboard.trips.plan.index', $trip->id);
    }

    public function edit(Plan $plan)
    {
        return view('dashboard.plan.edit', compact('plan'));
    }

    public function update(Plan $plan, UpdateRequest $request)
    {
        $plan->update($request->validated());
        flash()->translate('ar')->addSuccess('تمت عملية التعديل بنجاح');
        return redirect()->route('dashboard.trips.plan.index', $plan->plantable_id);
    }

    public function destroy(Plan $plan)
    {
        $plan->delete();
        flash()->translate('ar')->addSuccess('تمت عملية الحذف بنجاح');
        return redirect()->route('dashboard.trips.plan.index', $plan->plantable_id);
    }
}
