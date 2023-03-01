<?php

namespace App\Http\Controllers;

use App\Models\courses;
use App\Models\subject;
use App\Models\users;
use App\Models\usersroloes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use Illuminate\Mail\Mailer;

class myController extends Controller
{
    public function main()
    {
        $query = DB::table('courses') //Sử dụng class DB
            ->select("course_id", "course_name", "description", "price", "picture")
            //
            ->orderBy('course_name', 'ASC')
            ->get();
        $query1 = DB::table('users')
            ->join('subject', 'users.user_id', '=', 'subject.user_id')
            ->join('courses', 'subject.course_id', '=', 'courses.course_id')
            ->select('users.full_name', 'users.address', 'courses.course_name', 'users.decription', 'users.picture')
            ->distinct()
            ->get();
        return view('homepage')->with('ds', $query)->with('ds1', $query1);
    }
    // public function khoahoc(){
    //     $query =DB::table('courses') //Sử dụng class DB
    //     ->select("course_id","course_name","description","price","picture")
    //         //
    //         ->orderBy('course_name','ASC')
    //         ->get();
    //         $query1 = DB::table('users')
    //         ->join('subject', 'users.user_id', '=', 'subject.user_id')
    //         ->join('courses', 'subject.course_id', '=', 'courses.course_id')
    //         ->select('users.full_name','users.address','courses.course_name','users.decription')
    //         ->distinct()
    //         ->get();
    //     return view('khoahoc')->with('ds',$query)->with('ds1',$query1);
    // }
    public function detail($id)
    {
        $query = DB::table('subject') //Sử dụng class DB
            ->select("course_id", "subject_name", "content", "picture", "subject_id")
            ->where('course_id', '=', $id)
            ->orderBy('subject_name', 'ASC')
            ->get();

        $qr = DB::table('lessions') //Sử dụng class DB
            ->select("lession_name")

            ->orderBy('lession_name', 'ASC')
            ->get();

        return view('detailkhoahoc')->with('ds', $query)->with('ls', $qr);
    }

    public function contact()
    {
        return view('contact');
    }
    public function postcontact(Request $request)
    {
        $fl = ['name' => $request->name];
        Mail::send(
            'email.emailcontact',
            $fl,
            function ($mail) use ($request) {
                $mail->to('infocheck0808@gmail.com', $request->name);
                $mail->from($request->email);
                $mail->subject('Test mail!');
            }
        );
        return view('email.emailcontact')->with($fl);
    }

    public function lessionsshow($id, $key)
    {
        $query = DB::table('subject') //Sử dụng class DB
            ->select("course_id", "subject_name", "content", "picture", "subject_id")
            ->where('course_id', '=', $id)
            ->orderBy('subject_name', 'ASC')
            ->get();

        $qr = DB::table('lessions') //Sử dụng class DB
            ->select("lession_name")
            ->where('subject_id', '=', $key)
            ->orderBy('lession_name', 'ASC')
            ->get();

        return view('lessionsview')->with('ds', $query)->with('ls', $qr);
    }
}
