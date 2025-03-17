<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Страница товара</title>
    <link rel="stylesheet" href="Product Page.css">
</head>
<body>
    <div class="attic">
        <div class="logo"><img src="A&A.svg" alt="Логотип"></div>
        <input type="text" class="search-input" id="searchInput" placeholder="Название товара/категория...">
        <a href="Catalog.html">
            <button class="button catalog">Каталог</button>
        </a>
        
        <a href="index.html">
            <button class="image-button">
                <img src="Vector.png" alt="Кнопка 1" />
            </button>
        </a>
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
    <div id="searchResults" class="search-results"></div>
    <div id="searchResultsContainer" class="search-results-container"></div>
    <div class="product-page">
        <div class="product-main-content">
            <div class="product-image-container">
                <div class="thumbnail-container">
                    <img src="product1.svg" alt="Thumbnail 1" class="thumbnail" onclick="changeMainImage('C:/Users/User/OneDrive/Рабочий стол/Дз/product1.svg')">
                    <img src="product1.svg" alt="Thumbnail 2" class="thumbnail" onclick="changeMainImage('C:/Users/User/OneDrive/Рабочий стол/Дз/product2.svg')">
                    <img src="product1.svg" alt="Thumbnail 3" class="thumbnail" onclick="changeMainImage('C:/Users/User/OneDrive/Рабочий стол/Дз/product3.svg')">
                </div>
                <img src="product1.svg" alt="Product Image" class="product-image" id="main-image">
            </div>
            <div class="product-details">
                <h1 class="product-title">Название товара</h1>
                <div class="product-price">₽ 1,999</div>
                <div class="product-rating">
                    ★★★★☆ <span class="rating-count">(123 отзыва)</span>
                </div>
                <div class="product-specifications">
                    <div class="spec-item">
                        <span class="spec-label">Состав:</span>
                        <span class="spec-value">Молоко, сахар, какао</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Вес:</span>
                        <span class="spec-value">500 г</span>
                    </div>
                    <div class="spec-item">
                        <span class="spec-label">Срок годности:</span>
                        <span class="spec-value">12 месяцев</span>
                    </div>
                </div>
                <div class="product-actions">
                    <button class="add-to-cart">Добавить в корзину</button>
                </div>
            </div>
        </div>
        <div class="product-description-container">
            <h2 class="description-title">Описание товара</h2>
            <p class="product-description">
                Описание товара. Это пример текста, который описывает продукт. Здесь можно указать характеристики, преимущества и особенности товара.
            </p>
        </div>
        <div class="product-reviews">
            <h2 class="reviews-title">Отзывы</h2>
            <div class="review">
                <div class="review-header">
                    <span class="review-author">Иван Иванов</span>
                    <span class="review-rating">★★★★☆</span>
                </div>
                <p class="review-text">
                    Отличный товар! Качество на высоте, доставка быстрая. Рекомендую!
                </p>
                <span class="review-date">12 октября 2023</span>
            </div>
            <div class="review">
                <div class="review-header">
                    <span class="review-author">Мария Петрова</span>
                    <span class="review-rating">★★★☆☆</span>
                </div>
                <p class="review-text">
                    Товар хороший, но срок годности был почти на исходе.
                </p>
                <span class="review-date">5 октября 2023</span>
            </div>
            <div class="review">
                <div class="review-header">
                    <span class="review-author">Алексей Смирнов</span>
                    <span class="review-rating">★★★★★</span>
                </div>
                <p class="review-text">
                    Очень доволен покупкой! Все соответствует описанию.
                </p>
                <span class="review-date">1 октября 2023</span>
            </div>
            <button class="show-more-reviews">Показать еще</button>
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
                <p>Главная</p>
                <p>Каталог</p>
                <p>Корзина</p>
                <p>Избранное</p>
                <p>Профиль</p>
                <p>Доставка</p>
                <p>Покупки</p>
            </div>
            <div class="column">
                <h4>Услуги</h4>
                <p>Доставка</p>
                <p>Служба поддержки</p>
            </div>
            <div class="column">
                <h4>Документация</h4>
                <p>Сроки годности</p>
                <p>Условия доставки</p>
                <p>Условия хранения</p>
                <p>Состав</p>
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
        </script>
</body>
</html>