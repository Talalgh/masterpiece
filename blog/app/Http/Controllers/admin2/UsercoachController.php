<?php

namespace App\Http\Controllers\admin2;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Subscrib;
// use App\Models\Subcribtion;
use Illuminate\Support\Facades\DB;

class UsercoachController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $coachId = auth()->user()->coach->id;

        $subscriptions = DB::table('subscriptions')
        ->join('subscribs', 'subscriptions.id', '=', 'subscribs.subscriptions_id')
        ->join('users', 'subscribs.user_id', '=', 'users.id')
        ->where('subscriptions.coach_id', $coachId)
        ->select('subscriptions.*', 'subscribs.*', 'users.*')
        ->get();
        return view('admin_coach.table_user', compact('subscriptions'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request, string $id)
    {
        $subscription = Subscrib::find($id);

        if (!$subscription) {
            return redirect()->back()->with('error', 'Subscription not found.');
        }

        $subscription->delete();

        return redirect()->back()->with('success', 'Subscription deleted successfully.');
    }
}
