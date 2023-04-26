<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Verificar número na sequência de Fibonacci</title>
</head>
<body>
    <form method="get">
        <label>Digite um número:</label>
        <input type="text" name="num">
        <button type="submit">Verificar</button>
    </form>

    <?php
    if (isset($_GET['num'])) {
        $num = $_GET['num'];

        $fib = array(0, 1);

        while ($fib[count($fib)-1] < $num) {
            $fib[] = $fib[count($fib)-1] + $fib[count($fib)-2];
        }

        if (in_array($num, $fib)) {
            echo $num . " pertence à sequência de Fibonacci.";
        } else {
            echo $num . " não pertence à sequência de Fibonacci.";
        }
    }
    ?>
</body>
</html>
