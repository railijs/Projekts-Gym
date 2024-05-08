<?php
namespace App\Http\Controllers;

use App\Models\Planner;
use Illuminate\Http\Request;

class PlannerController extends Controller
{
    public function index() {
        $planners = Planner::all();
        return view("index", ["planners" => $planners]);
    }       

    public function show($id) {
        $planner = Planner::find($id);
        return view("planners.show", ["planner" => $planner]);
    }

    public function create() {
        return view("planners.create");
    }

    public function store(Request $request) {
        $planner = new Planner();
        $planner->day = $request->day;
        $planner->exercise = $request->exercise;
        $planner->reps = $request->reps;
        $planner->sets = $request->sets;
        $planner->rest = $request->rest;
        $planner->save();
         return redirect("/");
    }
}