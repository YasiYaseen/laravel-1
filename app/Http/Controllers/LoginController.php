<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class LoginController extends Controller
{
    //
    public function index()
    {
        $name = "Jishad";
        $age = 30;
        session()->put('user_name','yaseen');
        session()->flash('hello','hello world');
        session()->forget('hello');
        session()->flush();
        $record = ['one', 'two', 'three', 'four'];
        $users = User::all();
        $user = User::find(5);
        $user = User::where('email', '=', 'karlie32@example.org')->first();
        $users = User::whereIn('id', [3, 2])->get();
        $users = User::oldest()->withTrashed()->paginate(4);

        return view("welcome", compact('users'));
    }
    public function aboutus()
    {
        $name = "hi";
        return view("about-us", compact("name"));
    }
    public function contactus()
    {
        $name = "hi";
        return view("contact-us", compact("name"));
    }
    public function create()
    {
        return view('users.create');
    }
    public function createInit()
    {

        $user = User::insert([
            'name' => \request('name'),
            'email' => \request('email'),
            'date' => \request('dob'),
            'status' => \request('status')
        ]);
        return \redirect()->route('home')->with('status', 'new User Added Succesfully');
    }

    public function update($id)
    {
        $user = User::find(\decrypt($id));

        return view('users.update', compact('user'));
    }

    public function updateInit()
    {
        // return request()->all();
        $user = User::find(request('id'));
        $user->update([
            'name' => \request('name'),
            'email' => \request('email'),
            'date' => \request('dob'),
            'status' => \request('status')
        ]);
        //    User::find(request('id'))->update([
        //         'name'=>\request('name'),
        //         'email'=>\request('email'),
        //         'date'=>\request('dob'),
        //         'status'=>\request('status')
        //     ]);
        return \redirect()->route('home')->with('status', ' User Updated  Succesfully');
    }
    public function delete($id){
        User::find(decrypt($id))->delete();
return \redirect()->route('home')->with('status','User deleted Succesfully');
    }
    public function forceDelete($id){
        User::withTrashed()->find(decrypt($id))->forceDelete();
        return redirect()->route('home')->with('status','User Force deleted succesfully');
    }
}
