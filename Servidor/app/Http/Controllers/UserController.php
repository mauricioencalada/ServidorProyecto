<?php
namespace App\Http\Controllers;
use App\User;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class UserController extends Controller
{
    public function getUser(Request $request){
        $user = User::get();
        return response()->json($user, 200);
    }
    public function postUser(Request $request){
        $data = $request->json()->all();
        $user = User::create([
            'name'=> $data['name'],
            'user_name'=> $data['user_name'],
            'email'=> $data['email'],
            'password'=> $data['password'],
            'state'=> $data['state'],
        ]);
        return response()->json($user, 201);
    }
    public function putUser(Request $request){
        $data = $request->json()->all();
        $user = User::findOrFail($data['id']);
        $response = $user->update([
            'name'=> $data['name'],
            'user_name'=> $data['user_name'],
            'email'=> $data['email'],
            'password'=> $data['password'],
            'state'=> $data['state'],
        ]);
        return response()->json($user, 201);
    }
    public function deleteUser(Request $request){
        $data = $request->json()->all();
        $user = User::findOrFail($data['id']);
        $response = $user->delete();
        return response()->json($user, 201);
    }
}
