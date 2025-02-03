<?php

namespace App\Http\Controllers\BasicInfo;

use App\Http\Controllers\Controller;
use App\Http\Requests\BasicInfo\CostCenterRequest;
use App\Http\Resources\BasicInfo\CostCenterResource;
use App\Models\BasicInfo\CostCenter;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class CostCenterController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('viewAny', CostCenter::class);

        return CostCenterResource::collection(CostCenter::all());
    }

    public function store(CostCenterRequest $request)
    {
        $this->authorize('create', CostCenter::class);

        return new CostCenterResource(CostCenter::create($request->validated()));
    }

    public function show(CostCenter $costCenter)
    {
        $this->authorize('view', $costCenter);

        return new CostCenterResource($costCenter);
    }

    public function update(CostCenterRequest $request, CostCenter $costCenter)
    {
        $this->authorize('update', $costCenter);

        $costCenter->update($request->validated());

        return new CostCenterResource($costCenter);
    }

    public function destroy(CostCenter $costCenter)
    {
        $this->authorize('delete', $costCenter);

        $costCenter->delete();

        return response()->json();
    }
}
