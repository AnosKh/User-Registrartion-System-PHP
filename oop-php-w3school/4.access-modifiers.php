<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - Access Modifier Public|Private|Protected</title>
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
</head>

<body>
    <?php 
    class ProLang {
        public $name; 
        public $color; 
        public $lan; 

        function set_name($name){ // == public function 
            $this->name = $name;
        }

        function show_name(){
            echo 'Udemy is written in '. $this->name . '.'; 
        }

        protected function set_color($color){
            $this->color = $color; 
        }

        private function set_lang(){
            $this->lan = $lan; 
        }
    }

    $udemy = new ProLang(); 
    $udemy->set_name('Django');
    $udemy->show_name(); 
    // echo $udemy->set_color('Green'); // Error 
    // echo $udemy->set_lang('Python'); // Error 
?>
</body>

</html>