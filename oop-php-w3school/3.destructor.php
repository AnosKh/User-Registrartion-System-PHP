<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - Destruct</title>
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
</head>

<body>
    <?php 
    class Laptop{
        public $name; 
        public $model; 
        
        function __construct($name, $model){
            $this->name = $name; 
            $this->model = $model;         
        }
        
        // __destruct to stop script or must write at end of line 
        function __destruct(){
            echo "I Love Laptop <b>{$this->name}</b> and Model <b>{$this->model}.</b>"; 
        }
    }

    $laptop = new Laptop('Mac Book Pro', 'Apple'); 
    
        
?>
</body>

</html>