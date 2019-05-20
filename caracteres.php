function caracteres($string = '')
{

    $string = trim($string);

    $string = str_replace(
        array("á","é","í","ó","ú","Á","É","Í","Ó","Ú","ñ","À","Ã","Ì","Ò","Ù","Ã™","Ã ","Ã¨","Ã¬","Ã²","Ã¹","ç","Ç","Ã¢","ê","Ã®","Ã´","Ã»","Ã‚","ÃŠ","ÃŽ","Ã”","Ã›","ü","Ã¶","Ã–","Ã¯","Ã¤","«","Ò","Ã","Ã„","Ã‹"),
        array ("a","e","i","o","u","A","E","I","O","U","n","N","A","E","I","O","U","a","e","i","o","u","c","C","a","e","i","o","u","A","E","I","O","U","u","o","O","i","a","e","U","I","A","E"),
        $string
    );
   /* $string = str_replace(
        array('é', 'è', 'ë', 'ê', 'É', 'È', 'Ê', 'Ë'),
        array('e', 'e', 'e', 'e', 'E', 'E', 'E', 'E'),
        $string
    );
    $string = str_replace(
        array('í', 'ì', 'ï', 'î', 'Í', 'Ì', 'Ï', 'Î'),
        array('i', 'i', 'i', 'i', 'I', 'I', 'I', 'I'),
        $string
    );
    $string = str_replace(
        array('ó', 'ò', 'ö', 'ô', 'Ó', 'Ò', 'Ö', 'Ô', 'Ó'),
        array('o', 'o', 'o', 'o', 'O', 'O', 'O', 'O', 'O'),
        $string
    );
    $string = str_replace(
        array('ú', 'ù', 'ü', 'û', 'Ú', 'Ù', 'Û', 'Ü'),
        array('u', 'u', 'u', 'u', 'U', 'U', 'U', 'U'),
        $string
    );*/
    $string = str_replace(
        array('ñ', 'Ñ', 'ç', 'Ç', '¥', '#', '¥'),
        array('n', 'N', 'c', 'C', 'N', 'N', 'N'),
        $string
    );
    //Esta parte se encarga de eliminar cualquier caracter extraño
    $string = str_replace(

        array("¡", "!", "", "¿", "?", "(", ")", "[", "]", "{", "}", "`",
            "´", "º", "ª", "|", "@", "·", "~", "$", "%", "&", "€",
            "¬", "/", "'", "^", "*", "+", "¨", ";", ",", ":", ".", '"',
            "", "-"), ' ', $string);

   /* $string = str_replace(
       // array(chr(129), chr(165), chr(241), chr(209), chr(225), chr(233), chr(237), chr(243), chr(250), chr(190)),
        array("ñ","Ñ","í","á","é","í","ó","ú","'","\"",";",",","→"),
        array("N", "n", "n", "N", "a", "e", "i", "o", "u", "N"),$string);*/

    $string = preg_replace('/[^A-Za-z0-9# \-]/', ' ', $string);

    return $string;
}
