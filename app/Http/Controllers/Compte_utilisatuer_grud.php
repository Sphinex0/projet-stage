<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\ViewName;

class Compte_utilisatuer_grud extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = User::all();

        
        // return $data;
        return view('admin.users-table',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ajouter-utilisateur');
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
      
    $request->validate([
            "name" => "required",
            "email" => "required",
            "password" => "required",
            "role" => "required",
        ]);
    
    $hashedPassword = bcrypt($request->password);
    $existingUser = User::where('email', $request->email)->first();
       if($existingUser){
       
    return redirect()->route('ajouter_utilisateurs')->with('error', 'Utilisateurs dmail déja exists il y a un erreur');
       }else{
        $success = User::create([
            'name' => $request->name,   
            'email' => $request->email,
            'password' => $hashedPassword,
            'role' => $request->role,
        ]);
       }
    
        
    
       if($success){
        
    return redirect()->route('ajouter_utilisateurs')->with('success', 'Utilisateurs bien ajouté');
       }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function updateForm(string $id)
    {
        //
        $user = User::find($id);
        return view("admin.edit-user",compact("user"));
    }
    public function update(Request $request, string $id)
{
    // Find the user by ID
    $user = User::find($id);

    // Ensure the user exists
    if (!$user) {
        return redirect()->route('compte_utilisateur')->with('error', 'Utilisateur non trouvé');
    }

    // Validate the request data
    $request->validate([
        'name' => 'required',
        'email' => 'required|email',
        'role' => 'required',
    ]);

    // Update user attributes
    $user->name = $request->name;
    $user->email = $request->email;
    $user->role = $request->role;

    // Check if password is provided and not empty, then hash and update
    if ($request->filled('password')) {
        $user->password = bcrypt($request->password);
    }

    // Save the updated user
    $user->save();

    return redirect()->route('compte_utilisateur')->with('success', 'Utilisateur modifié avec succès');
}

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::find($id);
        if (!$user) {
            return redirect()->route('compte_utilisateur')->with('error', 'Utilisateur non trouvé.');
        }
    
        $candidature = $user->candidature;
        if ($candidature) {
            $diplome = $candidature->diplome;
            if ($diplome) {
                $diplome->delete();
            }
            $choixClassement = $candidature->choix;
            if ($choixClassement) {
                $choixClassement->delete();
            }
            $candidature->delete();
        }
    
        $user->delete();
    
        return redirect()->route('compte_utilisateur')->with('success', 'Utilisateur supprimé avec succès.');
    }
    
}