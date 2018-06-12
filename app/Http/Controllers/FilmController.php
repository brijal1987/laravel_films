<?php
namespace App\Http\Controllers;
use Validator;
use App\Models\Film;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
class FilmController extends Controller
{
    /**
     * Display the resources.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $request = Request::create('/api/films', 'GET');

        $response = Route::dispatch($request);
        $films = json_decode($response->content(),true);
         // print "<pre>";print_r($films);die;
        return view('films.index', ['films' =>$films]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('films.create');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $request = Request::create('/api/films/'.$slug, 'GET');

        $response = Route::dispatch($request);
        $film = json_decode($response->content());
        //print "<pre>";print_r($film);die;

        return view('films.view', ['film' => $film]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request = Request::create('/api/films', 'POST');

        $response = Route::dispatch($request);
        $film = json_decode($response->content(),true);
        if(isset($film['success']) ==1){
           return redirect('films')->with('status', 'Record Deleted!'); 
        }
        else{
            return redirect('films')->with('status', $film['errors']);  
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $request = Request::create('/api/films/'.$id.'/edit', 'GET');

        $response = Route::dispatch($request);
        $film = json_decode($response->content(),true);
        //print "<pre>";print_r($film);die;
        return view('films.edit', ['film' =>$film]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $request = Request::create('/api/films/'.$id.'', 'delete');

        $response = Route::dispatch($request);
        $film = json_decode($response->content(),true);
        if(isset($film['success']) ==1){
           return redirect('films')->with('status', 'Record Deleted!'); 
        }
        else{
            return redirect('films')->with('status', $film['errors']);  
        }
    }
    /**
     * Store a comment for resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function storeComment(Request $request)
    {
        $validator = Validator::make($request->input(), ['body' => 'required', 'film' => 'required']);
        // process the login
        if ($validator->fails()) {
            $request->session()->flash('message', 'Comment cannot be empty');
            return redirect()->back()->withInput();
        }
        // check if resource available
        $slug = $request->input('film');
        $film = Film::where('slug', $slug)->first();
        if(!$film) {
            abort(404, 'Not found');
        }
        try 
        {
            $film->comments()->create([
                'user_id' => $request->user()->id,
                'body' => $request->input('body')
            ]);
            $request->session()->flash('message', 'Your comment has been added');
        }
        catch(Exception $e) 
        {
            $request->session()->flash('message', $e->getMessage());
        }
        return redirect()->route('films.view', $film->slug);
    }
}