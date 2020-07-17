<?php 
include_once('../Controller/UserController.php');
class Test
{

    public function isAnEmail($value)
    {
        if (isset($email) && is_strong($email) && !filter_var($value, FILTER_VALIDATE_EMAIL)){
            return FALSE;
        }
        return $value;
    }

    public function AgeisCorrect($age)
    {
        if(isset($age) && is_int($age) && $age >= 13){
            return TRUE;
        }
        return FALSE;
    }

    public function NomOrPrenomIsCorrect($value)
    {
        if(isset($value) && is_string($value)){
            return TRUE;
        }
        return FALSE;
    }

    public function isValid($user)
    {
        if(Test::NomOrPrenomIsCorrect($user->getNom()) && Test::NomOrPrenomIsCorrect($user->getPrenom()) && Test::AgeisCorrect($user->getAge()) && Test::isAnEmail($user->getEmail())){
            return 'Le formulaire est bien valide';
        }
        return 'Le formulaire n\'est pas correct';
    }
}