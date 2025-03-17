<?php

// Получение поискового запроса
$query = isset($_GET['query']) ? $_GET['query'] : '';

// Подготовка и выполнение запроса
$sql = "SELECT * FROM Product WHERE title LIKE ? OR description LIKE ?";
$stmt = $conn->prepare($sql);
$searchTerm = "%" . $query . "%";
$stmt->bind_param("ss", $searchTerm, $searchTerm);
$stmt->execute();
$result = $stmt->get_result();

// Вывод результатов
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "<h2>" . htmlspecialchars($row['title']) . "</h2>";
        echo "<p>" . htmlspecialchars($row['description']) . "</p>";
    }
} else {
    echo "Ничего не найдено.";
}

// Закрытие соединения
$stmt->close();
$conn->close();
?>
