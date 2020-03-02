<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="./assets/js/ajax.js"></script>
    <title>Document</title>
</head>

<body>
    <script>
        let xhrTest = ajax();
        console.log(xhrTest);
        let test = function() { //intercepter chacun des éléments
            xhrTest.onreadystatechange = function() {
                if (xhrTest.readyState == 4 && xhrTest.status == 200) {
                    alert(xhrTest.responseText);
                }
            };
            xhrTest.open("GET","test.php?nom=Mathilde", true);
            xhrTest.send(null);
        };
        console.log(ajax());
    </script>
    <p onclick="test()">Clique-moi!</p>
</body>

</html>