<?php

/**
 * Write a function named setAlarm/set_alarm/set-alarm/setalarm (depending on language) which 
 * receives two parameters.
 * The first parameter, employed, is true whenever you are employed and the second parameter, 
 * vacation is true whenever you are on vacation.
 *
 * The function should return true if you are employed and not on vacation (because these are the 
 * circumstances under which you need to set an alarm). It should return false otherwise. Examples:
 *
 * employed | vacation 
 * true     | true     => false
 * true     | false    => true
 * false    | true     => false
 * false    | false    => false
 */

/**
 * Define a função setAlarm que recebe dois parâmetros booleanos
 * @param bool $employed indica se a pessoa está empregada
 * @param bool $vacation indica se a pessoa está de férias
 */
function setAlarm(bool $employed, bool $vacation): string {
	// Retorna 'true' se estiver empregado e NÃO de férias, senão 'false'
	return ($employed && !$vacation) ? 'true' : 'false';
}

// Exemplo de chamada
echo setAlarm(employed: true, vacation: false);
