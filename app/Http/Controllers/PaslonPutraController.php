<?php

namespace App\Http\Controllers;

use App\Models\PaslonPutra;
use App\Models\VoteCount;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class PaslonPutraController extends Controller
{
    public function index(Request $request)
    {
        $data = DB::table('paslon_putras')
                ->orderBy('count_vote')
                ->get();

        return response()->json($data);
    }

    public function show(PaslonPutra $paslonPutra)
    {
        return response()->json($paslonPutra);
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required|string',
            'count_vote' => 'required|integer',
        ]);

        $paslon = PaslonPutra::create($request->all());
        $countPaslon = VoteCount::find(1);
        $countPaslon->count_vote_men += $paslon->count_vote;
        $countPaslon->save();
        return response()->json(['data' => $paslon,
                                'message' => "New Data has been store"]);
    }

    public function update(Request $request, PaslonPutra $paslonPutra)
    {
        $request->validate([
            'name' => 'required|string',
            'count_vote' => 'required|integer',
        ]);

        $selisih = $request->count_vote - $paslonPutra->count_vote;
        $paslonPutra->name = $request->name;
        $paslonPutra->count_vote = $request->count_vote;
        $paslonPutra->save();
        $countPaslon = VoteCount::find(1);
        $countPaslon->count_vote_men += $selisih;
        $countPaslon->save();
        return response()->json(['data' => $paslonPutra,
                                'message' => 'Count vote men now is '. $countPaslon->count_vote_men]);
    }

    public function destroy(PaslonPutra $paslonPutra)
    {
        $paslonPutra->delete();
        return response()->json(['message' => 'paslon putra has been deleted']);
    }
}
