<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Catalog;

class CatalogApiController extends Controller
{
    public function __construct(Catalog $catalog, Request $request)
    {
        $this->catalog = $catalog;
        $this->request = $request;
    }

    public function index()
    {

        $data = $this->catalog->all();
        
        return response()->json($data);
          
    }
          

        


    public function store(Request $request)
    {
        
    }

    public function show($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
