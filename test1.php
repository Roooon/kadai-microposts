<?php
    date_default_timezone_set("Asia/Tokyo") ;
    $now_hour = (int)date("H");
    $now_year = (int)date("Y");
    $now_date = (int)date("Ymd");
    $birth = ($now_date - $_POST['target_birthday'])/10000;
    
    
        function greeting ($hour) {
        $result = "" ;
        
        if(6<= $hour && $hour <12){
            $result = "Good morning" ;
        }
        elseif(12<= $hour && $hour <18){
            $result = "Hello" ;
        }
        else{
            $result = "Good evening" ;
        }
        return $result ;
    }
    ?>
<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8">
        <title>個人情報の入力のお願い</title>    
    </head>  
    <body>
        <form action="test1.php" method="POST">
        <label>Name: <input type="text" name="target_name"></label><br>
        <label>Your Birthday: <input type="number" name="target_birthday"></label>
             <input type="submit" value="send">
        </form>
        <p><?php print greeting($now_hour); ?>, <?php print $_POST['target_name'];?>-san (<?php echo floor($birth);?>)</p>
        <p>Now is <?php print $now_hour ;?> o'clock.</p>
    </body>
</html>    
        
    