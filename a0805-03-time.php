<h2>
    <?php 
    // //若使用公共電腦無法改預設，僅設定此檔案的時區
    // date_default_timezone_set('Asia/Taipei');
    
    echo time ().'<br>';
    echo date("Y-m-d H:i:s").'<br>'; //現在時間
    echo date("Y-m-d H:i:s", time()+40*24*60*60).'<br>';   //40天以後的時間，40天＊24小時＊60分鐘＊60秒
    echo date("D N w").'<br>'; //Mon to Sun, 1(Monday) to 7(Sunday), 0(Sunday) to 6(Saturday)
    
    $t = strtotime('2021/08/08'); //timestamp
    echo date("Y-m-d H:i:s", $t).'<br>';




    // 時間格式都有國際標準規範，電腦預設格林威治時間
    // 更多時間範例 https://www.php.net/manual/en/function.date
    // DateTime::format https://www.php.net/manual/en/datetime.format 
    // time zone map https://www.timeanddate.com/time/map/
    // 時間以「秒」為單位


    ?>
</h2>

<!-- 改變電腦預設時區：
1. 找到檔案 /xamppfiles/etc/xampp/php.ini
2. 註解預設的 date.timezone=Europe/Berlin
3. 寫入 date.timezone=Asia/Taipei -->