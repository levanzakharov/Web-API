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
        if (!preg_match('/[\'^£$%&*()}{@#~?><>,|=_+¬-]/', $string))
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

    static function CheckLanguage($string,$language){
        if ($language== "English")
            {
                if (preg_match('/[^a-zA-Z]/', $string))
                    {
                        return true;
                    }
                else{
                    return false;
                }
            }

        else{
            //აბგდევზთიკლმნოპჟრსტუფქღყშჩცძწჭჯჰხ
            if (preg_match('/[^ა-ჰ]/', $string))
                {
                    return true;
                }
            else{
                return false;
            }
        }
    }
}
?>