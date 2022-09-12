<?php
declare(strict_types=1);
namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Requests\UserRegisterPostRequest;
use App\Models\User as UserModel;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index()
    {
        return view('user.register');
    }
    
    
    public function register(UserRegisterPostRequest $request)
    {
        // validate済みのデータの取得
        $datum = $request->validated();
        $datum['password'] = Hash::make($datum['password']);
        
        $r = UserModel::create($datum);
        
        //登録成功
        $request->session()->flash('front.user_register_success', true);
        return redirect('/');
    }
}