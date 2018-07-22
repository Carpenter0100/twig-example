<?php

namespace App\Home\Page;

use App\Http\Request;
use App\Http\Response;
use App\Template\TemplateEngine;

class HomePage
{
    /**
     * @var \App\Template\TemplateEngine
     */
    protected $templateEngine;

    /**
     * @param \App\Template\TemplateEngine $templateEngine
     */
    public function __construct(TemplateEngine $templateEngine)
    {
        $this->templateEngine = $templateEngine;
    }

    /**
     * @param \App\Http\Request $request
     *
     * @return \App\Http\Response
     */
    public function handle(Request $request): Response
    {
        // Demo data
        $users = [];
        for ($i = 0; $i < 10; $i++) {
            $user = new \stdClass();
            $user->name = 'Hans ' . $i;
            $users[] = $user;
        }

        // Variable Placeholders for template
        $placeholders = [
            'users' => $users,
            'cars' => ['porsche', 'mercedes', 'bmw'],
            'hello' => 'world',
        ];

        // render template
        $html = $this->templateEngine->render('Home/Theme/home.twig', $placeholders);

        return new Response($html);
    }
}
