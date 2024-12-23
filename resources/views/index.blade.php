<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Зоомагазин</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <script src="{{ asset('script.js') }}"></script>
</head>
<body>
    <header>
        <h1>Добро пожаловать в зоомагазин!</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Главная</a></li>
                <li><a href="{{ url('/products') }}">Каталог</a></li>
                <li><a href="{{ url('/contact') }}">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <section class="hero">
        <h2>Широкий ассортимент товаров для ваших питомцев</h2>
        <p>У нас вы найдете всё необходимое для заботы о своих любимцах</p>
        <a href="{{ url('/products') }}" class="btn">Перейти в каталог</a>
    </section>

    <footer>
        <p>2024 Зоомагазин. Все права защищены.</p>
    </footer>
</body>
</html>
