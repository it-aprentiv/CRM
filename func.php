<?php

global $BinColumnDelimiter      ;
global $BinLineEnd              ;

$BinColumnDelimiter  = "\t"     ;
$BinLineEnd          = "\r\n"   ;

function hex2bin($hexstr){ 
  $n = strlen($hexstr); 
  $sbin="";   
  $i=0; 
  while($i<$n){       
    $a =substr($hexstr,$i,2);           
    $c = pack("H*",$a); 
    if ($i==0){$sbin=$c;} 
    else {$sbin.=$c;} 
    $i+=2; 
  } 
  return $sbin; 
} 

// ===================================================================================

function decodehex($hexstr){
  $strIndex     = strlen($hexstr) ;
  $step         = 2               ;
  $tempHex      = ""              ;
  $result       = ""              ;
  $foundNonNull = false           ;
  
  while ( $strIndex > 0 ){
      $tempHex = substr($hexstr,$strIndex-$step,$step);
      $strIndex = $strIndex - $step;
      if ( $tempHex != "00"){
        $result       .= $tempHex;
        $foundNonNull  = true;
      } else {
        if ($foundNonNull){
          $result .= $tempHex;
        }
      }
  }
  return $result;
}

// ===================================================================================

function hex2str ( $hexstr ) {
  $strlen = strlen($hexstr)/2;
  $endian = "";
  $result = "";
  for ( $i = 0; $i<$strlen;$i++){
    $endian = substr($hexstr,$i*2,2);
    $result .= chr( hexdec($endian) );
  }
  return $result;
}

// ===================================================================================

function extract_bin($filename,$output){
  global $template            ;
  global $BinColumnDelimiter  ;
  global $BinLineEnd          ;
  $decodedfile          = fopen($output,'w+')  ;
  $decodedfilecontents  = ""                    ;
  
  $handle = fopen($filename, "r");
  if ($handle) {
      foreach ( $template as $ColName=>$Endians) $decodedfilecontents .= $ColName.$BinColumnDelimiter;
      $decodedfilecontents .= $BinLineEnd;
      
      while (!feof($handle)) {
          $lastLine = '';
        foreach ( $template as $ColName=>$Endians){
          $hex  = bin2hex(fread($handle,$Endians));
          if ( $Endians <= 8) {
            $val = hexdec(decodehex($hex));
            if ( $val == 4294967295  ) $val = -1;
          } else {
            $val       = str_replace("\t"," ",hex2str($hex));
          }
          $lastLine .= $val.$BinColumnDelimiter;
//          echo('Column ['.$ColName.']['.$Endians.'] = ['. str_replace( hex2str('CC'),' ',$val).']<br />');
        }
//        echo '<hr />';
        if ( ! feof($handle))
          $decodedfilecontents .= $lastLine.$BinLineEnd;
        
      }
    fclose($handle);

    fwrite($decodedfile,$decodedfilecontents);
    fclose($decodedfile);
  }
  echo '<h1>'.$output.'</h1>';
  echo '<hr />';
  print_r($decodedfilecontents);
}

// ===================================================================================
## FUNCTION FOR EXTRACTING THE skilllevel.bin FILE
## I AM TOO LAZY TO EDIT THE TEMPLATES
function extract_skilllevel_bin($filename,$output){
  global $template            ;
  global $BinColumnDelimiter  ;
  global $BinLineEnd          ;
  $decodedfile          = fopen($output,'w+')   ;
  $decodedfilecontents  = ""                    ;
  $loops                = 0                     ;
  $temp_template        = $template             ;
  unset($temp_template['ID'])                   ;
  $usedTemplate         = $template             ;
  
  $handle = fopen($filename, "r");
  if ($handle) {
      foreach ( $template as $ColName=>$Endians) $decodedfilecontents .= $ColName.$BinColumnDelimiter;
      $decodedfilecontents .= $BinLineEnd;
      
      
      while (!feof($handle)) {
        $loops++;
        if ( $loops % 7 == 1)
          $usedTemplate = $template;
        else {
          $usedTemplate = $temp_template;
          $decodedfilecontents .= '    '.$BinColumnDelimiter;
        }
        $lastLine   = '';

        foreach ( $usedTemplate as $ColName=>$Endians){
          if ( $loops % 7 == 0 && $ColName=='szExplainFileName[128]' ) $Endians = 129;
          $hex  = bin2hex(fread($handle,$Endians));
          if ( $Endians <= 4) {
            $val = hexdec(decodehex($hex));
            if ( $val == 4294967295  ) $val = -1;
            $lastLine.= $val.$BinColumnDelimiter;
          } else {
            $lastLine.= hex2str($hex).$BinColumnDelimiter;
          }
        }
        if ( ! feof($handle) ) $decodedfilecontents .= $lastLine.$BinLineEnd;
      }
    fclose($handle);

    fwrite($decodedfile,$decodedfilecontents);
    fclose($decodedfile);
  }
  echo '<h1>'.$output.'</h1>';
  echo '<hr />';
  print_r($decodedfilecontents);
}

// ===================================================================================

