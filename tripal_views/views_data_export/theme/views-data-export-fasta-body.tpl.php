<?php
//print_r($themed_rows);
print $defline;
foreach ($themed_rows as $index => $fields){
   $defline = array();
   $residues = '';
   foreach ($fields as $key => $value){
     if(strcmp($key,'residues')==0){
        $residues = wordwrap($value, 60, "\r\n", true);
     } 
     if(strcmp($key,'defline')==0){
        $defline = $value;
     }
   }
   print ">$defline\r\n";
   print "$residues\r\n";
}

