<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - Infterface</title>
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
</head>

<body>
    <h1>Interface PHP OOP</h1>
    <hr />
    <?php 
    /*  Note about Interface 
            - Interface cannot have properties, white abstract classes can 
            - All Infterace methods must be public, while abstract class methods is public or protected 
            - All Methods in an interface are abstract, so they cannot be implemented in code and the abstract keyword is not necessary 
            - Classes can implement an interface while inheriting from another class at the same time 
    */
    interface Apple {
        public function Product(); 
    }

    class Phone implements Apple{
        public function Product(){
            echo '<b>Apple:</b> iphone' . '<br />'; 
        }
    }

    class Google implements Apple{
        public function Product(){
            echo '<b>Google:</b> Google Chrome' . '<br />'; 
        }
    }

    class Amazon implements Apple{
        public function Product(){
            echo '<b>Amazon:</b> Amazon E-commerce'; 
        }
    }

    $iphone = new Phone(); 
    $iphone->Product(); 

    $google = new Google(); 
    $amazon = new Amazon(); 
    $alls = array($google, $amazon); 

    // Tell the alls to make Product 
    foreach($alls as $all){
        $all->Product(); 
    }
?>
</body>

</html>