<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест по компьютерной графике</title>
</head>
<body>

<h2>Тест по компьютерной графике</h2>

<form method="post" action="">
    <?php
    // Вопросы и варианты ответов
    $questions = [
    "1. Что такое компьютерная графика и какие задачи она решает?:" => [
        "a" => "Отображение текстовой информации",
        "b" => "Обработка звука",
        "c" => "Создание и редактирование графических изображений",
        "d" => "Анализ данных",
        "correct" => "c"
    ],
    "2. Какие основные типы компьютерной графики существуют?:" => [
        "a" => "Двумерная и трехмерная",
        "b" => "Аудио и видео",
        "c" => "Текстовая и числовая",
        "d" => "Пространственная и временная",
        "correct" => "a"
    ],
    "3. Какие программы используются для создания компьютерной графики?:" => [
        "a" => "Microsoft Word",
        "b" => "Adobe Photoshop",
        "c" => "Notepad",
        "d" => "Microsoft Excel",
        "correct" => "b"
    ],
    "4. Как работают графические редакторы, и приведите примеры таких программ?:" => [
        "a" => "Они создают музыкальные композиции",
        "b" => "Они редактируют фотографии и изображения",
        "c" => "Они обрабатывают текстовые документы",
        "d" => "Они управляют процессорами",
        "correct" => "b"
    ],
    "5. Что такое разрешение изображения и как оно влияет на его качество?:" => [
        "a" => "Количество цветов в изображении",
        "b" => "Общий объем памяти, занимаемый изображением",
        "c" => "Количество пикселей на единицу длины",
        "d" => "Способность изображения быть анимированным",
        "correct" => "c"
    ],
    "6. Какие форматы файлов чаще всего используются для хранения графических изображений?:" => [
        "a" => ".txt",
        "b" => ".pdf",
        "c" => ".img",
        "d" => ".png",
        "correct" => "d"
    ],
    "7. Какие основные принципы композиции визуальных элементов в компьютерной графике?:" => [
        "a" => "Рандомизация и хаос",
        "b" => "Симметрия и баланс",
        "c" => "Однообразие и монотонность",
        "d" => "Избыточность и излишества",
        "correct" => "b"
    ],
    "8. Какие инструменты позволяют создавать эффекты тени и света в графических редакторах?:" => [
        "a" => "Кисти и перья",
        "b" => "Штамп и лассо",
        "c" => "Градиент и кисть для размытия",
        "d" => "Дополнительные фильтры",
        "correct" => "c"
    ],
    "9. Каким образом используется цвет в компьютерной графике, и какие цветовые модели существуют?:" => [
        "a" => "Цвет определяется только на основе насыщенности",
        "b" => "Цвет задается оттенком и яркостью",
        "c" => "Цвет зависит от положения в пространстве",
        "d" => "Цветовые модели не применяются в компьютерной графике",
        "correct" => "b"
    ],
    "10. Как создать анимацию в компьютерной графике, и какие технологии чаще всего применяются?:" => [
        "a" => "Механические карусели и шестеренки",
        "b" => "Цифровые моделирование и рендеринг",
        "c" => "Термодинамические процессы и эффекты",
        "d" => "Кинетические установки и макеты",
        "correct" => "b"
    ],
    "11. Какие методы существуют для оптимизации графических изображений в целях улучшения производительности веб-сайтов?:" => [
        "a" => "Добавление как можно больше изображений",
        "b" => "Использование форматов изображений с большим весом",
        "c" => "Кэширование изображений",
        "d" => "Отключение сжатия изображений",
        "correct" => "c"
    ],
    "12. Как работают инструменты ретуширования и наложения фильтров в графических редакторах?:" => [
        "a" => "Они создают новые графические элементы",
        "b" => "Они изменяют цвета фона",
        "c" => "Они улучшают качество изображений",
        "d" => "Они удаляют нежелательные дефекты и добавляют эффекты",
        "correct" => "d"
    ],
    "13. Как создать эффект панорамирования (parallax) с использованием графики на веб-странице?:" => [
        "a" => "Смешивание цветов фона",
        "b" => "Использование фоновых изображений с разными скоростями движения",
        "c" => "Вставка видео на фон страницы",
        "d" => "Применение анимации всплывающих окон",
        "correct" => "b"
    ],
    "14. Какие требования к изображениям следует учитывать при разработке мобильных версий веб-сайтов?:" => [
        "a" => "Использование только черно-белых изображений",
        "b" => "Уменьшение размера изображений",
        "c" => "Отсутствие адаптации изображений под разные разрешения экранов",
        "d" => "Использование больших и тяжелых изображений",
        "correct" => "b"
    ],
    "15. Как создать анимацию CSS-спрайтов для оптимизации загрузки страницы?:" => [
        "a" => "Создание спрайта из большого количества маленьких изображений",
        "b" => "Использование анимации в CSS для каждого изображения",
        "c" => "Объединение нескольких изображений в один файл",
        "d" => "Отключение анимации для оптимизации",
        "correct" => "c"
    ],
    "16. Каким образом используются фильтры CSS для изменения визуального вида изображений?:" => [
        "a" => "Добавление новых элементов на изображение",
        "b" => "Изменение цветовой гаммы и насыщенности",
        "c" => "Использование эффектов тени",
        "d" => "Создание 3D-эффектов",
        "correct" => "b"
    ],
    "17. Как создать графические эффекты с использованием блендинга и маскирования?:" => [
        "a" => "Применение белого фона",
        "b" => "Использование нескольких изображений с разными настройками прозрачности",
        "c" => "Смешивание цветов в одном слое",
        "d" => "Использование только черного и белого цветов",
        "correct" => "b"
    ],
    "18. Каким образом технология WebGL используется для рендеринга графики в веб-браузерах?:" => [
        "a" => "Она создает веб-страницы в 3D-пространстве",
        "b" => "Она рендерит графику на сервере",
        "c" => "Она позволяет создавать только статичные изображения",
        "d" => "Она отключает возможность рендеринга графики в браузере",
        "correct" => "a"
    ],
    "19. Какие методы существуют для определения и поддержки различных разрешений экранов устройств?:" => [
        "a" => "Использование только фиксированных разрешений",
        "b" => "Медиа-запросы и адаптивный дизайн",
        "c" => "Игнорирование разрешений экранов",
        "d" => "Установка одного универсального разрешения",
        "correct" => "b"
    ],
    "20. Как создать эффекты градиента и тени с использованием CSS для элементов веб-страницы?:" => [
        "a" => "Применение градиента к тексту",
        "b" => "Использование свойств linear-gradient и box-shadow",
        "c" => "Использование только изображений для эффектов",
        "d" => "Игнорирование эффектов градиента и тени",
        "correct" => "b"
    ],
    "21. Какие принципы важны при выборе цветовой палитры для веб-сайта?:" => [
        "a" => "Использование как можно большего количества цветов",
        "b" => "Соблюдение гармонии и контраста",
        "c" => "Отсутствие разнообразия в цветах",
        "d" => "Использование только темных цветов",
        "correct" => "b"
    ],
    "22. Как создать анимацию с использованием библиотеки CSS или JavaScript?:" => [
        "a" => "Использование только HTML",
        "b" => "Использование флеш-анимации",
        "c" => "Применение библиотеки TweenMax",
        "d" => "Отключение анимации",
        "correct" => "c"
    ],
    "23. Каким образом графика влияет на восприятие информации на веб-странице?:" => [
        "a" => "Не оказывает влияния на восприятие",
        "b" => "Улучшает читаемость текста",
        "c" => "Мешает восприятию информации",
        "d" => "Не имеет значения",
        "correct" => "b"
    ],
"24. Как использовать графические элементы для повышения удобства взаимодействия пользователя с веб-сайтом?:" => [
    "a" => "Создание сложных и запутанных интерфейсов",
    "b" => "Использование анимации и интуитивных значков",
    "c" => "Игнорирование графических элементов",
    "d" => "Отсутствие цветовой гаммы",
    "correct" => "b"
],

"25. Какие методы существуют для оптимизации изображений с целью ускорения загрузки веб-страницы?:" => [
    "a" => "Использование высокоразрешенных изображений",
    "b" => "Сжатие изображений и использование форматов с малым размером файла",
    "c" => "Использование только GIF-анимаций",
    "d" => "Отсутствие оптимизации изображений",
    "correct" => "b"
],

"26. Как создать эффект плавного перехода цветов (градиента) на веб-сайте?:" => [
    "a" => "Использование только одного цвета",
    "b" => "Применение CSS-свойства gradient",
    "c" => "Отсутствие цветовых эффектов",
    "d" => "Применение только ярких цветов",
    "correct" => "b"
],

"27. Каким образом графика может быть адаптирована для людей с ограниченными возможностями (доступность)?:" => [
    "a" => "Игнорирование потребностей людей с ограниченными возможностями",
    "b" => "Использование подписей к изображениям и доступных цветовых схем",
    "c" => "Отсутствие адаптации графики",
    "d" => "Применение только сложных графических элементов",
    "correct" => "b"
],

"28. Как использовать графические элементы для поддержки брендовой идентичности на веб-сайте?:" => [
    "a" => "Использование случайных изображений",
    "b" => "Согласование цветов и стилей с брендбуком",
    "c" => "Отсутствие уникальных графических элементов",
    "d" => "Использование графики других брендов",
    "correct" => "b"
],

"29. Как создать анимацию с использованием библиотеки SVG на веб-странице?:" => [
    "a" => "Использование только CSS-анимации",
    "b" => "Применение библиотеки SVG и анимаций с помощью JavaScript",
    "c" => "Отсутствие анимации",
    "d" => "Использование Flash-анимации",
    "correct" => "b"
],

"30. Какие тренды веб-дизайна влияют на выбор графических решений для веб-проектов?:" => [
    "a" => "Разработка устаревших дизайнерских решений",
    "b" => "Использование современных и инновационных подходов",
    "c" => "Отсутствие следования трендам",
    "d" => "Использование только черно-белой гаммы",
    "correct" => "b"
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
