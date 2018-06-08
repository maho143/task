<?php
date_default_timezone_set('Asia/Tokyo');
$now_hour = (int)date("H");

?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">

    <title>Hello!</title>
</head>

<body>
    <h1>Hello!</h1>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>

        
    <div id="time">
        <p>It's <?php print $now_hour; ?> o'clock</p>
        <?php if (6 <= $now_hour && $now_hour <12){ ?>
        <p> Good Morning!</p>
        <?php } elseif (12<= $now_hour && $now_hour < 18) { ?>
        <p>Good Afternoon!</p>
        <?php } else { ?>
        <p>Good Evening</p>
        <?php } ?>
     </div>
     
        <nav id="menu">
            <ul>
                <li>Profile</li>
                <li>Hobby 1</li>
                <li>Hobby 2</li>
                <li>Contact</li>
            </ul>
        </nav> 
    </header>
    

    <div id="mainpic">
        <img src="<?php
        $image = array ("images_task/image1.jpg", "images_task/image2.jpg", "images_task/image3.jpg");
        $rand = mt_rand(0,2);
        echo $image[$rand];
        ?>" alt"hello">
    </div>
  
    <div id="wrapper">
        <section id="profile">
            <h2>Profile</h2>
            <h3>田中真帆 Maho Tanaka</h3>
            <p>福岡県出身 1995年5月19日生まれ 22歳 <br>
            福岡県立輝翔館中等教育学校卒業<br>
            関西学院大学総合政策学部国際政策学科卒業<br><br>
            三人兄弟の長女で、かわいい弟が二人いる
            おおざっぱのO型で、よくさっぱりしているねと言われる<br>
            中学高校時代はバスケ部に所属　駅伝部も兼任していた(過去の栄光)<br>
            あのときはカモシカのように細かった<br><br>
            大学時代はよさこいサークルに所属　踊っていた<br>
            アルバイトはスターバックス
            </p>
        </section>

        <section id="profilepic">
           <img src="images_task/profile.png" alt"profile">
        </section>
        
    
        <section id="hobby1">
            <h2>Movie</h2>
        
            <p>好きなこと1つめは、映画鑑賞。<br>
            こうみえて？かなり根暗なので、一人でいるときは部屋を真っ暗にして映画をみる<br>
            netflixで泣ける映画をみて、号泣するのが好き</p>
        </section>
        
        <section id="hobby2">
             <h2>Asian Journey</h2>
             <p>好きなこと2つめはアジア！！<br>
             気候、人柄、食べ物…すべてにおいて好き！！！<br>
             将来は東南アジアのどこかに移住するのが夢。<br>
             特に好きな国の紹介がこちら ☟
             </p>
            <ul>
                <li><a href="malaysia.html"><img src="images_task/malaysia.jpg" alt="malaysia"><div class="country">Malaysia</div></a></li>
                <li><a href="thailand.html"><img src="images_task/thailand.jpg" alt="thailand"><div class="country">Thailand</div></a></li>
                <li><a href="cambodaia.html"><img src="images_task/cambodia.jpg" alt="cambodia"><div class="country">Cambodia</div></a></li>
                <li><a href="vietnam.html"><img src="images_task/vietnam.jpg" alt="vietnam"><div class="country">Vietnam</div></a></li>
            </ul>
        </section>
         
        <section id="contact">
            <h2>Contact</h2>
            <p></p>
        </section>    
            
            
    </div>
</body>

<footer>
    <div id="footer">
        Rakuten 2018Apr NewGrads Maho Tanaka
    </div>
</footer>

</html>
