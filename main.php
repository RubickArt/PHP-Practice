<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Практика </title>
    <link rel="stylesheet" href="styles1.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
     
        <div class="about_me">
            <?php if ($thisPage == 'Index') : ?>
                <h1>  <?php  echo $p  ?> </h1>
            <?php endif; ?>

            <div class="data">
            <?php if($thisPage == 'About') : ?>
                <div class="myImg">
                    <?php  echo '<img src="img/php.jpg">' ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $surname . '<br>'; 
                          echo 'Проживаю в городе', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> В этом модуле: </p>
                    <p>1. Научилися создавать переменные.</p>
                    <p>2. Изучил простые операции с ними.</p>
                    <p>3. Возможно выполнил все условия этого задания.
                    <p>4. Не подружился с CSS.</p> 
                    <?php endif; ?>
                </div>
                <div class="knowledge">
                <?php if ($thisPage == 'Skills') : ?>
                    <?php   echo $a, '<br>','Или число: ', $b, '<br>'; ?> <br>
                    <br>
                    <?php
                    echo 'Вот пример арифметики: <br><br>';
                        $a = 10; 
                        $b = 20;
                        $c = $a + $b;
                        echo "a = $a, <br>, b = $b, <br>, a + b = $c" ;
                    ?>  <br>
                <?php endif; ?>
            </div>
        </div>

            

            <div class="article">
                <p class="text">
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit. 
                    Recusandae asperiores ducimus dolore explicabo. Animi est amet quibusdam molestias! 
                    Minus laudantium sapiente dignissimos possimus natus cumque delectus sed, accusantium totam quia?
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
