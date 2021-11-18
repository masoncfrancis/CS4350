<html>

<head>
</head>
<body>
    <p>You have visited this page <?php
        session_start();

        if (!isset($_SESSION["visited"])) {
            $_SESSION["visited"] = 0;
        }

        print ++$_SESSION["visited"];

        ?>&nbsp;times</p>
</body>


</html>


