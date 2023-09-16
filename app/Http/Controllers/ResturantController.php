<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Restaurant;
use App\Models\Resturant;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
use App\Http\Controllers;

class ResturantController extends Controller
{
    

     public function index()
     {
         $categories = Category::with('restaurants')->get();

         return view('home.navbar', compact('categories'));
     }
        public function showSecondPage() {
            $restaurants = Resturant::all();
            return view('home.reservation.book', compact('restaurants'));
        }
        public function page()
        {
            $restaurants = Resturant::all();
            return view('home.resturant', compact('restaurants'));


        }
        public function Pagedetail($id)
        {
            $restaurants = Resturant::find($id);
            return view('home.resdetail', compact('restaurants'));


        }
        public function search(Request $request)
        {
            $query = $request->input('q');

            $restaurants = Resturant::where('name', 'LIKE', '%' . $query . '%')
            ->orWhere('description', 'LIKE', '%' . $query . '%')
            ->orWhere('location', 'LIKE', '%' . $query . '%')
            ->get();

            return view('home.search', compact('restaurants', 'query'));
         }


}