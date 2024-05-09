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
        $planner->reps = $request->reps;
        $planner->sets = $request->sets;
        $planner->rest = $request->rest;
    
        
        $exercises = $request->input('exercise');
        if (is_array($exercises)) {
            $planner->exercise = implode(', ', $exercises);
        } else {
            $planner->exercise = $exercises;
        }
    
        $planner->save();
        
        return redirect("/index");
    }

    public function edit($id) {
        $planner = Planner::find($id);
        if (!$planner) {
            return redirect("/edit/{$id}")->with('error', 'Planner not found');
        }
        return view("planners.edit", ["planner" => $planner]);
    }

    public function update(Request $request, $id) {
        $planner = Planner::find($id);

        $request->validate([
            "day" => ["required"],
            "exercise" => ["required", "min:2", "max:50"],
            "reps" => ["required", "numeric"],
            "sets" => ["required", "numeric"],
            "rest" => ["required", "numeric"]
        ]);

        $planner->day = $request->day;
        $planner->exercise = $request->exercise;
        $planner->reps = $request->reps;
        $planner->sets = $request->sets;
        $planner->rest = $request->rest;;

        $planner->save();

        return redirect("/show/{$id}");
    }

    public function destroy($id) {
        $planner = Planner::find($id);
        $planner->delete();
        return redirect("/index");
    }
}