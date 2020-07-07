<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Model\News;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class NewsController extends Controller
{
    public function insert(){

        for ($i = 1 ; $i <= 100; $i++){
            DB::table('news')->insert([
               'name' => 'ĐỖ VŨ Ngọc Huy'
            ]);
        }
        echo 'insert thành công';
    }
    public function select(){
        $data = DB::table('news')->paginate(10);
        return $data;
    }
}
