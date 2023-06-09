<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CalculController extends Controller
{
    public function somme($a, $b){
        return "La somme est : ".$a + $b;
    }
    public function produit($a, $b){
        return "Le produit est : ".$a * $b;
    }
    
    }