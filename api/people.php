<?php
//Симуляция: обычно список данных извлекается программным кодом из БД
$people = [
    array("FirstName" => "Yuri", "LastName" => "Andrienko", "City" => "Moscow", "Salary" => 123456),
    array("FirstName" => "Vasya", "LastName" => "Pupkin", "City" => "Moscow", "Salary" => 123456),
    array("FirstName" => "Masha", "LastName" => "Iotovna", "City" => "London", "Salary" => 123456),
    array("FirstName" => "Ivan", "LastName" => "Andreev", "City" => "London", "Salary" => 123456),
    array("FirstName" => "Masha", "LastName" => "Karpovna", "City" => "KZ", "Salary" => 123458)
];

//отфилтруем данные по первым буквам фамилии
$letters = strtolower($_REQUEST["letters"]);
$results = [];
foreach($people as $person){
    if(str_starts_with(strtolower($person["LastName"]),$letters)){
            array_push($results,$person);
    }
}


//отправим извлеченные данные в формате json
echo json_encode($results);