<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Каталог</title>
    <link rel="stylesheet" href="Cart.css">
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
    <h3 class="title">Корзина</h3>
    <div class="recommendations">
        <label class="all"> 
            <input type="checkbox" name="all"> Выбрать все
        </label>
        <div class="filtr">
            <div class="background-shape">
                <button class="image-button1">
                    <img src="edit.svg" alt="Кнопка"/>
                </button>
                <h4 class="text1">Адрес доставки:</h4>
                <p class="text1-data">ул. Примерная, д. 123, кв. 45</p>
                <h4 class="text2">Данные получателя:</h4>
                <p class="text2-data">Иванов Иван Иванович, +7 (123) 456-78-90</p>
                <h4 class="text3">Способы оплаты:</h4>
                <div class="special-offers">
                    <label class="special-offer-option">
                        <input type="checkbox" name="special-offer" value="discount" class="hidden-checkbox">
                        <img src="sber.svg" alt="SberPay Icon">
                        <span>SberPay</span>
                    </label>
                    <label class="special-offer-option">
                        <input type="checkbox" name="special-offer" value="new" class="hidden-checkbox">
                        <img src="t-bank.svg" alt="Tinkoff Pay Icon">
                        <span>Tinkoff Pay</span>
                    </label>
                    <label class="special-offer-option">
                        <input type="checkbox" name="special-offer" value="limited" class="hidden-checkbox">
                        <img src="carta.svg" alt="Card Icon">
                        <span>Картой</span>
                    </label>
                </div>
                <p class="text3-data">Доставка: <span class="text3-data-value">+200 ₽</span></p>
        <p class="text3-data1">Итог: <span class="text3-data1-value">0 ₽</span></p>
                <button class="button2">Оплатить</button>
            </div>
        </div>
        <div class="products-grid">
            <div class="product-container">
                <div class="product">
                    <div class="image-container">
                        <img src="product2.svg" alt="Товар 1" class="product-image">
                        <button class="image-button-cart">
                            <img src="del.svg" alt="Кнопка 4" />
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-name">Черная магия</div> 
                        <div class="product-somthing">Шоколадные кофеты</div> 
                        <div class="product-somthing">365 г</div> 
                        <div class="product-price-and-button"> dfjdfdf
                            <div class="product-price">1000 ₽</div>
                            <div class="quantity-control">
                                <button class="quantity-button minus">-</button>
                                <span class="quantity">1</span>
                                <button class="quantity-button plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <div class="image-container">
                        <img src="product2.svg" alt="Товар 1" class="product-image">
                        <button class="image-button-cart">
                            <img src="del.svg" alt="Кнопка 4" />
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-name">Черная магия</div> 
                        <div class="product-somthing">Шоколадные кофеты</div> 
                        <div class="product-somthing">365 г</div> 
                        <div class="product-price-and-button">
                            <div class="product-price">1000 ₽</div>
                            <div class="quantity-control">
                                <button class="quantity-button minus">-</button>
                                <span class="quantity">1</span>
                                <button class="quantity-button plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <div class="image-container">
                        <img src="product2.svg" alt="Товар 1" class="product-image">
                        <button class="image-button-cart">
                            <img src="del.svg" alt="Кнопка 4" />
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-name">Черная магия</div> 
                        <div class="product-somthing">Шоколадные кофеты</div> 
                        <div class="product-somthing">365 г</div> 
                        <div class="product-price-and-button">
                            <div class="product-price">1000 ₽</div>
                            <div class="quantity-control">
                                <button class="quantity-button minus">-</button>
                                <span class="quantity">1</span>
                                <button class="quantity-button plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <div class="image-container">
                        <img src="product2.svg" alt="Товар 1" class="product-image">
                        <button class="image-button-cart">
                            <img src="del.svg" alt="Кнопка 4" />
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-name">Черная магия</div> 
                        <div class="product-somthing">Шоколадные кофеты</div> 
                        <div class="product-somthing">365 г</div> 
                        <div class="product-price-and-button">
                            <div class="product-price">1000 ₽</div>
                            <div class="quantity-control">
                                <button class="quantity-button minus">-</button>
                                <span class="quantity">1</span>
                                <button class="quantity-button plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <div class="image-container">
                        <img src="product2.svg" alt="Товар 1" class="product-image">
                        <button class="image-button-cart">
                            <img src="del.svg" alt="Кнопка 4" />
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-name">Черная магия</div> 
                        <div class="product-somthing">Шоколадные кофеты</div> 
                        <div class="product-somthing">365 г</div> 
                        <div class="product-price-and-button">
                            <div class="product-price">1000 ₽</div>
                            <div class="quantity-control">
                                <button class="quantity-button minus">-</button>
                                <span class="quantity">1</span>
                                <button class="quantity-button plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <div class="image-container">
                        <img src="product2.svg" alt="Товар 1" class="product-image">
                        <button class="image-button-cart">
                            <img src="del.svg" alt="Кнопка 4" />
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-name">Черная магия</div> 
                        <div class="product-somthing">Шоколадные кофеты</div> 
                        <div class="product-somthing">365 г</div> 
                        <div class="product-price-and-button">
                            <div class="product-price">1000 ₽</div>
                            <div class="quantity-control">
                                <button class="quantity-button minus">-</button>
                                <span class="quantity">1</span>
                                <button class="quantity-button plus">+</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="product-container">
                <div class="product">
                    <div class="image-container">
                        <img src="product2.svg" alt="Товар 1" class="product-image">
                        <button class="image-button-cart">
                            <img src="del.svg" alt="Кнопка 4" />
                        </button>
                    </div>
                    <div class="product-info">
                        <div class="product-name">Черная магия</div> 
                        <div class="product-somthing">Шоколадные кофеты</div> 
                        <div class="product-somthing">365 г</div> 
                        <div class="product-price-and-button">
                            <div class="product-price">1000 ₽</div>
                            <div class="quantity-control">
                                <button class="quantity-button minus">-</button>
                                <span class="quantity">1</span>
                                <button class="quantity-button plus">+</button>
                            </div>
                        </div>
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

<!-- dskfdjfdsfjdsnf -->