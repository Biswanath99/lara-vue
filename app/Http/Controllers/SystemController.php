<?php
namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

    class SystemController extends Controller
    {
        /**
         * Create a new controller instance.
         *
         * @return void
         */
        

        /**
         * Show the application dashboard.
         *
         * @return \Illuminate\Contracts\Support\Renderable
         */

        //Colony

        public function addUser()
        {
            return view('users.addUser');
        }

        public function manageUsers()
        {
            return view('users.manageUsers');
        }

    }
