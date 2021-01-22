<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
        class Person{ 
            // Properties 
            public $name; 
            public $color; 

            // Methods | Function 
            function set_name($name){
                $this->name = $name; 
            }
            function get_name(){
                return $this->name; 
            }
        }       

        $name = "HKimhab"; 
        $person_name = new Person(); 

        // set parameter 
        $person_name->set_name($name); 
        echo '<h1>'. $person_name->get_name() . '</h1>'; 
    ?>

    <!-- Outside the class -->
    <!-- <?php
        class Fruit {
        public $name;
        }
        $apple = new Fruit();
        $apple->name = "Apple";
    ?> -->

</body>

</html>