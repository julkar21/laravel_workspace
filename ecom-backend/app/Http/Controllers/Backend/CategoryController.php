<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Models\Backend\Category;
use Illuminate\Support\Facades\Validator as FacadesValidator;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {   
        
        return view('backend.pages.category.categorymanage');
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
        $validator=Validator::make($request->all(),[
            'name' => 'required',
            'description' => 'required',
            'tag'=> 'required',
        ]);
        if($validator->fails()){
            return response()->json([
                'status' => 'failed',
                'errors' => $validator->messages()
            ]);
        }
        else{
            $category = new Category();
            $category->name = $request->name;
            $category->description = $request->description;
            $category->tag = $request->tag;
            $category->status = $request->status;
            $category->save();
            return response()->json([
                'message' => 'Category Added Successfully'
            ]);
        }
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
    
    public function showall()
    {
        $categories = Category::all();
        return response()->json([
            'payload'=>$categories,
        ]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return response()->json([
            'payload'=>$category,
        ]);
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
        $validator = FacadesValidator::make($request->all(),[
            'categoryName'=>'required',
            'categoryDescription'=>'required',
            'categoryTags'=>'required',
        ]);
        if($validator->fails()){
            return response()->json([
               'status'=>'failed',
               'errors'=>$validator->getMessageBag(), 
            ]);
        }
        else{
            $category = Category::find($id);
            $category->name = $request->categoryName;
            $category->description = $request->categoryDescription;
            $category->tag = $request->categoryTags;
            $category->status = $request->categoryStatus;
            $category->update();
            return response()->json([
                'status'=>'success',
            ]);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $category = Category::find($id);
        $category->delete();
        return response()->json([
            'status'=>'success'
        ]);
    }
}
