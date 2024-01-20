<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use Inertia\Inertia;

class ImprintController extends Controller
{
    public function index()
    {
        return Inertia::render('Imprint/Index');
    }
}
