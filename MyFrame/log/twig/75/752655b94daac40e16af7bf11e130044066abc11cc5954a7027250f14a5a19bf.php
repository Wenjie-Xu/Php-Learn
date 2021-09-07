<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* Layout/default.html */
class __TwigTemplate_dff8805d3deb57acbcc05786d3f27cc57dada3084db47ecee49026cb671acc46 extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>MyFrame</title>
</head>
<body>
    <h1>欢迎使用自己的框架！</h1>
    <content>
        ";
        // line 12
        $this->displayBlock('content', $context, $blocks);
        // line 14
        echo "    </content>
</body>
</html>";
    }

    // line 12
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 13
        echo "        ";
    }

    public function getTemplateName()
    {
        return "Layout/default.html";
    }

    public function getDebugInfo()
    {
        return array (  63 => 13,  59 => 12,  53 => 14,  51 => 12,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"UTF-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\">
    <title>MyFrame</title>
</head>
<body>
    <h1>欢迎使用自己的框架！</h1>
    <content>
        {% block content %}
        {% endblock %}
    </content>
</body>
</html>", "Layout/default.html", "/usr/local/var/www/MyFrame/app/views/Layout/default.html");
    }
}
