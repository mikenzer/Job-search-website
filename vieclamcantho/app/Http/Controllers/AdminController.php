<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Login;
use Session;
use Illuminate\Support\Facades\Redirect;
session_start();

class AdminController extends Controller
{
    public function index(){
        echo view('admin_login');
    }
    public function show_dashboard(){
        
        return view('admin.dashboard');
    }
    public function dashboard(Request $request){
        $this->validate($request,[
            'admin_email' => 'required|email|max:255', 
            'admin_password' => 'required|max:255'  
        ]);
        // $data = $request->all();
        // if(Auth::attempt([ 'admin_email' => $request->admin_email, 'admin_password' => $request->admin_password])){
        //     return redirect('/dashboard');
        // }else{
        //     return redirect('/admin')->with('message','Tài khoản hoặc mật khẩu không chính xác');
        // }
        $data = $request->all();

         $data = $request->validate([
            //validation laravel
            'admin_email' => 'required',
            'admin_password' => 'required',
            
           
        ]);

        $admin_email = $data['admin_email'];
        $admin_password = md5($data['admin_password']);
        $login = Login::where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        
        if($login){
            $login_count = $login->count();
            if($login_count >= 0){
                Session::put('admin_name', $login->admin_name);
                Session::put('admin_id', $login->admin_id);
                return Redirect::to('/dashboard');
            }     
        }else{
                Session::put('message', 'Sai mật khẩu hoặc tài khoản. Mời bạn nhập lại!');
                return Redirect::to('/admin');
            } 
        $admin_email = $request->admin_email;
        $admin_password = md5($request->admin_password);

        $result = DB::table('tbl_admin')->where('admin_email', $admin_email)->where('admin_password', $admin_password)->first();
        if($result){
            Session::put('admin_name', $result->admin_name);
            Session::put('admin_id', $result->admin_id);
            return Redirect::to('/dashboard');
        }else{
            Session::put('message', 'Sai mật khẩu hoặc tài khoản. Mời bạn nhập lại!');
            return Redirect::to('/admin');
        }
    }
    public function logout(Request $request){
        $this->authLogin();
        Session::put('admin_name', null);
        Session::put('admin_id', null);
        return Redirect::to('admin');
    }
}
