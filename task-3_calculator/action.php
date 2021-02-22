<?php
echo '<a href="/SideHustle/task-3_calculator/index.php"><button>Calculator</button></a><br><p>';

$var1 = $_REQUEST['var1'];
$var2 = $_REQUEST['var2'];
$op = $_REQUEST['op'];

switch ($op) {
    case '+':
        $result = $var1 + $var2;
        break;
    case '-':
        $result = $var1 - $var2;
        break;
    case '/':
        $result = $var1 / $var2;
        break;
    case '*':
        $result = $var1 * $var2;
        break;
    case '**':
        $result = $var1 ** $var2;
        break;
    case 'root':
        $result = $var2 ** (1/$var1);
        break;
    case 'log':
        $result = log10($var2);
        break;
    case 'sin':
        $result = sin(deg2rad($var2));
        break;
    case 'cos':
        $result = cos(deg2rad($var2));
        break;
    case 'tan':
        $result = tan(deg2rad($var2));
        break;
    case 'asin':
        $result = rad2deg(asin($var2));
        break;
    case 'acos':
        $result = rad2deg(acos($var2));
        break;
    case 'atan':
        $result = rad2deg(atan($var2));
        break;
    case 'ln':
        $result = log($var2);
        break;
    case 'e':
        $result = exp($var2);
        break;
    default:
        $result = 'Can\'t solve';
};

echo $var1.' '.$op.' '.$var2.' = <b>'.round($result, 2).'</b>';