<?php

namespace App\Http\Controllers;

use App\Models\Candidature;
use App\Models\Diplome;
use App\Models\User;
use Auth;

use Illuminate\Http\Request;

use function Ramsey\Uuid\v1;

class AdminController extends Controller
{
    public function index()
    {
        $diplomesCount = Diplome::with('candidature')->count();
        $diplomes = Diplome::with('candidature')->get();
        $usersCount = User::count();
        $totalMoyenne = 0;
        $numMoyennes = 0;
    
        foreach ($diplomes as $diplome) {
                $totalMoyenne += array_sum(array_filter([
                    $diplome->moyenne_s1,
                    $diplome->moyenne_s2,
                    $diplome->moyenne_s3,
                    $diplome->moyenne_s4,
                    $diplome->moyenne_s5,
                    $diplome->moyenne_s6,
                    $diplome->moyenne_s7,
                    $diplome->moyenne_s8,
                    $diplome->moyenne_s9,
                    $diplome->moyenne_s10,
                ], function ($moyenne) {
                    return !is_null($moyenne);
                }));
    
                // Count the non-null moyenne values
                $numMoyennes += count(array_filter([
                    $diplome->moyenne_s1,
                    $diplome->moyenne_s2,
                    $diplome->moyenne_s3,
                    $diplome->moyenne_s4,
                    $diplome->moyenne_s5,
                    $diplome->moyenne_s6,
                    $diplome->moyenne_s7,
                    $diplome->moyenne_s8,
                    $diplome->moyenne_s9,
                    $diplome->moyenne_s10,
                ], function ($moyenne) {
                    return !is_null($moyenne);
                }));
            
        }
    
    
    
        // Calculate the average moyenne for all candidatures
        $averageMoyenne = $numMoyennes > 0 ? $totalMoyenne / $numMoyennes : 0;
    
        return view("admin.index", compact('diplomesCount', 'usersCount',"averageMoyenne"));
    }
    

    public function afficheDonneBase()
    {
        $diplomes = Diplome::with('candidature')->get();
        
        foreach ($diplomes as $diplome) {
            $totalMoyenne = 0;
            $numMoyennes = 0;
    
            

                $totalMoyenne += array_sum(array_filter([
                    $diplome->moyenne_s1,
                    $diplome->moyenne_s2,
                    $diplome->moyenne_s3,
                    $diplome->moyenne_s4,
                    $diplome->moyenne_s5,
                    $diplome->moyenne_s6,
                    $diplome->moyenne_s7,
                    $diplome->moyenne_s8,
                    $diplome->moyenne_s9,
                    $diplome->moyenne_s10,
                ], function ($moyenne) {
                    return !is_null($moyenne);
                }));
    
                // Count the non-null moyenne values
                $numMoyennes += count(array_filter([
                    $diplome->moyenne_s1,
                    $diplome->moyenne_s2,
                    $diplome->moyenne_s3,
                    $diplome->moyenne_s4,
                    $diplome->moyenne_s5,
                    $diplome->moyenne_s6,
                    $diplome->moyenne_s7,
                    $diplome->moyenne_s8,
                    $diplome->moyenne_s9,
                    $diplome->moyenne_s10,
                ], function ($moyenne) {
                    return !is_null($moyenne);
                }));
            
    
            $diplome->average_moyenne = $numMoyennes > 0 ? $totalMoyenne / $numMoyennes : 0;
        }
        $userId=Auth::user()->id;
    
        return view("admin.compte_utilisateur", compact('diplomes',"userId"));
    }
    
    
       public function affichetest()
{
    $diplomes = Diplome::with('candidature')->get();
    foreach ($diplomes as $diplome) {
        $totalMoyenne = 0;
        $numMoyennes = 0;

        

            $totalMoyenne += array_sum(array_filter([
                $diplome->moyenne_s1,
                $diplome->moyenne_s2,
                $diplome->moyenne_s3,
                $diplome->moyenne_s4,
                $diplome->moyenne_s5,
                $diplome->moyenne_s6,
                $diplome->moyenne_s7,
                $diplome->moyenne_s8,
                $diplome->moyenne_s9,
                $diplome->moyenne_s10,
            ], function ($moyenne) {
                return !is_null($moyenne);
            }));

            // Count the non-null moyenne values
            $numMoyennes += count(array_filter([
                $diplome->moyenne_s1,
                $diplome->moyenne_s2,
                $diplome->moyenne_s3,
                $diplome->moyenne_s4,
                $diplome->moyenne_s5,
                $diplome->moyenne_s6,
                $diplome->moyenne_s7,
                $diplome->moyenne_s8,
                $diplome->moyenne_s9,
                $diplome->moyenne_s10,
            ], function ($moyenne) {
                return !is_null($moyenne);
            }));
        

        $diplome->average_moyenne = $numMoyennes > 0 ? $totalMoyenne / $numMoyennes : 0;
    }
    
    return view("admin.test", compact('diplomes'));
}

        
        
        public function fiche(){
            return view("etudiant.fiche_etudiant");
        }
     
        
    
}
