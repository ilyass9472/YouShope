<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class watchesProductController extends Controller
{
    /**
     * Constructor pour assurer que seuls les admin peuvent accéder
     */
    public function __construct()
{
    $this->middleware(['auth', 'role:client']);
}


    /**
     * Afficher la liste des montres
     */


    public function index()
    {
        $watches = Watch::latest()->paginate(10);
        return view('watchesProduct', compact('watches'));
    }


    


    

}