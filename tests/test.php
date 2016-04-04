<?php require (__DIR__ . '/../vendor/autoload.php');

use Garam\BasicComposer\User;
use Garam\BasicComposer\WaterCup;

$user = new User();
print_r($user);
$user->setAge(30);
printf("%d\n",$user->getAge());
printf("%s\n",$user->getName());
// ??$user->setCup(new WaterCup);
$user->setLiquid(1123123);
$log = new Monolog\Logger('test');
$log = new Monolog\Logger('name');
$log->pushHandler(new Monolog\Handler\StreamHandler(__DIR__.'/../app.log', Monolog\Logger::WARNING));
$log->addWarning(sprintf("water : %s\n",$user->getLiquid()));

 ?>
