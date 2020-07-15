<?php 

class Calcul
{
    
    public function add(int $a, int $b)
    {
        return ($a)+($b);
    }

    public function sub(int $a, int $b)
    {
        return $a-$b;
    }

    public function mul(int $a, int $b)
    {
        return $a*$b;
    }

    public function div (int $a, int $b)
    {
        if ($b === 0){
            return 'erreur de calcul';
        }
        return $a/$b;
    }

}
