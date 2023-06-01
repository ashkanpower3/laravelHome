<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Course;
use App\Models\Instructor;
use Illuminate\Http\Request;

class courseController extends Controller
{
    public function index()
    {
        $courses = Course::latest();
        if (request("search")) {
            $search_words = request("search");
            if (str_word_count($search_words) > 1) {
                $search_words = explode(" ", $search_words);
                foreach ($search_words as $search_word) {
                    $courses->where("title", "like", '%' . $search_word . '%');
                }
            } else {
                $courses->where("title", "like", '%' . request("search") . '%');
            }
        }

        if(request("category")){
            $categories = Category::latest();
            $find_cat = $categories->where("slug", request("category"))->get()->first();
            if($find_cat) {
                $cat_id = $find_cat->id;
                $courses->where("category_id", $cat_id);
            }else{
                dd("category not found");
            }
        }

        if(request("instructor")){
            $instructor_filter = request("instructor");
            $instructor = Instructor::latest();
            $find_instructor = $instructor->where("name", "like", $instructor_filter)->first();
            if($find_instructor){
                $instructor_id = $find_instructor->id;
                $courses->where("instructor_id", "$instructor_id");
            }else{
                //abort send user to 404 page if anything not found
                abort(404, "not found");
            }
        }

        return view("welcome", ['courses' => $courses->paginate(1)]);
    }


    public function course_details(Course $course)
    {
        return view("course-details", ['course' => $course]);
    }
}
