<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\UsersModel\Users;
use App\AddressModel\Address;
use DB;

class UsersController extends Controller
{

    // Add an user 
    public function addUser(Request $request)
    {
        DB::beginTransaction();
		try{

                //Input field validation
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

                $addAddress = new Address;
                $addAddress->address = $request->address;
                $addAddress->save();

                $addUser = new Users;
                $addUser->userId    = 'USR-' . str_pad($presentId, 5, "0", STR_PAD_LEFT);
                $addUser->name      = $request->name;
                $addUser->email     = $request->email;
                $addUser->addressId = $addAddress->id;
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
    
    //Get all users
    public function getAllUsers()
    {
        $getData = Users::with('get_address')->orderBy('id','DESC')->get()->toJson();
        return $getData;
    }

    //Get an user
    public function getAUser($userId)
    {
        $getData = Users::with('get_address')->where('userId',$userId)->get();
        return $getData;
    }

    //Update an user
    public function updateUser($userId,Request $request)
    {
        DB::beginTransaction();
		try{
                //Input field validation
                $request->validate([
                    'name'       => ['required'],
                    'email'      => ['required'],
                    'address'    => ['required']
                ]);

                $findUser    = Users::where('userId',$userId)->first();
                $findAddress = Address::where('id',$findUser->addressId)->first();

                $findAddress->address = $request->address;
                $findAddress->update();

                $findUser->name      = $request->name;
                $findUser->email     = $request->email;
                $findUser->addressId = $findAddress->id;
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

    //Delete an user

    public function delUser($userId)
    {
        DB::beginTransaction();
		try{
                $findUser    = Users::where('userId',$userId)->first();
                $findAddress = Address::where('id',$findUser->addressId)->first();
                $findAddress->delete();
                if($findAddress){
                    $findUser->delete();
                }

                DB::commit();
                return array('success' => true, 'msg'=>['User Deleted']);
            }catch(Exception $e)
            {
                $data = $e->getMessage();
                DB::rollback();
                return array('success' => false, 'msg'=>[$data]);
            }
    }

    //Filter user
    public function filterData(Request $request)
    {
        $name  = $request->name;
        $email = $request->email;

        if(empty($name) && empty($email))
        {
            return Users::with('get_address')->orderBy('id','DESC')->get()->toJson();
        }
        else
        {
            $filter = Users::with('get_address')->where('name' ,'LIKE',"%$name%")
                           ->where('email','LIKE',"%$email%")
                           ->orderBy('id','DESC')
                           ->get();
            return $filter;
        }
    }
}
