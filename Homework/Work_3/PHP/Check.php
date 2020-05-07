<?php
class check{
    function checkId($string){
        if (is_numeric($string))
            {
                return true;
            }
        else{
            return false;
        }
    }

    function checkSpecialCharacters($string){
        if (!preg_match('/[\'^£$%&*()}{@#~?><>_,|=+¬-]/', $string))
            {
                return true;
            }
        else{
            return false;
        }
    }

    static function checkLength($string){
        $length = strlen($string);
        if (1<$length && $length<500)
            {
                return true;
            }
        else{
            return false;
        }
    }


    static function HashString($string, $rand){
        $salt = '}#f4ga~g%7hjg4&j(7mk?/!bj30ab-wi=6^7-$^R9F|GK5J#E6WT;IO[JN';
        if ($rand < 10) {
            $rand = random_int(10,100);
        }
        
        for ($i=0; $i < $rand; $i++) { 
            $HashedString = sha1($string.$salt);
            $string = $HashedString;
        }
        
        return array($HashedString,$rand);
    }


    static function CheckPasswordStrength($password){
        $uppercase = preg_match('@[A-Z]@', $password);
        $lowercase = preg_match('@[a-z]@', $password);
        $number    = preg_match('@[0-9]@', $password);

        if(!$uppercase || !$lowercase || !$number || strlen($password) < 8) {
            return 'Password should be at least 8 characters in length and should include at least one upper case letter, one number, and one special character.';
        }
        else{
            return 'Strong password';
        }
    }
}
?>

