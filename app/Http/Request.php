<?php

namespace App\Http;

class Request
{
    /**
     * @var string[]
     */
    protected $parameters;

    /**
     * @param string[] $parameters
     */
    public function __construct(array $parameters = [])
    {
        $this->parameters = $parameters;
    }

    /**
     * @param string $name
     *
     * @return string
     */
    public function get(string $name): string
    {
        return $this->parameters[$name];
    }
}
