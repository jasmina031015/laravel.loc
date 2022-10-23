<?php

$db = new mysqli('127.0.0.1', 'root', '', 'aslan');
// Подключение к БД ↑

if($db->connect_errno){  // ← connect_errno — Возвращает код ошибки последней попытки соединения
echo 'Нет подключения: ' .$db->connect_error; // ← connect_error — Возвращает описание последней ошибки подключения
exit; // ← Прекращает выполнение скрипта
}
// Проверяет подключение и в случае не удачи подключения выводит ошибки ↑ (блок if)

if($res = $db->query("SELECT name FROM test")){
    while($row = $res->fetch_assoc()){
          print_r(implode(", ", $row ));
    }
}
//   localhost
//    127.0.0.1

