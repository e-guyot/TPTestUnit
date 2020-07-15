<?php 

class Test
{
    public function verifCalcul($function, $resultAttendu){
        if ($function === $resultAttendu){
            return 'Test réussi';
        }
        return 'Test échoué';
    }
}