function encodehex($decimal,$endians){
  $hexval = dechex($decimal);
  $hexstrlen        = strlen($hexval)       ;  
  $hexstrindex      = $hexstrlen            ;
  $temphexstr       = ""                    ;
  $result           = ""                    ;
  
  while ($hexstrindex > 0 ){
    if ( $hexstrindex -2 < 0 ){
      $hexstrindex  = 2 ;
      $len          = 1 ;
    } else $len     = 2 ;
    $temphexstr = substr($hexval,$hexstrindex -2, $len );
    if ( $len == 1) 
      $temphexstr   = '0'.$temphexstr       ;
    $hexstrindex   -= 2                     ;
    $result         = $result . $temphexstr ;
  }
  $result = str_pad($result,$endians*2,'0',STR_PAD_RIGHT);
  return $result;
}

// ===================================================================================

function strhex($string, $endians){
  $result   = "";
  $tempdec  = "";
  
  for ($i = 0;$i<strlen($string);$i++) 
    $result .= dechex(ord($string[$i]));
  $result = str_pad($result,$endians*2,"0",STR_PAD_RIGHT);
  return $result;
}

// ===================================================================================

function compile_bin ( $source, $dest ){
  global $template                                                  ;
  global $BinColumnDelimiter                                        ;
  global $BinLineEnd                                                ;
  
  $binName          = explode('.',$dest)                            ;
  $binName          = str_replace('recompiled/ex-','',$binName[0])  ;


  $indexed_template = array_values($template)                       ;
  $template_keys    = array_keys($template)                         ;

  $contents         = file_get_contents($source)                    ;
  $a_contents       = explode($BinLineEnd,$contents)                ;
  
  $handle           = fopen($dest,'w+')                             ;
  
  for ( $index = 1; $index < count($a_contents)-1; $index++){
    set_time_limit(10);
    $line = $a_contents[$index];
    $cols = explode($BinColumnDelimiter,$line);
    for ($ci=0;$ci<count($cols)-1;$ci++){
      $cv = $cols[$ci];
      $clen = $indexed_template[$ci];
      
      if ( $binName == 'monster'){
        if (strpos($template_keys[$ci],'RATE') !== FALSE && strpos($template_keys[$ci],'RATE') == 0 ){
//          if ($template_keys[$ci] != 'RATE')  echo $template_keys[$ci];;
          $template_keys[$ci] = 'RATE';
        }

        switch ($template_keys[$ci]){
          case 'MONEYMIN' : {
            $cv = min(MAX_DROP_RATE, $cv*CRONE_DROP_MIN);
          }; break; ##########################
          case 'MONEYMAX' : {
            $cv = min(MAX_DROP_RATE, $cv*CRONE_DROP_MAX);
          }; break; ##########################
          case 'RATE' : {
            $cv = min(MAX_DROP_RATE, $cv*DROP_RATE);
          }; break; ##########################
        }
      }
      echo 'Line : '.$index.' Column '.$ci.' Total columns '.(count($cols) -1 ).'<br />';
      echo 'Column Data : '.$cv.'<hr />';
      if ( $clen <= 8) {
        fwrite($handle, hex2bin( encodehex($cv,$clen) ) );
      } else {
        fwrite($handle, hex2bin( strhex($cv,$clen) ) );
      }
    }
  }
  fclose($handle);
}

// ===================================================================================

function compile_skilllevel_bin ( $source, $dest){
  global $template                                    ;
  global $BinColumnDelimiter                          ;
  global $BinLineEnd                                  ;
  $temp_template  = $template                         ;
  unset($temp_template['ID'])                         ;
  $used_template  = $template                         ;
  
  $indexed_template = array_values($used_template)    ;

  $contents         = file_get_contents($source)      ;
  $a_contents       = explode($BinLineEnd,$contents)  ;
  
  $handle           = fopen($dest,'w+')               ;
  
  for ( $index = 1; $index < count($a_contents)-1;$index++){
    set_time_limit(10);
    $line = $a_contents[$index];
    $cols = explode($BinColumnDelimiter,$line);

    if ( $index % 7 == 1) {
      $used_template = $template;
//      echo '<hr />';
    } else {
      $used_template = $temp_template;
      array_shift($cols);
//      echo '<br />';
    }

    $tKeys            = array_keys($used_template)      ;
    $indexed_template = array_values($used_template)    ;
    
    $tKeys = array_keys($used_template);
    for ($ci=0;$ci<count($cols);$ci++){
      $cv   = $cols[$ci]              ;
      //$clen = $indexed_template[$ci]  ;
	if(isset($indexed_template[$ci])){
		$clen=$indexed_template[$ci];}  ;
      
//      echo 'Line : '.$index.' Column '.$ci.' Total columns '.(count($cols) -1 ).'<br />';
      if ( $index % 7 == 0 && $ci == count($cols)-1 ) {
       $clen = 129;
      }
      
      if ( $clen <= 4) {
        fwrite($handle, hex2bin( encodehex($cv,$clen) ) );
      } else {
        fwrite($handle, hex2bin( strhex($cv,$clen) ) );
      }
      if(isset($tKey[$ci])){
        echo $tKeys[$ci].' '.$cv.' '.$clen.'<br/>'; }  ;
    }

  }
  fclose($handle);
}

?>