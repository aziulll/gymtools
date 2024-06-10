<?php

namespace App\Http\Controllers;

use App\DTOs\PersonalDTO;
use App\Services\PersonalService;
use Illuminate\Http\Request;

class PersonalController extends Controller
{
    protected $personalService;

    public function __construct(PersonalService $personalService)
    {
        $this->personalService = $personalService;
    }

    public function show($id)
    {

        $personal = $this->personalService->read($id);
        return response()->json($personal);
    }

    public function update(Request $request, $id)
    {
        $personalDTO = new PersonalDTO($request->all());
        $personal = $this->personalService->update($id, $personalDTO);
        return response()->json($personal);
    }

    public function destroy($id)
    {
        $deleted = $this->personalService->delete($id);
        return response()->json(['deleted' => $deleted]);
    }
}
