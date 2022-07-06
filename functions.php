<?php

//возвращает массив пользователей в формате ключ это имя, значение это пароль
function getUsersList($users3){
    $users = array();
    foreach ($users3 as $key => $value) {
      $users[$key] = $value['pass'];
    }
    return $users;
}



// функция для определения времени до окончания акции
 function timeMessage ($time_input) {
    $current_time = time(); //запись отсчета 2 часа
    $time_deadline = ($time_input + 7200) - $current_time;//вычисляем срок действия акции
    $minutes = floor($time_deadline / 60); //минуты
    $hours = floor($minutes / 60); //полные часы
    $minutes = $minutes - ($hours * 60);  //количество оставшихся минут
    $message = nl2br('До окончания специального предложения: ' . $hours. ' ч. ' . $minutes . ' мин.');
    return $message;
}
 ?>