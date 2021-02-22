<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Calculator</title>
    <style>
        body {
            padding: 4px;
            margin: 4px;
        }

        input, select {
            padding: 6px;
        }
    </style>
</head>
<body>
<h2>Arithmetic Calculator</h2>
<form action="/SideHustle/task-3_calculator/action.php" method="post">
    <input type="number" name="var1" step="any">
    <select name="op" id="op">
        <option value="+" selected>+</option>
        <option value="-">-</option>
        <option value="/">/</option>
        <option value="*">*</option>
        <option value="**">**</option>
        <option value="root">&#8730;</option>
    </select>
    <input type="number" name="var2" step="any">
    <input type="submit" value="Calc">
</form>

<h2>Trigonometry Calculator</h2>
<form action="/SideHustle/task-3_calculator/action.php" method="post">
    <input type="hidden" name="var1" value="">
    <select name="op" id="op">
        <option value="log" selected>log</option>
        <option value="sin">sin</option>
        <option value="cos">cos</option>
        <option value="tan">tan</option>
        <option value="asin">asin</option>
        <option value="acos">acos</option>
        <option value="atan">atan</option>
        <option value="ln">ln</option>
        <option value="e">e</option>
    </select>
    <input type="number" name="var2" step="any">
    <input type="submit" value="Calc">
</form>
</body>
</html>
