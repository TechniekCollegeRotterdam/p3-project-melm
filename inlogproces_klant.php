
<?php
session_start();
    if(isset ($_POST['submitBtnLogin'])) {
    require 'dbconnect.php';
    $userId = $_POST['userid'];
    $pword = $_POST['password'];
    try {
        $query = "SELECT * FROM client WHERE emailadress = :email";
        $stmt = $db->prepare($query);
        $stmt->bindValue(':email', $userId);
        $stmt->execute();
        if ($stmt->rowCount() == 1) {
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            if(password_verify($pword, $result['passwrd']))
            {
                $_SESSION['clogin'] = true;
                $_SESSION['idclient'] = $result['idclient'];
                $_SESSION['surname'] = $result['surname'];
                $_SESSION['givenname'] = $result['givenname'];
                echo "<p>";
                echo "U bent succesvol ingelogd!";
                echo "</p>";
                header('Refresh: 3; url=homeklant.php');


            } else {
                echo "<p>";
                echo "Combinatie klopt niet!";
                echo "</p>";
                header('Refresh: 3; url=index.php');
    exit(); 
            }
        } else {
            echo "<p>";
            echo "Combinatie klopt niet!";
            echo "</p>";
            header('Refresh: 3; url=index.php');
    exit(); 
        }
    } catch(PDOException $e)
    {
    $sMsg = '<p>
    Regelnummer: '.$e->getLine().'<br> />
    Bestand: '.$e->getFile().'<br> />
    Foutmelding: '.$e->getMessage().'
    </p>';
    trigger_error($sMsg);
    }
    }

?>