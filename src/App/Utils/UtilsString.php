<?php

namespace App\Utils;

use Silex\Application;


class UtilsString
{


    public function __construct()
    {
    	null;
    }


	function removePalavrasComuns($frase){
      $stopWords = array(
      						' de ',' da ',' do ',
      						' na ',' no ',' em ',' a ' ,
							' o ' ,' e ' ,' as ',' os ',
							'quem', 'qual', 'quando',  'onde', 'aonde', 'porque', 'que',
							'este', 'este', 'neste', 'nesta',
      						'para', 'com', 'ou', 'por', 'como', 'www');
   
      $frase = preg_replace('/\s\s+/i', '', $frase); // replace whitespace
      $frase = trim($frase); // trim the string
      $frase = preg_replace('/[^a-zA-Z0-9 -]/', '', $frase); // only take alphanumerical characters, but keep the spaces and dashes too…
      $frase = strtolower($frase); // make it lowercase
   
      preg_match_all('/\b.*?\b/i', $frase, $matchWords);
      $matchWords = $matchWords[0];
      
      foreach ( $matchWords as $key=>$item ) {
          if ( $item == '' || in_array(strtolower($item), $stopWords) || strlen($item) <= 3 ) {
              unset($matchWords[$key]);
          }
      }   
      $wordCountArr = array();
      if ( is_array($matchWords) ) {
          foreach ( $matchWords as $key => $val ) {
              $val = strtolower($val);
              if ( isset($wordCountArr[$val]) ) {
                  $wordCountArr[$val]++;
              } else {
                  $wordCountArr[$val] = 1;
              }
          }
      }
      arsort($wordCountArr);
      $wordCountArr = array_slice($wordCountArr, 0, 10);
      return $wordCountArr;
}


}

