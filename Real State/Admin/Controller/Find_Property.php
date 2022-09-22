<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>

    <script>
        function search_data(str) {
            if (str.length == 0) {
                document.getElementById("txtHint").innerHTML = "";
            } else {
                var xml = new XMLHttpRequest();
                xml.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xml.open("GET", "../Model/Search_Query.php?q=" + str, true);
                xml.send();
            }

        }
    </script>
</body>

</html>