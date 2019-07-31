<?php
/**
 * 25. Ваше задание создать массив, наполнить это случайными значениями (функция rand),
найти максимальное и минимальное значение и поменять их местами.
 */
$a = [];
for ($b = 0; $b < 10; $b++) {
    $a[] = rand(1, 80);
}
echo '<p>Исходный масив</p>';
echo '<pre>';
print_r($a);
echo '</pre>';

// Находим максимальное и минимальное значения
$max = array_search(max($a), $a);
$min = array_search(min($a), $a);
echo "<p>Максимальрное значение: $a[$max]</p>";
echo "<p>Минимальное значение: $a[$min]</p>";

// Меняем их местами
$a[$max] = $a[$max] + $a[$min] - ($a[$min] = $a[$max]);
echo '<p>Полученный масcив</p>';
echo '<pre>';
print_r($a);
echo '</pre>';
