<?php
echo "Вариант 1\n
Написать программу для игры в \"Крестики-нолики\" (tic-tac-toe) с компьютером на поле произвольного размера (от 3x3 до 10x10).

Для отображения используются символы (фигуры) \"X\" и \"O\".
Начинают ходить всегда крестики, кем играет человек определяется случайным образом.
Информация о датах и исходах всех партий, а также о всех ходах, сделанных во время игры, должна сохраняться в базе данных SQLite.
Для каждой партии в базе должна храниться следующая информация:
    \tРазмер поля
    \tДата игры
    \tИмя игрока
    \tКакой фигурой играл человек
    \tКакая фигура выиграла в партии
    \tЗапись ходов в формате: номер хода | координата X | координата O
В программе должны быть реализованы три режима, которым соответствуют ключи:
    \t--new. Новая игра.
    \t--list. Вывод списка всех сохраненных партий.
    \t--replay id. Повтор игры с идентификатором id.";
?>