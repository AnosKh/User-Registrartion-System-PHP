<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - Inheritance</title>
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
</head>

<body>
    <?php 
    class Car{
        public $name; 
        public $color; 

        public function __construct($name, $color){
            $this->name = $name; 
            $this->color = $color; 
        }

        protected function import(){
            echo "This car {$this->name} and {$this->color} was made in 2020."; 
        }

        private function privateTest(){
            echo "This is a private function, {$this->name} and {$this->color}"; 
        }
    }
    class Honda extends Car{
        public function msg(){
            echo 'Is it Honda or ' . $this->name . ' ? <br />'; 
            $this->import(); 
        }
        
    }

    $honda = new Honda('Telsa', 'Black White'); 
    $honda->msg(); 
    // fix error to add in extends class, cos it is protected functio
    // $honda->import(); 
?>
</body>

</html>