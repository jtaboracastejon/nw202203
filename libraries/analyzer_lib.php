<?php 
function analizarTexto($texto){
    $textoAProcesar = strtolower($texto);
    $textoAProcesar = str_replace(array(",",".","-",":","!","?","¿","¡",";", "(",")"), "", $textoAProcesar);
    $palabras = explode(" ", $textoAProcesar);
    $palabrasFreq = array();
    foreach($palabras as $palabra){
        if(isset($palabrasFreq[$palabra])){
            $palabrasFreq[$palabra] ++;
        }else{
            $palabrasFreq[$palabra] = 1;
        }
    }
    arsort($palabrasFreq);
    print_r($palabrasFreq);
}
/* 
*Texto Probado
SAN PEDRO SULA, HONDURAS.- Con una visión transformadora y sostenible, Cervecería Hondureña anunció un importante cambio en su modelo de consumo energético, para comenzar a utilizar energía renovable en sus procesos de producción con la instalación de un sistema de energía solar en techo que se constituye en el proyecto de este tipo más grande de Latinoamérica.

Con el avance del 50% en la instalación de la obra se ha comenzado a generar 4 megavatios de energía limpia, lo que ha implicado la instalación de 7,100 paneles solares y la reducción de 3,600 toneladas de CO2 al ambiente, en esta primera fase se han invertido 98 millones de lempiras y generado cerca de 100 empleos directos.

Esta iniciativa se enmarca bajo el eje de Acción Climática de Cervecería Hondureña, con el que se incorpora el suministro de energía con fuentes renovables para la producción de sus bebidas, una evolución crucial para hacerle frente al cambio climático.
Con el avance del 50% en la instalación de la obra se ha comenzado a generar 4 megavatios de energía limpia.

“La transformación sostenible es una prioridad de nuestro negocio, queremos continuar produciendo las mejores bebidas con calidad, pero también dejando nuestra huella positiva en el ambiente, por ello hoy damos este gran paso incorporándonos al consumo de energía limpia, creando un futuro con más motivos para brindar”, indicó Paola Bondy, presidenta de Cervecería Hondureña.

La construcción de la obra es ejecutada por Celsia, empresa de energía del grupo Argos y líder en el mercado de energía de Centroamérica y estará finalizada en su totalidad en los próximos meses.

*Resultado
Array ( [de] => 26 [en] => 11 [la] => 9 [energía] => 8 [el] => 8 [con] => 6 [se] => 6 [y] => 5 [para] => 4 [instalación] => 4 [ha] => 3 [obra] => 3 [del] => 3 [un] => 3 [cervecería] => 3 [que] => 3 [una] => 3 [al] => 3 [a] => 3 [50%] => 2 [avance] => 2 [producción] => 2 [bebidas] => 2 [sus] => 2 [comenzado] => 2 [megavatios] => 2 [generar] => 2 [4] => 2 [más] => 2 [consumo] => 2 [limpia] => 2 [su] => 2 [cambio] => 2 [es] => 2 [hondureña] => 2 [sostenible] => 2 [por] => 2 [ambiente] => 2 [este] => 2 [huella] => 1 [positiva] => 1 [nuestra] => 1 [san] => 1 [dejando] => 1 [negocio] => 1 [hacerle] => 1 [frente] => 1 [climático con] => 1 [limpia “la] => 1 [transformación] => 1 [prioridad] => 1 [nuestro] => 1 [queremos] => 1 [también] => 1 [continuar] => 1 [produciendo] => 1 [hoy] => 1 [las] => 1 [mejores] => 1 [calidad] => 1 [pero] => 1 [ello] => 1 [brindar”] => 1 [damos] => 1 [celsia] => 1 [próximos] => 1 [los] => 1 [totalidad] => 1 [finalizada] => 1 [estará] => 1 [centroamérica] => 1 [mercado] => 1 [líder] => 1 [argos] => 1 [grupo] => 1 [empresa] => 1 [ejecutada] => 1 [gran] => 1 [construcción] => 1 [hondureña la] => 1 [presidenta] => 1 [bondy] => 1 [paola] => 1 [indicó] => 1 [motivos] => 1 [futuro] => 1 [creando] => 1 [incorporándonos] => 1 [paso] => 1 [crucial] => 1 [98] => 1 [evolución] => 1 [sistema] => 1 [7100] => 1 [implicado] => 1 [lo] => 1 [latinoamérica con] => 1 [grande] => 1 [tipo] => 1 [proyecto] => 1 [constituye] => 1 [techo] => 1 [solar] => 1 [procesos] => 1 [solares] => 1 [renovable] => 1 [utilizar] => 1 [comenzar] => 1 [energético] => 1 [modelo] => 1 [importante] => 1 [anunció] => 1 [transformadora] => 1 [visión] => 1 [honduras] => 1 [sula] => 1 [paneles] => 1 [reducción] => 1 [renovables] => 1 [100] => 1 [fuentes] => 1 [suministro] => 1 [incorpora] => 1 [climática] => 1 [acción] => 1 [eje] => 1 [bajo] => 1 [enmarca] => 1 [iniciativa] => 1 [directos esta] => 1 [empleos] => 1 [cerca] => 1 [3600] => 1 [generado] => 1 [lempiras] => 1 [millones] => 1 [pedro] => 1 [invertido] => 1 [han] => 1 [fase] => 1 [primera] => 1 [esta] => 1 [co2] => 1 [toneladas] => 1 [meses] => 1 )
*/
?>

