<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    //get orqali malumot qabul qilish
    public function create()
    {
        return view('users.create');
    }
    public function store(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;

        echo 'Get orqali olingan ma\'lumotlar <br><br>';
        return 'Name : ' . $name . '<br>' . 'Email : ' . $email . '<br>' . 'Age : ' . $age;
    }

    //post orqali malumot qabul qilish
    public function userPostCreate()
    {
        return view('users.post_create');
    }
    public function userPostStore(Request $request)
    {
        $name = $request->name;
        $email = $request->email;
        $age = $request->age;
        echo 'Post orqali olingan ma\'lumotlar <br><br>';
        return 'Name : ' . $name . '<br>' . 'Email : ' . $email . '<br>' . 'Age : ' . $age;
    }

    //put orqali ma'lumot yangilash
    public function edit()
    {
        return view('users.put_update');
    }
    public function putUpdate($id)
    {
        return $id . '- ID dagi ma\'lumotlar put orqali yangilandi';
    }

    //patch orqali malumot yangilash

    public function patchEdit(){
        return view('users.patch_edit');
    }
    public function patchUpdate($id){
        return $id . ' - ID dagi m\'alumotlar patch orqali yangilandi';
    }

    //delete orqali malumot ochirish
    
    public function delete()
    {
        return view('users.delete');
    }
    public function destroy($id){
        return $id . ' - ID dagi ma\'lumotlar o\'chirildi';
    }
}
