<?php

namespace App\Http\Controllers\BasicInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\BasicInfo\EquipmentRequest;
use App\Http\Resources\BasicInfo\EquipmentResource;
use App\Models\BasicInfo\Equipment;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class EquipmentController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', Equipment::class);

        return EquipmentResource::collection(Equipment::all());
    }

    public function store(EquipmentRequest $request)
    {
        $this->authorize('create', Equipment::class);

        return new EquipmentResource(Equipment::create($request->validated()));
    }

    public function show(Equipment $equipment)
    {
        $this->authorize('view', $equipment);

        return new EquipmentResource($equipment);
    }

    public function update(EquipmentRequest $request, Equipment $equipment)
    {
        $this->authorize('update', $equipment);

        $equipment->update($request->validated());

        return new EquipmentResource($equipment);
    }

    public function destroy(Equipment $equipment)
    {
        $this->authorize('delete', $equipment);

        $equipment->delete();

        return response()->json();
    }
}
