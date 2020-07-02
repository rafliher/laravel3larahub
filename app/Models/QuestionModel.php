<?php

namespace App\Models;

use Illuminate\Support\Facades\DB;

class QuestionModel {
    public static function get_all(){
        $questions = DB::table('questions')->get();
        return $questions;
    }
    public static function  insert($data){
        $new_data = DB::table('questions')->insert($data);
        return $new_data;
    }
}