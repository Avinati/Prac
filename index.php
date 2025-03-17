
<?php
include 'db.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Главная</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
    <div class="attic">
        <div class="logo"><img src="A&A.svg" alt="Логотип"></div>
        
        
        <div class="burger-menu" id="burgerMenu">
            <span></span>
            <span></span>
            <span></span>
        </div>
    
        
        <div class="menu-container" id="menuContainer">
            <form action="search.php">
            <input value="Поиск" type="text" class="search-input" id="searchInput" placeholder="Название товара/категория...">
        </form>
            <a href="Catalog.html">
                <button class="button catalog">Каталог</button>
            </a>
            <button class="image-button">
                <img src="Vector.png" alt="Кнопка 1" />
            </button>
            <a href="Cart.html">
                <button class="image-button">
                    <img src="Vector1.png" alt="Кнопка 2" />
                </button>
            </a>
            <a href="Personal account.html">
                <button class="image-button">
                    <img src="Vector2.png" alt="Кнопка 3" />
                </button>
            </a>
        </div>
    </div>
    <div id="searchResults" class="search-results"></div>
    <div id="searchResultsContainer" class="search-results-container"></div>
    <div style="position: relative;" class="banner">
        <img src="banner1.svg" alt="" style="width: 100%;">
        <img class="img-banner" src="baner2.svg" alt="" style="position: absolute; top: 0; left: 0;">
        <div class="banner-text">
            <h1>Скидки</h1>
            <h3>50%</h3>
            <h5>на шоколадные плитки!</h5>
        </div>
    </div>
    <h3 class="title">Рекомендации</h3>
    <div class="recommendations">
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
<div class="product">
    <div class="image-container">
        <img src="product1.svg" alt="Товар 1" class="product-image">
        <div class="discount-text">-50%</div>
    </div>
    <div class="product-info">
        <div class="product-button-top-right">
            <img src="Vector3.svg" alt="Кнопка 5" />
        </div>
        <div class="product-name">Черная магия</div>
        <div class="product-somthing">Шоколадные кофеты</div>
        <div class="product-somthing">365 г</div>
        <div class="product-price-and-button">
            <div class="product-price">1000 ₽</div>
            <div class="product-price2">2000 ₽</div>
            <button class="image-button-cart">
                <img src="Vector1.png" alt="Кнопка 4" />
            </button>
        </div>
    </div>
</div>
</div>
<h3 class="title1">О нас</h3>
<div class="aboutus-container">
    <div class="aboutus-background">
        <div class="background-shape"><p class="text-aboutus1">Добро пожаловать в мир изысканных шоколадных изделий ручной работы от A&A! Наша компания была основана с любовью к шоколаду и стремлением создавать уникальные сладости, которые радуют и вдохновляют.</p>
            <p class="text-aboutus2">Мы верим, что шоколад — это не просто сладость, а искусство. Наша миссия заключается в том, чтобы каждый кусочек шоколада приносил радость и удовлетворение. Мы используем только лучшие ингредиенты, отборные какао-бобы и натуральные добавки, чтобы создать шоколад, который не только вкусен, но и полезен.</p>
            <img src="image.svg" alt="Фото" class="img1">
            <img src="image1.svg" alt="Фото 1" class="img2"></div>
    </div>
