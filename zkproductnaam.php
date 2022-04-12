<?php include'nav.html'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="stylesheet" href="company.css">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>producten</title>
</head>
<body>
        <main>
        <?php 

        require_once 'dbconnect.php';
        if(isset($_POST['submit'])){
                $search = $_POST['name'];
                $nameFilter = filter_var($search, FILTER_UNSAFE_RAW);
               
                $query=$db->prepare("SELECT * FROM product WHERE prodname LIKE '%". $nameFilter ."%'");
                $query->execute();
                
                if($query->rowCount()>0){
                        $result=$query->fetchAll(PDO::FETCH_ASSOC);
                        echo '<table>';
                        echo '<thead>';
                        echo '<th>naam</th>';
                        echo '<th>prijs</th>';
                        echo '<th>plaatje</th>';
                        echo '</thead>';

                        foreach($result as $rij){
                                echo '<tr>';
                                echo '<td>'.$rij['prodname'].'</td>';
                                echo '<td>'."$ ".$rij['price'].'</td>';
                                ?><td><img style="height: 100px;" src="<?php echo $rij['imageref']?> "</td>
                                <?php
                        }
                        echo '</tr>';
                        echo '</table>';
                }
        }

        ?>
        </main>

</body>
</html>
