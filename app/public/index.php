<?php
/**
 * @author Ildar Asanov <i.asanov@corp.mail.ru>
 */
require __DIR__ . '/../vendor/autoload.php';

use App\Connector;

try {
$pattern = !empty($_GET['p']) ? $_GET['p'] : 'FactoryMethod';
$connector = new Connector();

?>
<html>
<head>
	<title>Паттерны проектирования: <?= $pattern ?></title>
	<link rel="stylesheet" href="/css/main.css"/>
</head>
<body>
<header>
	<h1><?= $pattern ?></h1>
</header>
<div class="content">

    <?php
    Connector::run($pattern, $_GET);
    } catch (Throwable $exception) {
        $trace = str_replace('#', '<br>', $exception->getTraceAsString());
        echo "<span style='color:red;'><b>Error</b></span>: {$exception->getMessage()}<br>{$trace}";
    }
    ?>
</div>
</body>
</html>
