<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP - Constants</title>
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
</head>

<body>
    <?php 
    /*  Note about const or class constants in php 
            - const word is case-sensitive word 
            - recommend to use const word is upper-case letter 
                . class::CONST (Variable)  
            - 
    */
    class Greeting {
        const GRE_WORDS = " A: <b> Hello</b> and How are you today? .<br />"; 
        const REPLY = "B: I'm good, thank you."; 
        // to sue REPLY in self class with function 
        public function UseReply(){
            echo self::REPLY; 
        }
        
    }
    // Simple Constants 
    echo Greeting::GRE_WORDS; 

    // Use UseReply function 
    $Reply_Word = new Greeting(); 
    $Reply_Word->UseReply(); 
?>
</body>

</html>