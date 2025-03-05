<?php

namespace App\Http\Controllers;

use App\Models\Watch;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Log;
class WatchController extends Controller
{
    /**
     * Constructor pour assurer que seuls les admin peuvent accéder
     */
    public function __construct()
    {
        $this->middleware(['auth', 'role:admin']);
    }

    /**
     * Afficher la liste des montres
     */
    public function index()
    {
        $watches = Watch::latest()->paginate(10);
        return view('watches.index', compact('watches'));
    }

    /**
     * Afficher le formulaire de création
     */
    public function create()
    {
        return view('watches.create-watch');
    }

    /**
 * Enregistrer une nouvelle montre
 */
public function store(Request $request)
{
    Log::info('Form submission received', $request->all());
    
    // Simple validation
    $validated = $request->validate([
        'model' => 'required',
        'reference' => 'required',
        'collection' => 'required',
        'price' => 'required|numeric',
        'description' => 'required',
    ]);
    
    // Handle photo
    $photoPath = null;
    if ($request->hasFile('photo')) {
        $photoPath = $request->file('photo')->store('watches', 'public');
        Log::info('Photo stored at: ' . $photoPath);
    }
    
    // Try creating with minimal data
    try {
        $watch = new Watch();
        $watch->model = $request->model;
        $watch->reference = $request->reference;
        $watch->collection = $request->collection;
        $watch->price = $request->price;
        $watch->description = $request->description;
        $watch->photo = $photoPath;
        $watch->save();
        
        Log::info('Watch saved with ID: ' . $watch->id);
        
        return redirect()->route('watches.index')
                        ->with('success', 'La montre a été ajoutée avec succès.');
    } catch (\Exception $e) {
        Log::error('Exception: ' . $e->getMessage());
        return back()->withInput()->with('error', $e->getMessage());
    }
}
    
    public function destroy(Watch $watch)
    {
        
        if ($watch->photo) {
            Storage::disk('public')->delete($watch->photo);
        }

        
        if ($watch->additional_photos) {
            $additionalPhotos = json_decode($watch->additional_photos, true);
            foreach ($additionalPhotos as $photo) {
                Storage::disk('public')->delete($photo);
            }
        }

        $watch->delete();

        return redirect()->route('watches.index')
                        ->with('success', 'La montre a été supprimée avec succès.');
    }
}