<?php 


//如果重複出現session_start也會出錯，ex. 在include不同檔案時
//較保守的作法，是其他檔案使用if條件式(init.php的作法)
session_start();

if(! isset($_SESSION)){
    session_start();
}


//var_dump印出變數的相關訊息 -> 確認session內建的變數
//如果沒有session start，session就會被視為空值 -> 根本沒有session這個變數
var_dump($_SESSION);


