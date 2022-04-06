<?php

namespace App\Http\Controllers;
use App\Models\Survey;
use App\Models\Question;
use Illuminate\Http\Request;

class SurveyController extends Controller
{
    
    public function showsurvey(Survey $surveys, Question $questions)
    {
        

        $surveys = survey::where('id', $surveys->id)->get();     

      
        return view('/surveyholder')->with(['surveys' => $surveys]);
    }

    public function listsurvey(Survey $surveys, Question $questions)
    {

        $surveys = survey::all();

        return view('/surveylist')->with(['surveys' =>$surveys]);
    }

    public function surveyresults()
    {
        return view('/surveyresults');

    }

    public function surveydata()
    {
        return view('/surveydata');
    }
}
