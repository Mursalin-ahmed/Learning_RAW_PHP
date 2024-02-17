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
        $food = "Pizza";
        $Food = "Burger";
        echo 'I Love to eat ' . $Food . '<br>'; 

        $x = 10;
        $y = 20;
         echo $x + $y .'<br>';//kisu return kore na


         print ($x + $y); //+1 return kore

         print $food . '<br>';
         $foods = print('Drinks');
         echo $foods;
        ///variable
         $name = 'Mursalin';
         $name_1 = "Mursalin Ahmed";
         $age = 30;
         $age_1 = 30.2;
         $religion = true;
         $null = null;
         $arr = array('Apple','Banana');
         var_dump($name);
         var_dump($name_1);
         var_dump($age);
         //object
         class Phone {
             var $model;
             function phoneModel ($number){
                $this->model = $number;
                 $model = $number;
                 echo "This is $this->model <br>" ;
             }
         }

         $apple = new phone;
         $apple -> phoneModel('I Phone 13');
         $samsung = new phone;
         $samsung -> phoneModel('S21 Ultra');

         echo strlen('I am loving to code php');


        ?>
</body>
</html>
