<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест по трехмерной графике</title>
</head>
<body>

<h2>Тест по трехмерной графике</h2>

<form method="post" action="">
    <?php
    // Вопросы и варианты ответов
    $questions = [
        "1. Что представляет собой трехмерная графика?" => [
            "a" => "Совокупность математических уравнений",
            "b" => "Набор векторов и линий",
            "c" => "Объемные пиксели",
            "d" => "Исходный код программы",
            "correct" => "c"
        ],
        "2. Как называется каждый отдельный объемный элемент на трехмерном изображении?" => [
            "a" => "Вектор",
            "b" => "Объемсель",
            "c" => "Пиксель",
            "d" => "Точка",
            "correct" => "b"
        ],
        "3. Какое расширение файла чаще всего связано с трехмерной графикой?" => [
            "a" => ".obj",
            "b" => ".3ds",
            "c" => ".ai",
            "d" => ".eps",
            "correct" => "b"
        ],
        "4. Как изменение размера трехмерного изображения может повлиять на качество изображения?" => [
            "a" => "Не влияет",
            "b" => "Улучшает",
            "c" => "Деградирует",
            "d" => "Зависит от формата",
            "correct" => "c"
        ],
        "5. Какие изображения обычно создаются с использованием трехмерной графики?" => [
            "a" => "Логотипы",
            "b" => "Анимации",
            "c" => "Фотографии",
            "d" => "Иконки",
            "correct" => "b"
        ],
        "6. Какой формат изображения подходит для сохранения трехмерных моделей?" => [
            "a" => ".jpg",
            "b" => ".obj",
            "c" => ".gif",
            "d" => ".tiff",
            "correct" => "b"
        ],
        "7. Что такое разрешение изображения в контексте трехмерной графики?" => [
            "a" => "Цветовая гамма изображения",
            "b" => "Количество пикселей на дюйм",
            "c" => "Глубина цвета изображения",
            "d" => "Количество точек на дюйм",
            "correct" => "d"
        ],
        "8. Каким образом можно уменьшить размер файла трехмерной модели?" => [
            "a" => "Увеличивая разрешение",
            "b" => "Уменьшая разрешение",
            "c" => "Добавляя больше цветов",
            "d" => "Используя сжатие формата",
            "correct" => "b"
        ],
        "9. Какие инструменты обычно используются для редактирования трехмерных моделей?" => [
            "a" => "Кисть и Перо",
            "b" => "Линейка и Градиент",
            "c" => "3D-манипуляторы и Модификаторы",
            "d" => "Фильтры и Эффекты",
            "correct" => "c"
        ],
        "10. Каким образом можно добавить эффект 'металлического блеска' к трехмерной модели?" => [
            "a" => "Используя градиенты",
            "b" => "Применяя фильтры",
            "c" => "Работая с текстурой",
            "d" => "Изменяя глубину цвета",
            "correct" => "c"
        ],
        "11. Какой эффект достигается с использованием инструмента 'Мягкая тень' в трехмерной графике?" => [
            "a" => "Увеличение контрастности",
            "b" => "Создание мягких теней",
            "c" => "Размытие изображения",
            "d" => "Добавление шума",
            "correct" => "b"
        ],
        "12. Каким образом можно создавать эффект 'реалистичной травы' в трехмерной графике?" => [
            "a" => "Использование градиентов",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование анимации",
            "correct" => "b"
        ],
        "13. Какие инструменты обычно используются для создания эффекта 'реалистичной вспышки света' в трехмерной графике?" => [
            "a" => "Градиенты и инструмент 'Вспышка'",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование фильтров размытия",
            "correct" => "a"
        ],
        "14. Каким образом можно создавать эффект 'реалистичного тумана' в трехмерной графике?" => [
            "a" => "Использование инструмента 'Туман'",
            "b" => "Применение градиентов",
            "c" => "Добавление текстур",
            "d" => "Использование фильтров размытия",
            "correct" => "a"
        ],
        "15. Какие инструменты обычно используются для создания эффекта 'реалистичной вспышки' в трехмерной графике?" => [
            "a" => "Градиенты и инструмент 'Вспышка'",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование анимации",
            "correct" => "a"
        ],
        "16. Каким образом можно создавать эффект 'реалистичного дыма' в трехмерной графике?" => [
            "a" => "Использование инструмента 'Дым'",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование фильтров размытия",
            "correct" => "a"
        ],
        "17. Какие инструменты обычно используются для создания эффекта 'реалистичной вспышки' в трехмерной графике?" => [
            "a" => "Градиенты и инструмент 'Вспышка'",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование анимации",
            "correct" => "a"
        ],
        "18. Каким образом можно создавать эффект 'реалистичного металла' в трехмерной графике?" => [
            "a" => "Использование градиентов",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование анимации",
            "correct" => "a"
        ],
        "19. Каким образом можно создавать эффект 'реалистичного стекла' в трехмерной графике?" => [
            "a" => "Использование инструмента 'Стекло'",
            "b" => "Применение градиентов",
            "c" => "Добавление текстур",
            "d" => "Изменение глубины цвета",
            "correct" => "a"
        ],
        "20. Какие инструменты обычно используются для создания эффекта 'реалистичного дыма' в трехмерной графике?" => [
            "a" => "Градиенты и инструмент 'Дым'",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование фильтров размытия",
            "correct" => "a"
        ],
        "21. Каким образом можно создавать эффект 'реалистичной пыли' в трехмерной графике?" => [
            "a" => "Использование инструмента 'Пыль'",
            "b" => "Применение градиентов",
            "c" => "Работа с текстурой",
            "d" => "Использование фильтров размытия",
            "correct" => "a"
        ],
           "22. Какие инструменты обычно используются для создания эффекта 'реалистичного дыма' в трехмерной графике?" => [
            "a" => "Градиенты и инструмент 'Дым'",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование фильтров размытия",
            "correct" => "a"
        ],
        "23. Каким образом можно создавать эффект 'реалистичной пыли' в трехмерной графике?" => [
            "a" => "Использование инструмента 'Пыль'",
            "b" => "Применение градиентов",
            "c" => "Работа с текстурой",
            "d" => "Использование фильтров размытия",
            "correct" => "b"
        ],
        "24. Какие инструменты обычно используются для создания эффекта 'реалистичной вспышки света' в трехмерной графике?" => [
            "a" => "Градиенты и инструмент 'Вспышка'",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование анимации",
            "correct" => "a"
        ],
        "25. Каким образом можно создавать эффект 'реалистичного тумана' в трехмерной графике?" => [
            "a" => "Использование инструмента 'Туман'",
            "b" => "Применение градиентов",
            "c" => "Добавление текстур",
            "d" => "Использование фильтров размытия",
            "correct" => "b"
        ],
        "26. Какие инструменты обычно используются для создания эффекта 'реалистичной травы' в трехмерной графике?" => [
            "a" => "Градиенты и инструмент 'Трава'",
            "b" => "Применение текстур",
            "c" => "Работа с цветовыми слоями",
            "d" => "Использование анимации",
            "correct" => "a"
        ],
        "27. Каким образом можно создавать эффект 'реалистичной вспышки' в трехмерной графике?" => [
            "a" => "Использование инструмента 'Вспышка'",
            "b" => "Применение градиентов",
            "c" => "Работа с текстурой",
            "d" => "Использование фильтров размытия",
            "correct" => "a"
        ],
        "28. Что такое трехмерная графика?" => [
            "a" => "Математическая величина с направлением и длиной",
            "b" => "Точка в пространстве",
            "c" => "Фрагмент трехмерного изображения",
            "d" => "Цветовой объем",
            "correct" => "b"
        ],
        "29. Раздел 2 ПМ.09. Трехмерная графика. Какие из нижеперечисленных форматов файлов являются трехмерными?" => [
            "a" => "JPEG",
            "b" => "OBJ",
            "c" => "PNG",
            "d" => "GIF",
            "correct" => "b"
        ],
        "30. Каким образом определяется размер трехмерной модели?" => [
            "a" => "Количество вершин и ребер",
            "b" => "Объем объекта",
            "c" => "Используемый цветовой профиль",
            "d" => "Количество слоев в модели",
            "correct" => "a"
        ]
    ];

    // Обработка отправленной формы
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $score = 0;

        foreach ($questions as $question => $options) {
            if (isset($_POST[getInputName($question)])) {
                $selectedOption = $_POST[getInputName($question)];

                if ($selectedOption == $options["correct"]) {
                    $score++;
                }
            }
        }

        // Вывод результатов
        echo "<h3>Результаты теста:</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Правильные ответы</th><th>Неправильные ответы</th><th>Оценка</th></tr>";
        echo "<tr><td>{$score}</td><td>" . (count($questions) - $score) . "</td><td>" . calculateGrade($score, count($questions)) . "</td></tr>";
        echo "</table>";
    }

    // Функция для расчета оценки
    function calculateGrade($score, $totalQuestions) {
        if ($totalQuestions == 0) {
            return 'Невозможно вычислить оценку';
        }

        $percentage = ($score / $totalQuestions) * 100;

        if ($percentage >= 90) {
            return 'Отлично';
        } elseif ($percentage >= 70) {
            return 'Хорошо';
        } elseif ($percentage >= 50) {
            return 'Удовлетворительно';
        } else {
            return 'Неудовлетворительно';
        }
    }

    // Функция для получения имени поля ввода
    function getInputName($question) {
        return str_replace([' ', '.', '?'], '_', $question);
    }
    ?>

    <br>

    <?php foreach ($questions as $question => $options): ?>
        <fieldset>
            <legend><?php echo $question; ?></legend>
            <?php foreach ($options as $key => $option): ?>
                <?php if ($key !== "correct"): ?>
                    <label>
                        <input type="radio" name="<?php echo getInputName($question); ?>" value="<?php echo $key; ?>" required>
                        <?php echo $option; ?>
                    </label>
                    <br>
                <?php endif; ?>
            <?php endforeach; ?>
        </fieldset>
    <?php endforeach; ?>

    <br>

    <input type="submit" value="Проверить">
</form>

</body>
</html>
