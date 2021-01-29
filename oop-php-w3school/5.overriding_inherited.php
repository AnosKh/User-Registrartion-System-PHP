<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - Overriding Inherited Methods</title>
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
    <style>
    b {
        color: green;
    }
    </style>
</head>

<body>
    <?php 
    class ProLang {
        public $name; 
        public $color; 

        public function __construct($name, $color){
            $this->name = $name; 
            $this->color = $color; 
        }

        public function show_allData(){
            echo 'Udemy is written in '. $this->name . '.' . 'Success is ' . $this->color; 
        }
    }

    class Udemy extends ProLang{
        public $year; 
        // Override construct 
        public function __construct($name, $color, $year){
            $this->name = $name; 
            $this->color = $color; 
            $this->year = $year; 
        }
        public function show_allData(){
            echo 'Udemy is written in '. $this->name .' and it is written in'. $this->year . '.' . ' <b>Success</b> is ' . $this->color; 
        }
    }

    $udemy = new Udemy('Python', 'green', '1991'); 
    $udemy->show_allData(); 
?>
</body>

</html>