<?php

namespace App\Http\Controllers;

class SingleAction extends Controller
{
 public function __invoke () {
     return '<h2>Single Action Controller</h2>';
 }
}