</div>
<div class="why-background">
    <div class="content-container">
        <h3 class="title2">Почему именно мы?</h3>
        <div class="images-container">
            <div class="image-wrapper">
                <img src="why1.svg" alt="Что-то 1" class="why-image">
                <div class="image-text">
                    <p>Только качественный шоколад!</p>
                </div>
            </div>
            <div class="image-wrapper">
                <img src="why2.svg" alt="Что-то 2" class="why-image">
                <div class="image-text">
                    <p>Товары на любой вкус</p>
                </div>
            </div>
            <div class="image-wrapper">
                <img src="why3.svg" alt="Что-то 3" class="why-image">
                <div class="image-text">
                    <p>Товары ручной работы</p>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="Basement">
    <div class="logo">
        <img src="A&A2.svg" alt="Логотип" class="image-button">
    </div>
    <div class="social-media-container">
        <div class="social-media">
            <img src="vk.svg" alt="VK" class="image-button2">
        </div>
        <div class="social-media">
            <img src="odnoklassniki.svg" alt="Odnoklassniki" class="image-button2">
        </div>
        <div class="social-media">
            <img src="tg.svg" alt="Telegram" class="image-button2">
        </div>
        <div class="social-media">
            <img src="youtube.svg" alt="YouTube" class="image-button2">
        </div>
    </div>
    <div class="footer-text">
        <p>© A&A 2025. Все права защищены. Применяются рекомендательные технологии</p>
    </div>
    <div class="footer-text2">
        <div class="column">
            <h4>Страницы</h4>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/index.html">Главная</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/Catalog.html">Каталог</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/Cart.html">Корзина</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/Favourites.html">Избранное</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/Personal account.html">Профиль</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/Delivery.html">Доставка</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/Purchases.html">Покупки</a>
        </div>
        <div class="column">
            <h4>Услуги</h4>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/Delivery.html">Доставка</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/support">Служба поддержки</a>
        </div>
        <div class="column">
            <h4>Документация</h4>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/expiration">Сроки годности</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/storage-terms">Условия хранения</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/composition">Состав</a>
            <a href="Privacy Policy.html">Конвидициальность</a>
            <a href="C:/Users/User/OneDrive/Рабочий стол/Дз/Rules.html">Технологии</a>
        </div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');

    // Sample product data with unique IDs
    const products = [
        { id: 1, name: 'Product 1', category: 'Category A' },
        { id: 2, name: 'Product 2', category: 'Category B' },
        { id: 3, name: 'Product 3', category: 'Category A' },
        { id: 4, name: 'Product 4', category: 'Category C' },
        { id: 5, name: 'Product 5', category: 'Category B' },
    ];

    // Function to display search results
    function displayResults(results) {
        if (results.length > 0) {
            searchResults.innerHTML = results
                .map(
                    (product) => `
                    <div class="search-result-item" data-id="${product.id}">
                        <strong>${product.name}</strong> - ${product.category}
                    </div>
                `
                )
                .join('');
            searchResults.style.display = 'block';

            // Add click event listeners to each search result
            const searchResultItems = document.querySelectorAll('.search-result-item');
            searchResultItems.forEach(item => {
                item.addEventListener('click', function () {
                    const productId = this.getAttribute('data-id');
                    redirectToProductPage(productId);
                });
            });
        } else {
            searchResults.innerHTML = '<div>No results found</div>';
            searchResults.style.display = 'block';
        }
    }

    // Function to redirect to the product page
    function redirectToProductPage(productId) {
        // Replace with the actual URL structure of your product pages
        window.location.href = `product.html?id=${productId}`;
    }

    // Function to handle search when Enter key is pressed
    function handleSearch() {
        const query = searchInput.value.trim().toLowerCase();

        if (query === '') {
            searchResults.innerHTML = '';
            searchResults.style.display = 'none';
            return;
        }

        // Filter products by name or category
        const filteredProducts = products.filter(
            (product) =>
                product.name.toLowerCase().includes(query) ||
                product.category.toLowerCase().includes(query)
        );

        // Display filtered results
        displayResults(filteredProducts);
    }

    // Event listener for input changes (real-time search)
    searchInput.addEventListener('input', function () {
        const query = searchInput.value.trim().toLowerCase();

        if (query === '') {
            searchResults.innerHTML = '';
            searchResults.style.display = 'none';
            return;
        }

        // Filter products by name or category
        const filteredProducts = products.filter(
            (product) =>
                product.name.toLowerCase().includes(query) ||
                product.category.toLowerCase().includes(query)
        );

        // Display filtered results
        displayResults(filteredProducts);
    });

    // Event listener for Enter key press
    searchInput.addEventListener('keydown', function (event) {
        if (event.key === 'Enter') {
            handleSearch();
        }
    });
});
let debounceTimer;

searchInput.addEventListener('input', function () {
    clearTimeout(debounceTimer);
    debounceTimer = setTimeout(() => {
        const query = searchInput.value.trim().toLowerCase();

        if (query === '') {
            searchResults.innerHTML = '';
            searchResults.style.display = 'none';
            return;
        }

        const filteredProducts = products.filter(
            (product) =>
                product.name.toLowerCase().includes(query) ||
                product.category.toLowerCase().includes(query)
        );

        displayResults(filteredProducts);
    }, 300); // Adjust the delay as needed
});

document.addEventListener('DOMContentLoaded', function () {
    const burgerMenu = document.getElementById('burgerMenu');
    const menuContainer = document.getElementById('menuContainer');

    burgerMenu.addEventListener('click', function () {
        menuContainer.classList.toggle('active'); // Переключаем видимость меню
    });
});
</script>
</body>
</html>