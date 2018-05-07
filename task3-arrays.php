<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
    <?php
    $elements = [
 [
   "element" => "input",
   "htmltype" => "text",
   "name" => "firstname",
   "type" => "string",
   "placeholder" => "Введите имя"
 ],
 [
   "element" => "input",
   "htmltype" => "text",
   "name" => "age",
   "type" => "integer",
   "placeholder" => "Введите возраст"
 ],
 [
   "element" => "input",
   "htmltype" => "radio",
   "name" => "gender",
   "type" => "boolean",
   "value" => "male",
   "label" => "мужской"
 ],
 [
   "element" => "input",
   "htmltype" => "radio",
   "name" => "gender",
   "value" => "female",
   "type" => "boolean",
   "label" => "женский"
 ],
 [
   "element" => "input",
   "htmltype" => "submit",
   "value" => "Отправить"
 ],
];

//Создаем функцию, которая принимает массив с различными свойствами HTML-элемента, (включая его название 
//и атрибуты) и создает html-разметку этого тэга :
function constructorForElement($OneHtmlElementInArray){
foreach ($htmlElementInArray as $key => $value) {
        if ($key == "element"){
            echo "<".$value." ";
        } 
        elseif($key == "htmltype"){
            echo " type=".$value." ";
        }
        else {
            echo $key . "='".$value."' ";
        };
} 
echo "/>";
}

//Создаем функцию htmlConstructor которая принимает многомерный массив HTML элементов и с помощью функции 
//constructorForElement создает разметку на основании многомерного массива
function htmlConstructor($htmlElementsArray) {
    foreach($htmlElementsArray as $htmlElement) {
    echo "<div class = 'row'>";
constructorForElement($htmlElement);
    echo "</div>"; 
    }
}
    ?>
    
<form>
    <?php htmlConstructor($elements); ?>
</form>
  
</body>
</html>