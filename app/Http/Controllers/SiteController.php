<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Course;
use App\Models\News;
use App\Models\Student;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class SiteController extends Controller
{

    public function newsBrowse(){
        $news = News::with('translations')->paginate(10);

        return view("site.news.browse", compact('news'));

    }
    public function newsIndex(News $news){
        $all = News::with('translations')->latest()->take(3)->get();
        return view("site.news.index", compact('news', 'all'));

    }

    public function courses(){
        $courses = Course::with('translations')->paginate(9);

        return view('site.courses',compact('courses'));

    }

    public function register(Request $request){
        $items = json_decode($request->items)??[];
        $courses = [];
        foreach ($items as $key => $item) {
            if ($item)
            $courses[] = Course::find($item);
        }

        return view("site.register", compact('courses'));

    }
    public function registerStore(Request $request){
        $items = json_decode($request->items)??[];
        $courses = "";
        foreach ($items as $key => $item) {
            $courses .= Course::find($item)->name.", ";
        }
        $contact = new Contact();
        $contact->fullname = $request->name." ".$request->lastname;
        $contact->phone = $request->phone;
        $contact->address = $request->address;
        $contact->description = $request->description;
        $contact->subjects = $courses;
        $contact->save();
        return redirect()->route('register.success');
    }

    public function results(Request $request){
        $year = $request->year??2021;
        $page = $request->page??1;
        $students = Student::with('translations');
        if ($year)
        {
            $students->where("year", $year);
        }
        $years  = [];
        $all = $students->get();
        foreach (Student::all() as $item) {
             if(!in_array($item->year, $years))
               $years[] =  $item->year;
        }

        $students = $students->paginate(9);



        return view('site.results', compact('students', 'year', 'years','all','page'));
    }

}
