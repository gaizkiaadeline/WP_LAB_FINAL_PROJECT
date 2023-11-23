<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // $foods = Food::simplePaginate();
        $foods = Food::all();
        return view('home')->with('foods', $foods);

    }

    public function search(Request $request)
    {
        $foods = Food::where("food_name", "LIKE", "%$request->search%")->simplePaginate(4);
        return view('home')->with('foods', $foods);
    }

    public function filter(Request $request)
    {
        $category = $request->input('food_category');

        $foods = match ($category) {
            // 'maincourse' => DB:table('foods')->where("food_category", "LIKE", "$category")->get();
            'maincourse' => DB::table('foods')->where("food_category", "LIKE", "Main Course")->get(),
            'beverage' => DB::table('foods')->where("food_category", "LIKE", "Beverage")->get(),
            'dessert' => DB::table('foods')->where("food_category", "LIKE", "Dessert")->get(),
            default => Food::all()
        };

        // return view('home', ['foods' => $foods]);
        // return view('home')->with('foods', $foods);
        return view('home', compact('foods', 'food_category'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */

    public function store(Request $request)
    {
        $rules = [
            'food_name' => 'required|min:5',
            'food_brief_description' => 'required|max:100',
            'food_full_description' => 'required|max:255',
            'food_category' => 'required',
            'food_price' => 'required|numeric|min:0',
            'food_image' => 'required|image|mimes:jpeg,jpg,png',
        ];

        $request->validate($rules);

        $newFood = new Food();
        $newFood->food_name = $request->input('food_name');
        $newFood->food_brief_description = $request->input('food_brief_description');
        $newFood->food_full_description = $request->input('food_full_description');
        $newFood->food_category = $request->input('food_category');
        $newFood->food_price = $request->input('food_price');

        // if ($request->hasFile('food_picture')) {
        //     $image = $request->file('food_picture');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('food_images'), $imageName);

        //     // Save the image path to the database
        //     $newFood->food_picture = 'food_images/' . $imageName;
        // }

        $newFood->save();

        return redirect()->route('home')->with('success', 'New food item added successfully.');
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $food = Food::find($id);
        return view('update-food', ['food' => $food]);
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
        $food = Food::find($id);

        $rules = [
            'food_name' => 'required|min:5',
            'food_brief_description' => 'required|max:100',
            'food_full_description' => 'required|max:255',
            'food_category' => 'required',
            'food_price' => 'required|numeric|min:0',
            'food_image' => 'required|image|mimes:jpeg,jpg,png',
        ];

        $request->validate($rules);

        $food->food_name = $request->input('food_name');
        $food->brief_description = $request->input('brief_description');
        $food->full_description = $request->input('full_description');
        $food->food_category = $request->input('food_category');
        $food->food_price = $request->input('food_price');

        // if ($request->hasFile('food_image')) {
        //     $image = $request->file('food_image');
        //     $imageName = time() . '.' . $image->getClientOriginalExtension();
        //     $image->move(public_path('food_images'), $imageName);

        //     // Update the food image path in the database
        //     $food->food_image = 'food_images/' . $imageName;
        // }

        // Save the changes to the food record
        $food->save();

        return redirect()->route('home')->with('success', 'Food updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
