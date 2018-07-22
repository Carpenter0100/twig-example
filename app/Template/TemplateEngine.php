<?php

namespace App\Template;

class TemplateEngine
{
    /**
     * @var \Twig_Environment
     */
    protected $twig;

    /**
     * @param mixed $pathToTemplates
     * @param string $templateCacheDir
     */
    public function __construct($pathToTemplates, string $templateCacheDir)
    {
        $loader = new \Twig_Loader_Filesystem($pathToTemplates);
        $this->twig = new \Twig_Environment($loader);
        $this->twig->setCache(new \Twig_Cache_Filesystem($templateCacheDir));
    }

    /**
     * @param string $name
     * @param string[] $placeholder
     *
     * @throws
     *
     * @return string
     */
    public function render(string $name, array $placeholder = []): string
    {
        return $this->twig->render($name, $placeholder);
    }
}
