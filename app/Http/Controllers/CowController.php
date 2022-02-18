<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Cow;
class CowController extends Controller
{
    public function all(){
        //getting the data
        $cows = Cow::all();
        // dd($cows);
        //show the view
        //passing the data the view
        return view('cows.all',[
            'cows' => $cows
        ]);
    }

    public function add(){
        return view('cows.add');
    }

    public function save(Request $request){

        $validated = $request->validate([
            'cow_name' => 'required|alpha',
            'birth_date' => 'required|date',
            'gender' => 'required',
            'breed' => 'required',
        ]);

        //inputs are ok 
        //oop manenoz

        //an object
        $cow = new Cow();

        $cow->name = $request->get('cow_name');
        $cow->birth_date = $request->get('birth_date');
        $cow->gender = $request->get('gender');
        $cow->breed = $request->get('breed');
        $cow->save();
       
        return redirect('cows');
    }

    public function delete($id){
        Cow::find($id)->delete();
        return redirect('cows');
    }
}
