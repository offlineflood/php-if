// AJAX və JavaScript funksiyası

function searchStudent(str) {
    if (str.length == 0) {
        document.getElementById("student-table").innerHTML = "";
        return;
    }

    // AJAX obyektini yaratmaq
    const xhr = new XMLHttpRequest();
    xhr.onreadystatechange = function () {
        if (xhr.readyState == 4 && xhr.status == 200) {
            document.getElementById("student-table").innerHTML = xhr.responseText;
        }
    };

    // AJAX sorğusunu göndərmək
    xhr.open("GET", "search.php?q=" + str, true);
    xhr.send();
}