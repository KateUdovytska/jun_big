<?php

namespace App\Http\Controllers\Tasks;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function index(){
        return view('tasks.index');
    }

    public function create(){
        echo 'create';
    }
}
