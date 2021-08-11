<?php
//測試時，在網址上指定a,b值


include __DIR__. '/a0802-08-queryString.php';  //更推薦的寫法，從資料夾找出相對路徑的檔案，整個拿到會變成絕對路徑。
// include 'a0802-08-queryString.php';
//include 表示「包含」某個php檔案 (也可以包text, html，但php最多)；相當於把指定檔案的程式碼內容，都貼過來
//找不到資源，發出warning

require __DIR__.'/a0802-08-queryString.php'; 
// require 'a0802-08-queryString.php'; 
//找不到資源，發出error
//include & require的用法一樣，差別在於錯誤時的警示



// include_once & require_once : 較少使用，代表整份檔案只能用一次include，後面要再include就會出錯。

// 大忌，無限循環include！ a包b, b包c, c包a -> 會出錯哭哭！

// __DIR__ – The directory of the file.