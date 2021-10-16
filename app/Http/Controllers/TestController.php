<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TestController extends Controller
{
   public function someMethod (Request $request) {
       $name = $request->input('name', 'Дмитрий');
       $surname = $request->input('surname', 'Юрьев');

       return view('test', [
          'teacher' => 'Преподаватель курса',
          'name' => $name,
          'surname' => $surname
       ]);
   }

    public function subMethod () {

       echo 'SUBMETHOD';

    }

   //Метод с параметрами
       public function someMethod2 ($name = 'Дмитрий', $surname = null) {
            if ($surname) $this->subMethod();
           return view('test', [
               'teacher' => 'Преподаватель курса',
               'name' => $name,
               'surname' => $surname
           ]);
   }
   public function showPosts () {
       return view('pages.content', [
           'content' => 'Content',
           'content2' => 'Content2',
           'content3' => '<h1>unsafeContent</h1>',
           'template' => 'pages.content2'
       ]);
   }
}
