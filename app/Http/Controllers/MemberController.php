<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    //Home Page loading with members data
    public function index(Request $request)

    {
        //casting in the members.php in the models folder
        $data = Member::all();
      
        return view('MembersList')->with('data', $data);
    }


    //Store members data in to the database
    public function store(Request $request)

    {

        //Mutator in the members.php in the models folder
        $member = new Member;
        $member->name = $request->name;
        $member->email = $request->email;
        $member->address = $request->address;
        $member->is_admin = $request->admin;
        $member->save();
        

        return redirect('/')->with('successmsg', 'Operation Done');
    }
}
