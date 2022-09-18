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

        // View All Users //
        public function manageUsers()
        {
            return view('users.manageUsers');
        }


        // Add User //
        public function addUser()
        {
            return view('users.addUser');
        }

        //File Upload

        public function fileUpload()
        {
            return view('fileUpload');
        }

        public function manageFiles()
        {
            return view('manageFiles');
        }

       
    }
