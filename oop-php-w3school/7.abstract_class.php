<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - Abstract Class</title>
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
</head>

<body>
    <?php 
    /*  Note about Abstract Class in PHP 
            - The child class method must be defined with the same name and it redeclares the parent abstract method
            - The child class method must be defined with the same or a less restricted access modifier
            - The number of required arguments must be the same. However, the child class may have optional arguments in addition
    */
    // Parent Class 
    abstract class ProgrammingLanguage {
        public $name; 
        public function __construct($name){
            $this->name = $name; 
        }
        abstract public function intro(): string; 
        // Method how to declare function 
        /*  abstract public function someMethod1();
            abstract public function someMethod2($name, $color);
            abstract public function someMethod3() : string; 
        */
    }

    abstract class ParentClass {
        // Method with an argument 
        abstract protected function PrefixName($pre_name); 
    }

    // Child Class 
    class Python extends ProgrammingLanguage {
        public function intro(): string {
            return "Learn Data Scient, Learn $this->name"; 
        }
    }

    // Child Class 
    class PHP extends ProgrammingLanguage {
        public function intro(): string {
            return "Learn Web, Learn $this->name"; 
        }
    }

    class ChildClass extends ParentClass {
        public function PrefixName($pre_name){
            if($pre_name == 'Kim'){
                $prefix = 'Mr.'; 
            }
            elseif($pre_name == 'Srey'){
                $prefix = 'Mrs.'; 
            }
            else{
                $prefix = ''; 
            }
            return $prefix . ' '. $pre_name; 
        }
    }

    // Create a new object from parent class 
    $python = new Python('Python'); 
    echo $python->intro() . "<br />";
    
    $php = new PHP('PHP'); 
    echo $php->intro(). '<br />'; 

    echo '<center><b>Abstract Class with Argument</b></center><hr />'; 
    // Create a new object from ParentClass 
    $class = new ChildClass; 
    echo $class->PrefixName('Kim'). '<br />';
    echo $class->PrefixName('Srey');  
    
?>
</body>

</html>