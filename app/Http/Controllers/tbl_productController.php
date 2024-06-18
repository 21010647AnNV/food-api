<?php

namespace App\Http\Controllers;

use App\Models\tbl_product;
use Illuminate\Http\Request;

class tbl_productController extends Controller
{
    //
    public function index()
    {
        return tbl_product::all();
    }

    public function store(Request $request)
    {
        $tbl_product = tbl_product::create($request->all());
        return response()->json($tbl_product, 201);
    }

    public function show($id)
    {
        return tbl_product::find($id);
    }

    public function update(Request $request, $id)
    {
        $tbl_product = tbl_product::findOrFail($id);
        $tbl_product->update($request->all());
        return response()->json($tbl_product, 200);
    }

    public function destroy($id)
    {
        tbl_product::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}