<?php
// MySQL məlumatlarına qoşulmaq
$conn = new mysqli("localhost", "root", "root", "student_db");

if ($conn->connect_error) {
    die("Bağlantı səhvi: " . $conn->connect_error);
}

// URL-dən gələn axtarış sorğusunu almaq
$q = isset($_GET['q']) ? $_GET['q'] : '';

// Axtarış sorğusu
$sql = "SELECT * FROM students WHERE name LIKE '%$q%'";
$result = $conn->query($sql);

// Cədvəlin başlığını göstərin
if ($result->num_rows > 0) {
    echo "<table>
            <tr>
                <th>ID</th>
                <th>Adı</th>
                <th>Yaşı</th>
                <th>Universitet</th>
                <th>Bal</th>
            </tr>";
    
    // Tələbə məlumatlarını cədvələ daxil edin
    while($row = $result->fetch_assoc()) {
        echo "<tr>
                <td>{$row['id']}</td>
                <td>{$row['name']}</td>
                <td>{$row['age']}</td>
                <td>{$row['university']}</td>
                <td>{$row['score']}</td>
              </tr>";
    }
    echo "</table>";
} else {
    // Məlumat tapılmadıqda xüsusi stil verilmiş div göstər
    echo "<div class='no-data'>Məlumat tapılmadı</div>";
}

$conn->close();
?>
