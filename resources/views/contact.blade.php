<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Контакты</title>
    <link rel="stylesheet" href="{{ asset('styles.css') }}">
    <script src="{{ asset('script.js') }}"></script>
</head>
<body>
    <header>
        <h1>Контакты</h1>
        <nav>
            <ul>
                <li><a href="{{ url('/') }}">Главная</a></li>
                <li><a href="{{ url('/products') }}">Каталог</a></li>
                <li><a href="{{ url('/contact') }}">Контакты</a></li>
            </ul>
        </nav>
    </header>

    <section class="contact-info">
        <h2>Наши контактные данные</h2>
        <p>Телефон: +7-XXX-XXX-XXXX</p>
        <p>Email: info@zoomagazin.ru</p>
        <p>Адрес: г. Ваш город, ул. Ваша улица, д. Ваш номер</p>

        <button class="button" data-contact>Связаться с нами</button>
        <div class="modal" id="modal">
            <div class="modal-content">
                <button class="close-button" id="closeModal">&times;</button>
                <h2>Связаться с нами для покупки</h2>
                <form id="contactForm">
                    <input type="text" placeholder="Ваше ФИО" required />
                    <input type="tel" placeholder="Ваш номер телефона" required />
                    <input type="email" placeholder="Ваша почта" required />
                    <button type="submit" class="button">Оставить заявку</button>
                </form>
            </div>
        </div>
    </section>

    <footer>
        <p>2024 Зоомагазин. Все права защищены.</p>
    </footer>
</body>
</html>
