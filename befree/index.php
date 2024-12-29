<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>тапать хомяка</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            height: 100vh;
            display: flex;
            flex-direction: column;
        }
        .content {
            flex: 1;
            display: flex;
            flex-direction: column;
            height: 100%;
        }
        .top-frame {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 10px;
            flex: 0 0 60px;
        }
        .main-frame {
            flex: 1;
            background-color: #f4f4f4;
            overflow: hidden;
        }
        iframe {
            width: 100%;
            height: 100%;
        }
        .bottom-menu {
            display: flex;
            justify-content: space-around;
            background-color: #333;
            padding: 10px;
        }
        .bottom-menu button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px;
            cursor: pointer;
            font-size: 16px;
        }
        .bottom-menu button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>
    <div class="content">
        <!-- Верхний фрейм -->
        <div class="top-frame">
            <h1>БИФРИ</h1>
        </div>

        <!-- Основной фрейм с контентом -->
        <div class="main-frame">
            <iframe id="main-content" src="about:blank" frameborder="0"></iframe>
        </div>

        <!-- Нижнее меню с кнопками -->
        <div class="bottom-menu">
            <button onclick="changePage('main')">Главная</button>
            <button onclick="changePage('webinars')">Вебинары</button>
            <button onclick="changePage('programs')">Программы</button>
            <button onclick="changePage('tornado')">Шаровая биржа</button>
        </div>
    </div>

    <script>
        function changePage(page) {
            const iframe = document.getElementById('main-content');
            const content = getContent(page);
            iframe.contentWindow.document.open();
            iframe.contentWindow.document.write(content);
            iframe.contentWindow.document.close();
        }

        function getContent(page) {
            switch(page) {
                case 'main':
                    return `
                        <html><body>
                            <h2>Добро пожаловать! ❤️ BEFREE LLC! ❤️</h2>
                            <p>BeLLC - центр профессионального обучения и коучинга с системой вознаграждений. <br>
                            Мы предлагаем вам пошаговое профессиональное онлайн обучение с возможностью коррекции лично ваших действий с помощью коуч сессий. ❤️<br>
                            Вы сможете прокачать свой потенциал и изменить качество жизни. ❤️<br>
                            Вы получаете обучение, развитие, доходы и новые бизнес навыки. ❤️</p>
                            <p><a href="https://llcbee.com/" target="_blank">Наши источники: Сайт</a></p>
                            <p><a href="https://t.me/befreebiz_official" target="_blank">Telegram channel</a></p>
                            <p><a href="https://qo.mywebinar.com/B_formula" target="_blank">Вебинар</a></p>
                        </body></html>
                    `;
                case 'webinars':
                    return `
                            <iframe src="https://qo.mywebinar.com/B_formula" width="100%" height="80%" frameborder="0"></iframe>
                        </body></html>
                    `;
                case 'programs':
                    return `
                        <html><body>
                            <iframe src="befree.php" width="100%" height="80%" frameborder="0"></iframe>
                        </body></html>
                    `;
                case 'tornado':
                    return `
                        <html><body>
                            <iframe src="tornado.php" width="100%" height="80%" frameborder="0"></iframe>
                        </body></html>
                    `;
                default:
                    return '<html><body><h2>404</h2><p>Страница не найдена.</p></body></html>';
            }
        }
    </script>
</body>
</html>
