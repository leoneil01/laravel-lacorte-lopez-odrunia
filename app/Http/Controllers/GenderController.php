<?php

namespace App\Http\Controllers;

use App\Models\Gender;
use Illuminate\Http\Request;

class GenderController extends Controller
{
    /*
    Name of Function
    index
    show
    create
    store
    edit
    update
    delete
    destroy
    */

    public function index() {
        $genders = Gender::all(); // SELECT * FROM genders
        // return view('gender.index', ['genders' => $genders]); -> old method

        return view('gender.index', compact('genders'));
    }

    public function show() {

    }

    public function create() {

    }

    public function store() {

    }

    public function edit() {

    }

    public function update() {

    }

    public function delete() {

    }

    public function destroy() {

    }
}
