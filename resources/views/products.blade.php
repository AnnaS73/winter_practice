<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Каталог зоомагазина</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}" />
    <script src="{{ asset('js/script.js') }}"></script>
</head>
<body>
<header>
    <h1>Каталог зоомагазина</h1>
    <nav>
        <ul>
            <li><a href="{{ url('/') }}">Главная</a></li>
            <li><a href="{{ url('/products') }}">Каталог</a></li>
            <li><a href="{{ url('/contact') }}">Контакты</a></li>
        </ul>
    </nav>
</header>

<section class="products">
    @foreach ($products as $product)
    <article class="product">
        <img src="{{ asset('images/' . $product->image) }}" alt="{{ $product->name }}" />
        <h3>{{ $product->name }}</h3>
        <p>{{ $product->description }}</p>
        <b>Цена: {{ $product->price }} рублей</b>
        <a href="#" class="btn" data-contact>Подробнее</a>
    </article>
    @endforeach
</section>

<footer>
    <p>2024 Зоомагазин. Все права защищены.</p>
</footer>
</body>
</html>
