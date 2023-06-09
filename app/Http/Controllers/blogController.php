<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class blogController extends Controller
{
        private $blog;
    function __construct(){
        $this->blog=[
            1 => ['title' => 'Cours Laravel', 'image' => 'https://th.bing.com/th/id/OIP.p6_DFmsv5ENz76b_KxP-wwHaHa?pid=ImgDet&rs=1'],
            2 => ['title' => 'Cours React', 'image' => 'https://repository-images.githubusercontent.com/37153337/9d0a6780-394a-11eb-9fd1-6296a684b124'],
            3 => ['title' => 'Cours PHP', 'image' => 'https://th.bing.com/th/id/OIP.Y1hq9sHXG26Fyhys81z8rgHaDt?pid=ImgDet&rs=1'],
            4 => ['title' => 'Cours hTML', 'image' => 'https://th.bing.com/th/id/R.86b6eb77557d5296bd887c7a0b50318e?rik=HT0nd1qNlep0Kw&pid=ImgRaw&r=0'],
            5 => ['title' => 'Cours Css', 'image' => 'https://th.bing.com/th/id/OIP.ayAY9cZTL2wpgG7wb_sVjQHaEM?pid=ImgDet&rs=1'],
            6 => ['title' => 'Cours Bootstrap', 'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRxQvo7DiCYq0KDfGNiQFlNiaozrX5Ze03TbQ&usqp=CAU'],
        ];
        
    }
    public function Blog(){
        return view('Blog', ['data' => $this->blog]);

 }    
 public function SingleBlog($id){
return view('Single', ['data' => $this->blog[$id]]);

}   
}
