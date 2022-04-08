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

?>
>>>>>>> 59dfd36a3f9443a7b23cfa497e90690bad693366
