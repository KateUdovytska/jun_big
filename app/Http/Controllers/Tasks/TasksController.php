<?php

namespace App\Http\Controllers\Tasks;

use App\Models\Task;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class TasksController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index(){
        return view('tasks.index');
    }

    public function create(){
        return view('tasks.create');
    }

    public function add(Request $request){
        $this->validate(
            $request,
            ['name'=>'required|max:255']
        );
//        $user = Auth::user(); 1var
        $user = $request->user();  //2var
        //=================1var
        $user->tasks()->create(
            [
                'name'=>$request->name,
            ]
        );
        //=================2var
//        $task = new Task();
//        $task->name = $request->name;
//        $task->user_id = $user->id;
//        $task->save();
        return redirect(route('tasks.index'));
    }
}
