<?php
namespace App;

class Conversor
{
    public $numeroArabigo;
    
    public function ConvertirNumeroARomano()
    {   
        $tabla = array('M'=>1000, 'CM'=>900, 'D'=>500, 'CD'=>400, 'C'=>100, 
                       'XC'=>90, 'L'=>50, 'XL'=>40, 'X'=>10, 'IX'=>9,   
                       'V'=>5, 'IV'=>4, 'I'=>1);    //array con numeros a comparar y sus iguales en numeros romanos
		$resultado = '';
		while($this->numeroArabigo > 0) //mientras en $numerArabigo sea mayor que 0 se ejecuta el codigo de abajo
        {
        	foreach($tabla as $claveTabla=>$numeroEnTabla) //itera en la $tabla
            {
            	if($this->numeroArabigo >= $numeroEnTabla) //Si el numero que se quiere convertir es mayor o igual ejecuta el codigo de abajo
                {
                	$this->numeroArabigo -= $numeroEnTabla; //Resta al numero Arabigo al numero en la tabla
					$resultado .= $claveTabla; //Añade la clave en resultado a mostrar
					break;
            	}
        	}
    	}
    	return $resultado;
    }
}