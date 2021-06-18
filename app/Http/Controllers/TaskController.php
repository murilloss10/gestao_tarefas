<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
    
    public function index(){
        return Task::all();
    }


    public function insertTask(TaskRequest $request){

        Task::create([
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return response()->json(["title" => "Sucesso", "msg" => "Inserido com sucesso"], 201);

    }


    public function updateTask(TaskRequest $request){

        Task::find($request->id)->update([
            'id' => $request->input('id'),
            'name' => $request->input('name'),
            'description' => $request->input('description')
        ]);

        return response()->json(["title" => "Sucesso", "msg" => "Atualizado com sucesso"], 200);

    }

    
    public function deleteTask($id){
        
        Task::destroy($id);

        return response()->json(["title" => "Sucesso", "msg" => "Excluído com sucesso"], 401);

    }

}
