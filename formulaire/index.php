<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <?php
        function add(int $nb1, int $nb2) : int{
           $result= $nb1 += $nb2;
            return $result;
        }
        
        function substract(int $nb1, int $nb2) : int{
            $result= $nb1 -= $nb2;
            return $result;
        }
        
        function multiply(int $nb1, int $nb2) : int{
            $result= $nb1 * $nb2;
            return $result;
        }
        
        function divide(int $nb1, int $nb2) : ?int{
            if( $nb2 === 0){
                return null;
            } else {
            $result= $nb1 / $nb2;
            return $result;
            }
        }
        
        function modulo(int $nb1, int $nb2) : ?int{
            if( $nb2 === 0){
                return null;
            } else{
                $result= $nb1 % $nb2;
            return $result;
            }
            
        }
    ?>
    <form action="index.php" method="POST">
        <fieldset>
            <label for="number1">Numbre 1</label>
            <input type="number" name="number1" id="number1"/>
        </fieldset>
        
        <fieldset>
            <label for="number2">Nombre 2</label>
            <input type="number" name="number2" id="number2"/>
        </fieldset>
        
        <fieldset>
            <label for="operation-select">Choix</label>
            <select name="operation" id="operation-select">
              <option value="">--Choisi ton opération--</option>
              <option value="multiplication">Multiplication</option>
              <option value="division">Division</option>
              <option value="addition">Addition</option>
              <option value="soustraction">Soustraction</option>
              <option value="modulo">Modulo</option>
            </select>
        </fieldset>
        <button type="submit">Envoyer</button>
    </form>
    
    <?php 
        if(isset($_POST["operation"]) && ($_POST["operation"] === "multiplication" )){
            echo $_POST["operation"];
            echo "<br>";
            echo multiply($_POST["number1"], $_POST["number2"]);
        } 
        
        if(isset($_POST["operation"]) && ($_POST["operation"] === "division" )){
            echo $_POST["operation"];
            echo "<br>";
            if ($_POST["number2"] === null) {
                echo "erreur";
            } else {
                echo divide($_POST["number1"], $_POST["number2"]);
            };

        }
        
        if(isset($_POST["operation"]) && ($_POST["operation"] === "addition" )){
            echo $_POST["operation"];
            echo "<br>";
                echo add($_POST["number1"], $_POST["number2"]) ;
        } 
        
        if(isset($_POST["operation"]) && ($_POST["operation"] === "soustraction" )){
            echo $_POST["operation"];
            echo "<br>";
            echo substract($_POST["number1"], $_POST["number2"]) ;
        } 
        
        if(isset($_POST["operation"]) && ($_POST["operation"] === "modulo" )){
            echo $_POST["operation"];
            echo "<br>";
            if ($_POST["number2"] === null) {
                echo "erreur";
            } else {
                echo modulo($_POST["number1"], $_POST["number2"]) ;
            };
        } 
    ?>
</body>
</html>
