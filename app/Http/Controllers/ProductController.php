<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Product;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(){
        $this->middleware('auth');
    }

    public function index()
    {
        $prods = Product::all();
        return view('produtos/products', compact('prods'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produtos/newProduct');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $regras = [
            'name'  => 'required|min:6',
            'size' => 'required',
            'type' => 'required',
            'amount' => 'required',
            'color' => 'required',

        ];
        $mensagens = [ 
            'name.required' => 'O nome é requerido.',
            'name.min' => 'É necessário no mínimo 6 caracteres no nome.',
            'required' => 'O atributo :attribute não pode estar em branco.',
        ];

        $request->validate($regras, $mensagens);

        $prod = new Product();
        $prod->name = $request->input('name');
        $prod->size = $request->input('size');
        $prod->type = $request->input('type');
        $prod->amount = $request->input('amount');
        $prod->color = $request->input('color');
        $prod->save();

        return redirect('produtos');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $prod = Product::find($id);
        if(isset($prod)){
            return view('produtos/detailsProduct', compact('prod'));
        }
        return redirect('produtos');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $prod = Product::find($id);
        if(isset($prod)){
            return view('produtos/editProduct', compact('prod'));
        }
        return redirect('produtos');
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
        $prod = Product::find($id);
        if(isset($prod)){
            $prod->name = $request->input('name');
            $prod->size = $request->input('size');
            $prod->type = $request->input('type');
            $prod->amount = $request->input('amount');
            $prod->color = $request->input('color');
            $prod->save();
        }
        return redirect('produtos');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $prod = Product::find($id);
        if(isset($prod)){
            $prod->delete();
        }
        return redirect('produtos');
    }
}
