<?php
/*
Необходимо вывести информацию по всем авторам, на каждой строке:

Имя автора – его email – год рождения.


Затем необходимо вывести информацию по книгам, на каждой строке:

Название книги – имя автора - год выпуска книги.
*/
$dataBase = [

            'authors' => [
                  1 => [
                  'name' => 'Николай Васильевич Гоголь',
                  'email' => 'gogol@gogol.ru',
                  'birth_year' => 1809,
                  ],
                  2 => [
                  'name' => 'Михаил Афанасьевич Булгаков',
                  'email' => 'mihail@bulgakov.ru',
                  'birth_year' => 1891,
                  ],
                  3 => [
                  'name' => 'Лев Николаевич Толстой',
                  'email' => 'lev@tolstoy.ru',
                  'birth_year' => 1828,
                  ],
            ],    
      
            'books' => [
                  1 => [
                  'name' => 'Мертвые души',
                  'year' => 1809,
                  'author' => 1,
                  ],
                  2 => [
                  'name' => 'Ревизор',
                  'year' => 1836,
                  'author' => 1,
                  ],
                  3 => [
                  'name' => 'Мастер и Маргарита',
                  'year' => 1929,
                  'author' => 2,
                  ],
                  4 => [
                  'name' => 'Собачье сердце',
                  'year' => 1925,
                  'author' => 2,
                  ],
                  5 => [
                  'name' => 'Война и мир',
                  'year' => 1865,
                  'author' => 3,
                  ],
                  6 => [
                  'name' => 'Анна Каренина',
                  'year' => 1873,
                  'author' => 3,
                  ],
            ],
       ];

// Имя автора – его email – год рождения
foreach ($dataBase['authors'] as $key0 => $value0) {
      
      foreach ($dataBase['authors'][$key0] as $key1 => $value1) {
            if ($key1==='birth_year') {
                  echo "$value1"."<br>";
            } else {
                  echo "$value1"." - ";
            }
      }

}

echo "<br>";
// Название книги – имя автора - год выпуска книги 
foreach ($dataBase['books'] as $key0 => $value0) {
      
      // книга-год-idАвтора

      foreach ($dataBase['books'][$key0] as $key1 => $value1) {
            $massive[$i++]=$value1;
             if ($key1==='name') {
                  echo "$value1"." - ";
            } elseif ($key1==='author') {
                  echo $dataBase['authors'][$value1]['name']." - ";
            }
      }

      foreach ($dataBase['books'][$key0] as $key1 => $value1) {
            $massive[$i++]=$value1;
             if ($key1==='year') {
                  echo "$value1"."<br>";
            }
      }

}



?>