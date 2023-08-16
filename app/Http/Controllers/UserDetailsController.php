<?php

namespace App\Http\Controllers;
use App\Models\UserModel;
use Illuminate\Http\Request;

class UserDetailsController extends Controller
{

    public function index()
    {
        $contacts = UserModel::all();
      return view ('user_details.index')->with('contacts', $contacts);
    }


    public function create()
    {
        return view('user_details.user_creation');
    }


    public function store(Request $request)
    {
        $input = $request->all();
        UserModel::create($input);
        return redirect('user_details')->with('flash_message', 'Contact Addedd!');
    }


    public function show($id)
    {
        $contact = UserModel::find($id);
        return view('user_details.show_user_details')->with('contacts', $contact);
    }


    public function edit($id)
    {
        $contact = UserModel::find($id);
        return view('user_details.user_edit')->with('contacts', $contact);
    }


    public function update(Request $request, $id)
    {
        $contact = UserModel::find($id);
        $input = $request->all();
        $contact->update($input);
        return redirect('user_details')->with('flash_message', 'Contact Updated!');
    }


    public function destroy($id)
    {
        UserModel::destroy($id);
        return redirect('user_details')->with('flash_message', 'Contact deleted!');
    }
}
