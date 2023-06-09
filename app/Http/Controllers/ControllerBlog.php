<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ControllerBlog extends Controller
{
    public function index()
    {
        Blog::create([
                   'id'     =>   1, 
                   'title'   =>   'Cours Laravel',
                   'image'   =>   'https://th.bing.com/th/id/OIP.p6_DFmsv5ENz76b_KxP-wwHaHa?pid=ImgDet&rs=1',
        ]
        );
    }

    // public function show($id): View
    // {
    //     // return view('Data', [
    //     //     'datas' => Blog::findOrFail($id)
    //     // ]);
    // }


}
