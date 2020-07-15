<?php 

class Test extends Controller
{
    public function verifCalcul($function, $resultAttendu){
        $result = $Calcul::$function;
        if ($result === $resultAttendu){
            return 'Test réussi';
        }
        return 'Test échoué';
    }
}