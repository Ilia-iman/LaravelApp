<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class PostController extends Controller
{
   public function listPosts () {
       return 'List';
   }

    public function addPost () {
        return 'Add';
    }
}
