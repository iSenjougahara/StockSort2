<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function login(Request $request) {

        $formFields = $request->validate([
            'email' => ['required', 'email'],
            'password' => 'required'
        ]);
        
       
       if(Auth::attempt($formFields)) {
            $request->session()->regenerate();
               $users = User::paginate(10);

            return view('index', compact('users'))->with('message', 'You are now logged in!');
        }

        return back()->withErrors(['email' => 'Invalid Credentials'])->onlyInput('email');
            //return view('index');
        
  
    }

  
    public function store(Request $request)  {
        
         $formFields = $request->validate([
             'name' => 'required| min:3',
             'email' => 'required',Rule::unique('users','email'),
             'password' => 'required|min:6',
            'cargo'=>'required'
         ]);
       

        
         $formFields['password'] = bcrypt($formFields['password']);
         
        // // Create User
       
        $user = User::create($formFields);
        
        // // Login
        

        auth()->login($user);
         
        return redirect('index')->with('message', 'User created and logged in');
    
        }


    public function showEdit($id)
{
    $user = User::find($id);
    return view('editUser', ['user' => $user]);
}
       
       public function userUpdate(Request $request, $id)
{
    $user = User::find($id);
    $user->name = $request->input('name');
    $user->password = bcrypt($request->input('password'));
    $user->email = $request->input('email');
    $user->cargo = $request->input('cargo');
    $user->save();

    return redirect('index')->with('message', 'User updated successfully.');
}
    

    public function logout(Request $request) {

        auth()->logout();

        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return view('welcome')->with('message', 'User Logged out');

    }

    public function show() {
         $users = User::paginate(10);
       return view('index', compact('users'));

    }


    public function deleteUser(User $user)
{
    $user->delete();

    return redirect('/index')->with('message', 'User deleted successfully.');
}
}
