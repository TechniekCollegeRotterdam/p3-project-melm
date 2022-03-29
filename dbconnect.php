<<<<<<< HEAD
<?php 
try 
{ 
    $db = new PDO('mysql:host=localhost;dbname=melm', 'root' ,''); 
} 
catch(PDOException $e) 
{ 
    $sMsg = '<p> 
            Regelnummer: '.$e->getLine().'<br /> 
            Bestand: '.$e->getFile().'<br /> 
            Foutmelding: '.$e->getMessage().' 
        </p>'; 
     
    trigger_error($sMsg); 
} 
?> 
=======
<?php

try

{

    $db = new PDO('mysql:host=localhost;dbname=melm', 'root' ,'');

}

catch(PDOException $e)

{

    $sMsg = '<p>

            Regelnummer: '.$e->getLine().'<br />

            Bestand: '.$e->getFile().'<br />

            Foutmelding: '.$e->getMessage().'

        </p>';


    trigger_error($sMsg);

}
>>>>>>> 5561c4d8fb66d8dc80603e8a1f2a6c8fae97a05d
