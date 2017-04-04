<?php

class operation extends createCon {
   
    
    function InsertQuery($tabel,$data) {
        $count = 0;
        $fields = '';

        foreach($data as $col => $val) {
           if ($count++ != 0) $fields .= ', ';
          
           $myval =  $this->con->real_escape_string ($val);
           
           $fields .= "`$col` = '$val'";
        }  

       $query = "INSERT INTO $tabel SET $fields;";
       
       $this->con->query($query);  
   
}

} 

?>
 