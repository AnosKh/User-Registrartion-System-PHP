<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - PHP Net Abstract Class</title>
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
</head>

<body>
    <h1>Abstract Class from php.net</h1>
    <hr />
    <?php 
     /*  Note about Abstract Class in PHP 
            - The child class method must be defined with the same name and it redeclares the parent abstract method
            - The child class method must be defined with the same or a less restricted access modifier
            - The number of required arguments must be the same. However, the child class may have optional arguments in addition
    */
    abstract class AbstractClass {
        
        // Force Extending classs to define this method 
        abstract protected function getValue(); 
        abstract protected function prefixValue($preFix); 

        // Method Common 
        public function printOut(){
            echo $this->getValue() . '<br \>'; 
        }
    }

    class Child1 extends AbstractClass{
        protected function getValue(){
            return 'Child Class 1'; 
        }

        public function prefixValue($preFix){
            // use double quote better than single quote with return 
            return "{$preFix}Child Class 1"; 
        }
        
    }

    // Create a new object from parent abstract class 
    $child1 = new Child1; 
    $child1->printOut(); 
    echo $child1->prefixValue('PreFix_');     
?>
    <hr style="width:20%; text-align:left;margin-left:0;">
    <h3>Detail wtih Code with below Image</h3>
    <img src="./public/image/7.exa1-abstract_class.php_net.php.png" title="Detail about Code">


</body>

</html>