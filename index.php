<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php 
        class car{
            public $model;
            private $color;
            public function __construct($color,$model){
                $this-> color = $color;
                $this-> model = $model;
            }
            public function move(){
                echo "one car with model ".$this -> model." and " .$this -> color." color goen. <br>";
            }
        }
        echo __DIR__.DIRECTORY_SEPARATOR.'classes'.'class-'.$className.'';
        // new animal();
        // function __autoload($className){
            
        // }
    ?>
</body>

</html>