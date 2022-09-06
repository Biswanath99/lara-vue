<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersModel\Users;
use DB;

class UsersController extends Controller
{
    public function addUser(Request $request)
    {
        DB::beginTransaction();
		try{
                $request->validate([
                    'name'       => ['required'],
                    'email'      => ['required'],
                    'address'    => ['required']
                ]);

                $lastId = 0;
                $getId = Users::orderBy('id', 'DESC')->first();
                if(empty($getId))
                {
                    $lastId = 0;
                }else{
                    $lastId = intval(explode('-',$getId->userId)[1]);//"USR-00001";
                }
                $presentId = $lastId+1;

                $addUser = new Users;

                $addUser->userId  = 'USR-' . str_pad($presentId, 5, "0", STR_PAD_LEFT);
                $addUser->name    = $request->name;
                $addUser->email   = $request->email;
                $addUser->address = $request->address;
                $addUser->save();

                DB::commit();
                return array('success' => true, 'msg'=>['User Added']);
            }catch(Exception $e)
            {
                $data = $e->getMessage();
                DB::rollback();
                return array('success' => false, 'msg'=>[$data]);
            }
    }
    
    public function getAllUsers()
    {
        $getData = Users::orderBy('id','DESC')->get()->toJson();
        return $getData;
    }

    public function getAUser($userId)
    {
        $getData = Users::where('userId',$userId)->get();
        return $getData;
    }

    public function updateUser($userId,Request $request)
    {
        DB::beginTransaction();
		try{
                $request->validate([
                    'name'       => ['required'],
                    'email'      => ['required'],
                    'address'    => ['required']
                ]);

                $findUser = Users::where('userId',$userId)->first();
                
                $findUser->name    = $request->name;
                $findUser->email   = $request->email;
                $findUser->address = $request->address;
                $findUser->update();

                DB::commit();
                return array('success' => true, 'msg'=>['User Updated']);
            }catch(Exception $e)
            {
                $data = $e->getMessage();
                DB::rollback();
                return array('success' => false, 'msg'=>[$data]);
            }
    }

    public function delUser($userId)
    {
        DB::beginTransaction();
		try{
                Users::where('userId',$userId)->delete();
                DB::commit();
                return array('success' => true, 'msg'=>['User Deleted']);
            }catch(Exception $e)
            {
                $data = $e->getMessage();
                DB::rollback();
                return array('success' => false, 'msg'=>[$data]);
            }
    }

    public function filterData(Request $request)
    {
        $name  = $request->name;
        $email = $request->email;

        if(empty($name) && empty($email))
        {
            return Users::orderBy('id','DESC')->get()->toJson();
        }
        else
        {
            $filter = Users::where('name' ,'LIKE',"%$name%")
                           ->where('email','LIKE',"%$email%")
                           ->orderBy('id','DESC')
                           ->get();
            return $filter;
        }
    }
}
