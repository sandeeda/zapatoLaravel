<?php
namespace App\Http\Controllers;
use App\Models\products;
use Illuminate\Http\Request;
use Hash;
use Session;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CustomAuthController extends Controller
{
    public function index()
    {
        //dd("Hellllo");
        return view('auth.login');
    }

    public function customLogin(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
//            return redirect()->intended('dashboard')
//                ->withSuccess('Signed in');
            $listOfproducts = products::all();
            //return redirect("dashboard",['products'=>$listOfproducts])->withSuccess('You have signed-in');
            //return redirect()->back()->with('products',$listOfproducts);
            return redirect('dashboard')->with('products',$listOfproducts)->withSuccess('Signed In');        }

        return redirect("login")->withSuccess('Login details are not valid');
    }

    public function registration()
    {
        return view('auth.registration');
    }

    public function customRegistration(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        $data = $request->all();
        $check = $this->create($data);
        $listOfproducts = products::all();
        //return redirect("dashboard",['products'=>$listOfproducts])->withSuccess('You have signed-in');
        //return redirect()->back()->with('products',$listOfproducts);
        return redirect('dashboard')->back()->with('products',$listOfproducts);
    }

    public function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password'])
        ]);
    }

    public function dashboard()
    {
        if(Auth::check()){
            return view('dashboard');
        }

        return redirect("login")->withSuccess('You are not allowed to access');
    }

    public function signOut() {
        Session::flush();
        Auth::logout();

        return Redirect('login');
    }
}
