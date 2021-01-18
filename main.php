<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Моя страница</title>
        <link rel="stylesheet" href="styles.css" />
    </head>
    <body>
        <div class="flex-container">
            <div class="header">
                <?php include 'logo.php' ?>
                <?php include 'menu.php' ?>
            </div>
            <div class="about">
                <h2><?php echo $p ?></h2>
                <div class="main">
                    <div class="myphoto">
                        <img src="images/IMG_20200629_130646 1.png">
                    </div>
                    <div class="fullname">
                        <p>
                            <?php
                                echo '<b>'.$surname, ' ', $name.'</b><br>';
                                echo 'Возраст: '.$age.' лет<br>';
                                echo 'Город: '.$city.'<br>';
                                echo 'Регион: '.$region.'<br><br>';
                            ?>
                            С появлением интернета, с головой увлёклся этой темой, и теперь почти живу Он-Лайн.<br>
                            Это уже не просто увлечение, но и нормальный заработок для меня, на этом конечно не собираюсь останавливаться, а буду стараться добиться ещё больших результатов!<br>
                            Интернет сообщество очень интересно.
                        </p>
                    </div>
                </div>
                    <div class="knowledge">
                    <p>
                        <?php
                            include 'knowledge.php';
                            echo $a, $b, $c.'<br>';

                            $a = 15;
                            $b = 25;
                            $c = $a + $b;
                            echo 'Из сумма чисел 15 и 25 равна '.$c.'<br>';
                            echo $d;
                        ?>
                    </p>
                </div>
            </div>
            <div class="footer">
                <?php include 'footer.php' ?>
            </div>
        </div>
    </body>
</html>