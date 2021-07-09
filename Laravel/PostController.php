<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Post;
class PostController extends Controller
{
    public function index()
    {
        return view('add-blog-post-form');
    }
      public function login()
    {
        return view('login');
    }

    public function store(Request $request)
    {
        $post = new Post;
        $post->name = $request->name;
        $post->email = $request->email;
        $post->phone_number = $request->phone_number;
        $post->save();
        return redirect('add-blog-post-form')->with('status', 'Successfully Registered...');
    }

    public function userLogin(Request $request)
    {
    	$data =  $request->input();
    	$request->session()->put('email', $data['email']);
    	echo session('email');

    }
}