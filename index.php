<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <script>
        let xhr = null;

        if (window.XMLHttpRequest) {
            xhr = new XMLHttpRequest();
        } else if (window.ActiveXObject) {
            try {
                xhr = new ActiveXObject("Msxml2.XMLHTTP");

            } catch (e) {
                xhr = new ActiveXObject("Microsoft.XMLHTTP");

            }
        } else{
            alert("Mettre à jour votre navigateur");
            xhr = false
        }
    </script>
</body>

</html>