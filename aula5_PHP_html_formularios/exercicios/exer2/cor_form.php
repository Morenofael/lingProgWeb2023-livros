<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cor</title>
</head>
<body>
    <h2>Formulário de cor</h2>

    <form action="cor_exec.php" method="POST">
        <label for="somCor">Seleciona a cor: </label>
        <!--<input type="color" name="cor" id="somCor">-->
        <select name="cor" id="somCor">
            <option value="Tomato">Tomato</option>
            <option value="Orange">Orange</option>
            <option value="DodgerBlue">DodgerBlue</option>
            <option value="MediumSeaGreen">MediumSeaGreen</option>
            <option value="Gray">Gray</option>
            <option value="SlateBlue">SlateBlue</option>
            <option value="Violet">Violet</option>
            <option value="LightGray">LightGray</option>
        </select>

        <br>

        <button type="submit">Enviar</button>
    </form>
</body>
</html>