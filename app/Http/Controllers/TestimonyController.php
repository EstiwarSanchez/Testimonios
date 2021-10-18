<?php

namespace App\Http\Controllers;

use App\Models\Testimony;
use Illuminate\Http\Request;

class TestimonyController extends BaseController
{

    public function index(){
        $testimonials = Testimony::all();
        return $this->successResponse('Testimonios',$testimonials);
    }
}
