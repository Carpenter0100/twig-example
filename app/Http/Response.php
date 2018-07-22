<?php

namespace App\Http;

class Response
{
    /**
     * @var string
     */
    protected $content;

    /**
     * @param string $content
     */
    public function __construct(string $content)
    {
        $this->content = $content;
    }

    /**
     * @return void
     */
    public function send(): void
    {
        header('HTTP/1.1 200 OK');
        echo $this->content;
    }
}
