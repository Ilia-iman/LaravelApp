<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\MyGoodClass;

class TestControllerConstruct extends Controller
{
    protected $goodClass;
    function __construct(Request $request, MyGoodClass $goodClass)
    {
//  Видимо в 8.х версии Laravel у родительского класса Controller нет конструктра
//        parent::__construct($request);
        $this->goodClass = $goodClass;
    }

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

    public function goodMethod() {
        echo '<pre>';
        var_dump($this->goodClass->getCounter());
        var_dump($this->goodClass->getCounter());
        var_dump($this->goodClass->getCounter());
        var_dump($this->goodClass->getCounter());
        echo '</pre>';
    }
}
