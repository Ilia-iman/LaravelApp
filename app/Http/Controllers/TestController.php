<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Classes\MyGoodClass;
use Illuminate\Support\Facades\DB;
use App\Models\testModel;

class TestController extends Controller
{

    public function testOrm() {
/*        $newTestModel = new testModel();
        $newTestModel->name = 'Anton';
        $newTestModel->age = 25;
        $newTestModel->save();*/
        testModel::create([
            'name' => 'Ilia',
            'age' => 33
        ]);

/*        $tests = testModel::find(1);
        dump($tests);*/
    }

    public function someMethod(Request $request) {
        $name = $request->input('name', 'Дмитрий');
        $surname = $request->input('surname', 'Юрьев');

        return view('test', [
            'teacher' => 'Преподаватель курса',
            'name' => $name,
            'surname' => $surname
        ]);
    }

    public function subMethod()
    {
        echo 'SUBMETHOD';
    }

    //Метод с параметрами
    public function someMethod2($name = 'Дмитрий', $surname = null)
    {
        if ($surname) $this->subMethod();
        return view('test', [
            'teacher' => 'Преподаватель курса',
            'name' => $name,
            'surname' => $surname
        ]);
    }

    public function showPosts() {
        return view('pages.content', [
            'content' => 'Content',
            'content2' => 'Content2',
            'content3' => '<h1>unsafeContent</h1>',
            'template' => 'pages.content2'
        ]);
    }

    public function mainMethod() {
        /*        $delete = DB::table('users')->where('email', '=', 'core15@mail.ru')->delete();
                if ($delete) {
                    return 'Done';
                } else {
                    dump($delete);
                }*/
        return view('main');

    }

    public function goodMethod(MyGoodClass $goodClass) {
        echo '<pre>';
        var_dump($goodClass->getCounter());
        var_dump($goodClass->getCounter());
        var_dump($goodClass->getCounter());
        var_dump($goodClass->getCounter());
        echo '</pre>';
    }
}
