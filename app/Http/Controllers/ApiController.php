<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CinemaAG;

class ApiController extends Controller
{
    public function AllCinema()
    {
        $cinema = CinemaAG::all();
        if (count($cinema) > 0) {
            return response()->json($cinema);
        } else {
            return response()->json(['message' => 'there is no appointment at the cinema']);
        }
    }

    public function CreateCinema(Request $request)
    {
        $cinema = CinemaAG::create($request->all());
        if ($cinema) {
            return response()->json(['message' => 'cinema created']);
        } else {
            return response()->json(['message' => 'cinema not created']);
        }
    }

    public function UpdateCinema(Request $request, $id)
    {

        $cinema = CinemaAG::find($id);
        if ($cinema) {
            $cinema->update($request->all());
            return response()->json($cinema, 200);
        } else {
            return response()->json(['message' => 'error updating movie schedule'], 404);
        }
    }

    public function IDCinema(Request $request, $id)
    {
        $cinema = CinemaAG::find($id);
        if ($cinema) {
            return response()->json($cinema, 200);
        } else {
            return response()->json(['message' => 'error updating movie schedule'], 404);
        }
    }

    public function DeleteCinema($id)
    {
        $cinema = CinemaAG::find($id);
        if ($cinema) {
            $cinema->delete();
            return response()->json(['message' => 'cinema deleted'], 200);
        } else {
            return response()->json(['message' => 'error deleting movie schedule'], 404);
        }
    }
}
