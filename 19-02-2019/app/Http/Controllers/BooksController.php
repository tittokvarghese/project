<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Input;
use DB;


class BooksController extends Controller
{
   
public function store(Request $request)
{
//$name = $request->input('name');
//$name2 = $request->get('name');

$data = Input::all();    
$check = DB::table('users_data')->insertGetId(array(
                                                'name'      => $data['name'],
                                                'body'     => $data['body']));

    //$user = UserData::create($request->all());      


return "Save";
}
}



?>