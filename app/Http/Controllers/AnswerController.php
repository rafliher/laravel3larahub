<?php

namespace App\Http\Controllers;

use App\Models\AnswerModel;
use Illuminate\Http\Request;

class AnswerController extends Controller
{
    //
    public function index($id){
        $answers = AnswerModel::get_from($id);
        $data =  compact('answers');
        $data['question_id']=$id;
        return view('answer.index', compact('data'));
    }
    public function create($id){
        return view('answer.form', compact('id'));
    }
    public function insert(Request $request, $id){
        $data = $request->all();
        unset($data["_token"]);
        $data['question_id'] = $id;
        $data['created_at'] = $data['updated_at'] = date('Y-m-d H:i:s');
        AnswerModel::insert($data);
        $answers = AnswerModel::get_from($id);
        $data =  compact('answers');
        $data['question_id']=$id;
        return view('answer.index', compact('data'));
    }
}
