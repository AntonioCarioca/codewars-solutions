<?php

/**
 *Can you find the needle in the haystack?
 *	
 *Write a function findNeedle() that takes an array full of junk but containing one "needle"
 *
 *After your function finds the needle it should return a message (as a string) that says:
 *
 *"found the needle at position " plus the index it found the needle, so:
 *
 *Example(Input --> Output)
 *
 *["hay", "junk", "hay", "hay", "moreJunk", "Needle", "randomJunk"] --> 
 *"found the needle at position 5"
 */

// Define a função findNeedle que recebe um array e retorna uma string
function findNeedle(array $array): string {
	// Converte todos os elementos do array para letras minúsculas
	$arrayLower = array_map('strtolower', $array);
	// Percorre o array convertido
	foreach ($arrayLower as $indice => $value) {
		// Verifica se o valor atual é "needle"
		if ($value === 'needle') {
			// Retorna a mensagem assim que encontrar
			return "found the needle at position " . $indice;
		}
	}
	// Caso não encontre "needle" no array
	return "needle not found in array";
}

// Cria um array com elementos diversos, incluindo ou não "needle"
$array = ["hay", "junk", "hay", "hay", "moreJunk", "needle", "randomJunk"];

// Chama a função e exibe o resultado
echo findNeedle(array: $array);
