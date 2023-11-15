<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\TemplateEngine;

class AboutController
{
    public function __construct(private TemplateEngine $view)
    {
    }

    public function index()
    {
        echo $this->view->render("/about.php", [
            'title' => 'About Page',
            'ds' => '<script>alert(123);</script>'
        ]);
    }
}
