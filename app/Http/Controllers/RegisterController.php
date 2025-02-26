<?php

namespace App\Http\Controllers;

use App\Models\Hackathon;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function index()
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
                $session_id_user = session()->put('',[]);
                dump($session_id_user);
                dd(session('user_id'));

//                session id = id user
            }
            else {
//                register id redirect login
            }
        }else{
//            Password!=
        }

    }
}
