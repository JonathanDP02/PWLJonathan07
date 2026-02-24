<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class WelcomeController extends Controller
{
    public function hello() {
    return 'Hello World';
    }

    public function index() {
    return 'Selamat Datang';
    }

    public function about() {
    return 'Jonathan Dwi Pangestu / 244107020197';
    }

    public function artikel() {
    return 'Halaman Artikel dengan id = '.$id;
    }

    public function greeting(){
    return view('blog.hello')
    ->with('name','Jonathan Dwi Pangestu')
    ->with('occupation','Astronaut');
    }
}