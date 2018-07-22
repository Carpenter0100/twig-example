<?php

require_once __DIR__ . '/../vendor/autoload.php';

$baseDir = __DIR__ . '/..';
$templateCacheDir = $baseDir . '/cache/twig';

$modulesDir = $baseDir . '/src';
$appThemeDir = $baseDir . '/app/Theme';
$pathToTemplates = [$modulesDir, $appThemeDir];

$request = new \App\Http\Request($_REQUEST);
$templateEngine = new \App\Template\TemplateEngine($pathToTemplates, $templateCacheDir);
$homePage = new \App\Home\Page\HomePage($templateEngine);

$response = $homePage->handle($request);
$response->send();
