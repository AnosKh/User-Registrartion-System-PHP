<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OOP PHP -Constructor</title>
    <link rel="shortcut icon" href="https://www.php.net/favicon.ico">
</head>

<body>
    <?php 
    class Account{
        public $acc_name; 
        public $category_acc; 

        function __construct($acc_name, $category_acc){
            $this->acc_name = $acc_name; 
            $this->category_acc = $category_acc; 
        }

        function get_name(){
            return $this->acc_name; 
        }

        function get_category(){
            return $this->category_acc; 
        }       
    }
    
    $account_name = "General Income"; 
    $category_name = 'Income'; 

    $name_cate = new Account($account_name, $category_name); 
    echo 'Account Name: '. $name_cate->get_name()."<br />"; 
    echo 'Category Name: '.$name_cate->get_category(); 
        
?>
</body>

</html>