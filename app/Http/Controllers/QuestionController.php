<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\QuestionModel;

use function GuzzleHttp\Promise\all;

class QuestionController extends Controller
{
    //
    public function index(){
        $questions = QuestionModel::get_all();
        return view('question.index', compact('questions'));
    }
    public function create(){
        return view('question.form');
    }
    public function insert(Request $request){
        $data = $request->all();
        unset($data["_token"]);
        $data['created_at'] = $data['updated_at'] = date('Y-m-d H:i:s');
        QuestionModel::insert($data);
        $questions = QuestionModel::get_all();
        return view('question.index', compact('questions'));
    }
}
