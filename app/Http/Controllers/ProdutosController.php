<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function index()
    {
        return response('Index', 200);
    }

    

    public function create()
    {
        return response('Create', 200);
    }


    public function store(Request $request)
    {
        return response($request->all(), 200);
    }


    public function show($id)
    {
        return response('Show. Id: ' . $id , 200);
    }

    
    public function edit($id)
    {
        return response('Edit. Id: ' . $id , 200);
    }


    public function update(Request $request, $id)
    {
        return response('Update. Id:' . $id , 200);
    }


    public function destroy($id)
    {
        return response('Destroy. Id:' . $id , 200);;
    }
}
