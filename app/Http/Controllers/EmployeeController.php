<?php

namespace App\Http\Controllers;

use App\Models\User;
use Validator;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    //
    public function employeeCreate(Request $request) {

        $id = $request->input('id');

        $initialValidator = Validator::make($request->all(),
        [
            'email' => "required|unique:users,email,{$id},id",
            'phone' => 'required|numeric',
            'date_of_birth' => 'date_format:Y-m-d|before:tomorrow',
            'iamge' => 'image|mimes:png,jpg',
        ]);

        if ($initialValidator->fails())
        {
            return response()->json(['error'=>$initialValidator->errors()], 406);
        }

        $input = $request->all();

        $profileImg = $request->file('image');
        $profile_name = rand() . '.' . $profileImg->getClientOriginalExtension();

        $profileImg->move(public_path('images/profiles'), $profile_name);
        $host = url('/');
        unset($input["image"]);
        $input +=  [
            'emp_img' => "/images/profiles/" . $profile_name,
        ];

        if($id == ""  || $id == "") {
            $user = User::create($input);
        } else {

            $user = User::find($id);
            $user->emp_id = $input['emp_id'];
            $user->emp_name = $input['emp_name'];
            $user->address = $input['address'];
            $user->phone = $input['phone'];
            $user->email = $input['email'];
            $user->date_of_birth = $input['date_of_birth'];
            $user->emp_img = $input['emp_img'];
            $user->save();

        }



        if(isset($user->id)) {
            return response()->json($user, 200);
        } else {
            return response()->json("Unknow error from server", 406);
        }


    }

    public function employeeList(Request $request) {

        $perPage = $request->input('perPage');
        $name = $request->input('name');

        $userData = User::select('*');


        if($name != "" || $name != null ) {
            $userData->where('users.emp_name', "Like" ,"%{$name}%");
        }

        $counts = $userData;
        $totalRecords = $counts->count();
        $resultData = $userData->paginate($perPage);

        // $resArr['result'] = $resultData;
        // $resArr['totalRecords'] = $totalRecords;
        // $resArr['status'] = "success";
        return response()->json($resultData, 200);
    }

    public function removeEmployee(Request $request) {

        $initialValidator = Validator::make($request->all(),
        [
            'id' => "required|exists:users,id",
        ]);

        if ($initialValidator->fails())
        {
            return response()->json(['error'=>$initialValidator->errors()], 406);
        }

        $id = $request->input('id');

        $user = User::find($id);
        $result = $user->delete();
        if(isset($result)) {

            return response()->json("User Delete Successfully", 200);

        } else {
            return response()->json("Unknow error from server", 406);
        }



        return "TEST";

    }
}
