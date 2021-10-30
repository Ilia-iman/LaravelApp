<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;


class RouteGroupController extends Controller
{
   public function listPosts () {
       return 'List';
   }

    public function addPost () {
        return 'Add';
    }
}
