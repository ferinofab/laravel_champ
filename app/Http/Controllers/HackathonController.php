<?php

namespace App\Http\Controllers;

use App\Models\Hackathon;
use Illuminate\Http\Request;

class HackathonController extends Controller
{
    public function index()
    {
        return view('hackathon.index');
    }

    public function create()
    {
        return view('hackathon.register');
    }

    public function store(Request $request)
    {
        if($request['rep_pas'] == $request['password']) {
            $validated = $request->validate(
                [
                    'number' => ['required'],
                    'name' => ['required'],
                    'password' => ['required']
                ]
            );

            $data = Hackathon::FirstOrCreate(
                ['number' => $validated['number']],
                $validated
            );

            if($data->wasRecentlyCreated) {
//                session id = id user
            }
            else {
//                register id redirect login
            }
        }

    }

//    wef

    public  function signIn()
    {
        return view('hackathon.signIn');
    }
}
