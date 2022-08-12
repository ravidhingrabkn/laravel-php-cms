<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;
use App\Models\Social;

class SocialsController extends Controller
{
    //
    public function list(){
        return view('socials.list', [
            'socials'=> Social::all()
        ]);
    }

    public function delete(Social $social)
    {
        $social->delete();
        
        return redirect('/console/socials/list')
            ->with('message', 'Type has been deleted!');        
    }

    public function addform(){
        return view('socials.add');
    }

    public function add()
    {
        $attributes = request()->validate([
            'title'=> 'required',
            'url'=> 'required',
        ]);



         $social= new Social();
         $social->title = $attributes['title'];
            $social->url = $attributes['url'];       
         $social->save();

        return redirect('/console/socials/list')
             ->with('message', 'Social has been added!');
    }

    public function editForm(Social $social)
    {
        return view('socials.edit', [
            'social' => $social,
        ]);

    }

    public function edit(Social $social){
        $attributes = request()->validate([
            'title'=> 'required',
            'url'=> 'required',
        ]);

        $social->title = $attributes['title'];
        $social->url = $attributes['url'];       
        $social->save();

        return redirect('/console/socials/list')
             ->with('message', 'Social has been edited.');
    }
    public function imageForm(Social $social)
    {
        return view('socials.image', [
            'social' => $social,
        ]);
    }

    public function image(Social $social)
    {

        $attributes = request()->validate([
            'image' => 'required|image',
        ]);

        Storage::delete($social->image);
        
        $path = request()->file('image')->store('socials');

        $social->image = $path;
        $social->save();
        
        return redirect('/console/socials/list')
            ->with('message', 'Social image has been edited!');
    }


}
