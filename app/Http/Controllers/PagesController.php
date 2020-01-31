<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function home(){
        return view('welcome');
    }


    public function contact(){
        $contacts = [
            'Number: +45 12 34 56 78',
            'Mail: test@laravel.com',
            'Facebook: www.facebook.com/test',
            'blabla'
        ];

        return view('contact',[
            'contacts' => $contacts,
            'title' => request('title')
        ]);

}}
