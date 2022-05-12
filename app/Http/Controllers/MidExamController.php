<?php
namespace App\Http\Controllers;
use App\Models\MidExam;
use Illuminate\Http\Request;

class MidExamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = MidExam::all();
        return view("/index", compact("products"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("/add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $products = new MidExam();
        $products->Name = $request->product_name;
        $products->Price = $request->product_price;
        $products->Category = $request->category;
        $products->Quantity = $request->product_qty;
        $products->save();
        return redirect('/index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MidExam  $midExam
     * @return \Illuminate\Http\Response
     */
    public function show(MidExam $midExam)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MidExam  $midExam
     * @return \Illuminate\Http\Response
     */
    public function edit(Request $request,$id)
    {
        $product = MidExam::find($id);
        $product->Name = $request->input("product_name");
        $product->Price = $request->input("product_price");
        $product->Category = $request->input("category");
        $product->Quantity = $request->input("product_qty");
        $product->save();
        return redirect("/index");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\MidExam  $midExam
     * @return \Illuminate\Http\Response
     */
    public function update($id)
    {
        $product = MidExam::find($id);
        $products = MidExam::all();
        return view("/edit",compact('product','products'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MidExam  $midExam
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        MidExam::find($id)->delete();
        return redirect()->back();
    }
}
