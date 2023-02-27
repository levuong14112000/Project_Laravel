<?php

namespace App\Http\Controllers;
use App\Models\courses;
use App\Models\subject;
use App\Models\users;
use App\Models\usersroloes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class myController extends Controller
{
    public function main(){
        $query =DB::table('courses') //Sử dụng class DB
        ->select("course_id","course_name","description","price","picture")
            //
            ->orderBy('course_name','ASC')
            ->get();
            $query1 = DB::table('users')
            ->join('subject', 'users.user_id', '=', 'subject.user_id')
            ->join('courses', 'subject.course_id', '=', 'courses.course_id')
            ->select('users.full_name','users.address','courses.course_name','users.decription','users.picture')
            ->distinct()
            ->get();
        return view('layout.main')->with('ds',$query)->with('ds1',$query1);
        
    }
    public function khoahoc(){
        $query =DB::table('courses') //Sử dụng class DB
        ->select("course_id","course_name","description","price","picture")
            //
            ->orderBy('course_name','ASC')
            ->get();
            $query1 = DB::table('users')
            ->join('subject', 'users.user_id', '=', 'subject.user_id')
            ->join('courses', 'subject.course_id', '=', 'courses.course_id')
            ->select('users.full_name','users.address','courses.course_name','users.decription')
            ->distinct()
            ->get();
        return view('khoahoc')->with('ds',$query)->with('ds1',$query1);
    }
    public function detail1(){
        $query =DB::table('subject') //Sử dụng class DB
        ->select("course_id","subject_name","content","picture")
            ->orderBy('subject_name','ASC')
            ->get();
        return view('detailkhoahoc1')->with('ds',$query );
    }
    public function detail2(){
        $query =DB::table('subject') //Sử dụng class DB
        ->select("course_id","subject_name","content","picture")
            ->orderBy('subject_name','ASC')
            ->get();
        return view('detailkhoahoc2')->with('ds',$query );
    }
    public function detail3(){
        $query =DB::table('subject') //Sử dụng class DB
        ->select("course_id","subject_name","content","picture")
            ->orderBy('subject_name','ASC')
            ->get();
        return view('detailkhoahoc3')->with('ds',$query );
    }

}
