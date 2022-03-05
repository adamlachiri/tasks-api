<?php

namespace App\Http\Controllers;

use App\Models\Group;
use Illuminate\Http\Request;

class GroupController extends Controller
{

    public function index()
    {
        return Group::all();
    }


    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        // validation
        $rules = [
            "name" => ["required", "unique:groups", "max:255"],
            "isDaily" => ["required", "boolean"]
        ];
        $validated = $request->validate($rules);

        // storing
        Group::create($validated);
    }


    public function show(Group $group)
    {
        //
    }


    public function edit(Group $group)
    {
        //
    }


    public function update(Request $request, Group $group)
    {
        //
    }

    public function destroy(Group $group)
    {
        //
    }
}
