<?php

namespace App\Http\Controllers\Admin;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Post;
use Auth;
use Carbon\Carbon;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    function __construct()
    {
        $this->middleware('role_or_permission:Post access|Post create|Post edit|Post delete', ['only' => ['index','show']]);
        $this->middleware('role_or_permission:Post create', ['only' => ['create','store']]);
        $this->middleware('role_or_permission:Post edit', ['only' => ['edit','update']]);
        $this->middleware('role_or_permission:Post delete', ['only' => ['destroy']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $Post= Post::paginate(4);

        return view('post.index',['posts'=>$Post]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('post.new');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

     public function storeFiles(Request $request)
{
    $audio = $request->file('audio');
    $video = $request->file('video');
    $image = $request->file('image');

    // Store audio file
    if ($audio) {
        $audioPath = Storage::disk('local')->put('audio', $audio);
    }

    // Store video file
    if ($video) {
        $videoPath = Storage::disk('local')->put('video', $video);
    }

    // Store image file
    if ($image) {
        $imagePath = Storage::disk('local')->put('image', $image);
    }

    // Additional logic...

    return redirect()->back()->with('success', 'Files uploaded successfully.');
}
    public function store(Request $request)
    {
        dd('post suceeded');
        // $data = new Post();
        // $file = $request->file;
        // $filename=time().'.'.$file->getClientOriginalExtension();
        // // $request->$filename()->move('assets',$file);
        // // $path = $request->file('file')->storeAs('assets', $filename);
        // $file->move(public_path('/assets'), end($filename));
        // $request = Storage::url($request);
        // $data->file=$filename;


        //Info Collection
        $data= $request->all();
        $data['user_id'] = Auth::user()->id;
        $Post = Post::create($data);
        return redirect()->back()->withSuccess('Post created !!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('post.index',['post' => $post]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
       return view('post.edit',['post' => $post]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $post->update($request->all());
        return redirect()->back()->withSuccess('Post updated !!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post->delete();
        return redirect()->back()->withSuccess('Post deleted !!!');
    }
}
