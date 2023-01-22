<?php
                            //откуда будем парсить информацию
                            $content = file_get_contents('https://radiopotok.ru/radio/626');

                            // Определяем позицию строки, до которой нужно все отрезать
                            $pos = strpos($content, '<h2 class="text-xl md:text-2xl">Что играло на радио сегодня</h2>');

                            //Отрезаем все, что идет до нужной нам позиции
                            $content = substr($content, $pos);

                            // Точно таким же образом находим позицию конечной строки
                            $pos = strpos($content, '<button class="btn btn-outline-primary w-full text-lg js--radioPlaylistMoar" data-id="626">Весь плейлист дня</button>');

                            // Отрезаем нужное количество символов от нулевого
                            $content = substr($content, 0, $pos);

                            //если в тексте встречается текст, который нам не нужен, вырезаем его
                            $content = str_replace('текст который нужно вырезать','', $content);

                            // выводим спарсенный текст.
                            echo $content;

                            echo "вставляем сюда завершающий код";
?>