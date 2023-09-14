<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Models\FullTextSearch;
use DataTables;
 
class FullTextSearchController extends Controller
{
    public function search(Request $request){
        $search = $request->input('search');
        
        if($search){
            $request->session()->put('search' , $search);
            return redirect()->route('book');
        }
        else{
            session()->pull('search');
            return redirect()->route('main');
        }
    }
       public function index(){

            if(session('search')){
                $restaurant = restaurants::where('name', 'like', '%' . session('search') . '%')->get();
            }
            else{
                $trips = restaurants::all();
            }
            return view('full-text-search' , ['restaurants' => $restaurant]);
     }
}