<?php
include 'Dashboard.php';

if ($_SESSION["username"] != "Admin") {
    header("location:Login.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Search Property</title>
</head>

<body>

    <form method="POST">
        <h3>SEARCH FOR House Types</h3>
        <p>Suggestions: <span id="txtHint"></span></p>
        House Type:<input type="text" id="house_type" onkeyup="search_data(this.value)" />
        <input type="button" id="submit" value="search" onclick="show_data()">

        <div id="content">

        </div>
    </form>
    <br><br>

    <script>
        function search_data(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "no suggestion";
                return;
            } else {
                const xmlhttp = new XMLHttpRequest();
                xmlhttp.onreadystatechange = function() {
                    if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
                        document.getElementById("txtHint").innerHTML = xmlhttp.responseText;
                    }
                };
                xmlhttp.open('GET', '../Model/Search_Query.php?q=' + str, true);
                xmlhttp.send();
            }

        }

        function show_data() {
            var data = document.getElementById("house_type").value;
            if (data.length == 0) {
                document.getElementById("content").innerHTML = "no value";
                return;
            } else {
                const xml = new XMLHttpRequest();
                xml.onreadystatechange = function() {
                    if (xml.readyState == 4 && xml.status == 200) {
                        document.getElementById("content").innerHTML = xml.responseText;
                    }
                };
                xml.open('GET', '../Controller/Search_onsubmit.php?q=' + data, true);
                xml.send();
            }

        }
    </script>

</body>

</html>