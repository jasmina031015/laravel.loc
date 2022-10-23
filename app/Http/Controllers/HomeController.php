<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index()
    {


         // Вставить
        //        DB::insert("INSERT INTO posts (title, content) VALUES (?, ?)", ['Статья 5', 'Lorem ipsum 5']); //---1 вариант
        //        DB::insert("INSERT INTO posts (title, content) VALUES (:title, :content)", ['content' => 'Lorem ipsum 5', 'title' => 'Статья 5']);//---2 вариант

        // Обновить
       /* DB::update("update posts set created_at = ?, updated_at = ? WHERE created_at is null or updated_at is null", [now(), now()]);
        return DB::select("select * from posts where id > :id", ['id' => 2]);*/

        // Удалить
      /*   DB::delete("delete from posts where id = :id", ['id'=> 4] );

        // Выбрать
        $posts = DB::select("select * from posts where id > :id", ['id' => 2]);
        return $posts;*/

     //   $data = DB::table('country')->get();
        $data = DB::table('country')->limit(5)->orderBy('surfacearea')->get();
        return dd($data) ;



    }

    public function test()
    {
        return __METHOD__;
    }
}


