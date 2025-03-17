<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="Catalog.css">
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
            <input type="text" class="search-input" id="searchInput" placeholder="Название товара/категория...">
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
    <h3 class="title">Каталог</h3>
    <div class="recommendations">
        <div class="filtr">
            <div class="background-shape">
            <h4 class="text1">Сортировка по:</h4>
            <select class="choice-shape">
                <option value="price_asc">Цена по возрастанию</option>
                <option value="price_desc">Цена по убыванию</option>
                <option value="popularity">Популярность</option>
            </select>
            <h4 class="text2">Цена:</h4>
            <div class="price-range-container">
                <input type="range" id="price-range" class="price-range" min="0" max="2000" value="1000">
                <div class="price-range-values">
                    <span class="price-from">500 ₽</span>
                    <span class="price-to">2000 ₽</span>
                </div>
            </div>
            <h4 class="text3">Специальное предложение:</h4>
            <div class="special-offers">
                <label class="special-offer-option">
                    <input type="checkbox" name="special-offer" value="discount"> Скидки
                </label>
                <label class="special-offer-option">
                    <input type="checkbox" name="special-offer" value="new"> Новинки
                </label>
                <label class="special-offer-option">
                    <input type="checkbox" name="special-offer" value="limited"> Ограниченный тираж
                </label>
            </div>
            <button class="button1">Фильтровать</button>
            <button class="button2">Сбросить</button>
            </div>
        </div>
        <div class="product-container">
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
                            <img src="C:/Users/User/OneDrive/Рабочий стол/Дз/Vector1.png" alt="Кнопка 4" />
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
                            <img src="C:/Users/User/OneDrive/Рабочий стол/Дз/Vector1.png" alt="Кнопка 4" />
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
                            <img src="C:/Users/User/OneDrive/Рабочий стол/Дз/Vector1.png" alt="Кнопка 4" />
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
                            <img src="C:/Users/User/OneDrive/Рабочий стол/Дз/Vector1.png" alt="Кнопка 4" />
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
                            <img src="C:/Users/User/OneDrive/Рабочий стол/Дз/Vector1.png" alt="Кнопка 4" />
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
                            <img src="C:/Users/User/OneDrive/Рабочий стол/Дз/Vector1.png" alt="Кнопка 4" />
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
                <a href="index.html">Главная</a>
                <a href="Catalog.html">Каталог</a>
                <a href="Cart.html">Корзина</a>
                <a href="Favourites.html">Избранное</a>
                <a href="Personal account.html">Профиль</a>
                <a href="Delivery.html">Доставка</a>
                <a href="Purchases.html">Покупки</a>
            </div>
            <div class="column">
                <h4>Услуги</h4>
                <a href="Delivery.html">Доставка</a>
                <a href="support">Служба поддержки</a>
            </div>
            <div class="column">
                <h4>Документация</h4>
                <a href="expiration">Сроки годности</a>
                <a href="storage-terms">Условия хранения</a>
                <a href="composition">Состав</a>
                <a href="Privacy Policy.html">Конвидициальность</a>
                <a href="Rules.html">Технологии</a>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const searchInput = document.getElementById('searchInput');
            const searchResults = document.getElementById('searchResults');
            const products = [
                { id: 1, name: 'Product 1', category: 'Category A' },
                { id: 2, name: 'Product 2', category: 'Category B' },
                { id: 3, name: 'Product 3', category: 'Category A' },
                { id: 4, name: 'Product 4', category: 'Category C' },
                { id: 5, name: 'Product 5', category: 'Category B' },
            ];
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
            function redirectToProductPage(productId) {
                window.location.href = `product.html?id=${productId}`;
            }
            function handleSearch() {
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
            }
            searchInput.addEventListener('input', function () {
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
            });
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
            }, 300); 
        });
        document.addEventListener('DOMContentLoaded', function () {
    const searchInput = document.getElementById('searchInput');
    const searchResults = document.getElementById('searchResults');
    const productContainer = document.querySelector('.product-container');
    const sortSelect = document.querySelector('.choice-shape');
    const priceRange = document.getElementById('price-range');
    const specialOffers = document.querySelectorAll('input[name="special-offer"]');
    const filterButton = document.querySelector('.button1');
    const resetButton = document.querySelector('.button2');

    const products = [
        { id: 1, name: 'Черная магия', category: 'Шоколадные конфеты', price: 1000, discountPrice: 500, isNew: true, hasDiscount: true, isLimited: false },
        { id: 2, name: 'Белая магия', category: 'Шоколадные конфеты', price: 1200, discountPrice: 600, isNew: false, hasDiscount: true, isLimited: true },
        { id: 3, name: 'Красная магия', category: 'Шоколадные конфеты', price: 1500, discountPrice: 750, isNew: true, hasDiscount: false, isLimited: false },
    ];
    function renderProducts(filteredProducts) {
        productContainer.innerHTML = '';
        filteredProducts.forEach(product => {
            const productHTML = `
                <div class="product">
                    <div class="image-container">
                        <img src="C:/Users/User/OneDrive/Рабочий стол/Дз/product1.svg" alt="${product.name}" class="product-image">
                        ${product.hasDiscount ? '<div class="discount-text">-50%</div>' : ''}
                    </div>
                    <div class="product-info">
                        <div class="product-button-top-right">
                            <img src="C:/Users/User/OneDrive/Рабочий стол/Дз/Vector3.svg" alt="Кнопка 5" />
                        </div>
                        <div class="product-name">${product.name}</div>
                        <div class="product-somthing">${product.category}</div>
                        <div class="product-somthing">365 г</div>
                        <div class="product-price-and-button">
                            <div class="product-price">${product.discountPrice} ₽</div>
                            <div class="product-price2">${product.price} ₽</div>
                            <button class="image-button-cart">
                                <img src="C:/Users/User/OneDrive/Рабочий стол/Дз/Vector1.png" alt="Кнопка 4" />
                            </button>
                        </div>
                    </div>
                </div>
            `;
            productContainer.insertAdjacentHTML('beforeend', productHTML);
        });
    }
    function filterProducts() {
        const sortValue = sortSelect.value;
        const priceValue = parseInt(priceRange.value);
        const selectedOffers = Array.from(specialOffers)
            .filter(offer => offer.checked)
            .map(offer => offer.value);

        let filteredProducts = products.filter(product => {
            const matchesPrice = product.discountPrice <= priceValue;
            const matchesOffers = selectedOffers.length === 0 || 
                (selectedOffers.includes('discount') && product.hasDiscount) ||
                (selectedOffers.includes('new') && product.isNew) ||
                (selectedOffers.includes('limited') && product.isLimited);
            return matchesPrice && matchesOffers;
        });
        if (sortValue === 'price_asc') {
            filteredProducts.sort((a, b) => a.discountPrice - b.discountPrice);
        } else if (sortValue === 'price_desc') {
            filteredProducts.sort((a, b) => b.discountPrice - a.discountPrice);
        } else if (sortValue === 'popularity') {
        }

        renderProducts(filteredProducts);
    }

    filterButton.addEventListener('click', filterProducts);
    resetButton.addEventListener('click', () => {
        sortSelect.value = 'price_asc';
        priceRange.value = 1000;
        specialOffers.forEach(offer => offer.checked = false);
        renderProducts(products); 
    });
    renderProducts(products);
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