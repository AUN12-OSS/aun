<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class DataController extends Controller
{
 public function index(){
    return view('formview');
 }
 public function getData(Request $request){
$name = request('name');
$email = request('email');
$age  =  request('age');
$query = DB::insert("INSERT INTO `insertion`(`email`, `name`, `age`) VALUES (?,?,? )",[$email,$name,$age]);
if ($query) {
    echo "Data is inserted Successfully";
}else{
    echo "Failed inserted Data";
}
 }
}
