<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class IndexController extends Controller
{
    public function Index(){
        $data = [
            'title' => 'Welcome to ItSolutionStuff.com',
            'date' => date('m/d/Y'),
            
        ]; 
            
        $pdf = PDF::loadView('index', $data);
     
        return $pdf->download('itsolutionstuff.pdf');
    }
}
