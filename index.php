<!DOCTYPE html>
<html lang="az">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Tələbə Cədvəli - Real Vaxtda Axtarış</title>
    <link rel="icon" href="./image/student.png" />
    <link rel="stylesheet" href="./css/style.css" />

</head>

<body>

    <div class="container">
        <h2>Tələbə Cədvəli</h2>

        <!-- Axtarış Formu -->
        <form action="">
            <input type="text" onkeyup="searchStudent(this.value)" placeholder="Tələbənin adını axtar">
        </form>

        <!-- Nəticələrin göstərildiyi yer -->
        <div id="student-table"></div>
    </div>

    <!-- AJAX və JavaScript funksiyası -->
    <script src="./js/script.js"></script>

</body>

</html>