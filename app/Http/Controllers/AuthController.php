<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
// use Illuminate\Http\Request;
// use Illuminate\Support\Facades\Auth;

use App\Models\User;
use App\Models\Role;
use Illuminate\Auth\Events\Login;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function login()
    {
        return view('login');
    }
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            var_dump('1');
            die();
            $request->session()->regenerate();
            return redirect()->intended('kelas');
            // $request->session()->regenerate();
            // return redirect()->intended('kelas');
        }

        // Session::flash('login', 'fail');
        // Session::flash('error', 'Login gagal, silahkan coba lagi');

        // return redirect('login');
    }

    // public function authenticate(Request $request)
    // {

    //     $request->validate([
    //         'email' => 'required',
    //         'password' => 'required'
    //     ], [
    //         'email.required' => 'email wajib diisi',
    //         'password.required' => 'password wajib diisi',
    //     ]);

    //     $email = $request->email;
    //     $password = $request->password;

    //     // var_dump($email, $password);
    //     $data = DB::table('users')
    //         ->select('email', 'password')
    //         ->where('email', $email)
    //         ->orWhere('password', $password)
    //         ->get();

    //     // dd($data);

    //     if ($email = $data[0]->email && $password = $data[0]->password) {

    //         $request->session()->put('user', 'adnan');
    //         return view('mahasiswa', ['data' => $data]);
    //     } else {
    //         var_dump('0');
    //     }

    //     // if($email = )

    //     // var_dump($data[0]->email);
    //     // if (Auth::attempt($user)) {
    //     //     return "1";
    //     // } else {
    //     //     return "0";
    //     // }
    // }

    // Session::flash('login', 'fail');
    // Session::flash('error', 'Login gagal, silahkan coba lagi');

    public function destroy(Request $request)
    {
        $request->session()->forget('user');
        // echo "Data telah dihapus dari session.";
        echo "modar";
        // return redirect('login');
    }
}
