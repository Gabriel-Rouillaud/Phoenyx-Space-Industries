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

/* index/index.html.twig */
class __TwigTemplate_d779e91e00e8334abf34779b2abe47086fc86382faa4a876c9f078cff01faaf0 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'stylesheets' => [$this, 'block_stylesheets'],
            'li' => [$this, 'block_li'],
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base_index.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "index/index.html.twig"));

        $this->parent = $this->loadTemplate("base_index.html.twig", "index/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Phoenix Space Industries";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 4
    public function block_stylesheets($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        echo "<link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("assets/css/style.css"), "html", null, true);
        echo "\">";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_li($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "li"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "li"));

        // line 7
        echo "    <li><a href=";
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("solar-map");
        echo ">Map</a></li>
    <li><a href=";
        // line 8
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("destinations");
        echo " >Our Destinations</a></li>
    <li><a href=";
        // line 9
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
        echo ">Login</a></li>
";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 12
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "main"));

        // line 13
        echo "

    <section class=\"empty\"></section>
    <section class=\"section1 texts\">
        <div class=\"intro\">
            <img src=\"assets/img/logos/3eme_logo(1).png\" alt=\"\" class=\"resp logo\">
            <h1>Welcome to<br>Phoenix Space Industries</h1>
        </div>
        <br>
        <div>
            <div>
                <form action=\"\" method=\"post\" class=\"d-flex space-around\">
                    <label for=\"\">Departure</label>
                    <input type=\"text\">
                    <input type=\"date\" name=\"date\" id=\"date\">
                    <label for=\"\">Arrival</label>
                    <input type=\"text\">
                    <input type=\"button\" value=\"Travel\">
                </form>

            </div>
        </div>
        <div class=\"travel\">
            <div>

            </div>
        </div>
    </section>
    <section class=\"empty\"></section>

    <section class=\"section2\">
        <h2 class=\"texts\">Trending</h2>
        <div class=\"trending\">
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
        </div>
        <div class=\"trending\">
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
        </div>
    </section>

<section class=\"empty\"></section>

";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "index/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  142 => 13,  132 => 12,  120 => 9,  116 => 8,  111 => 7,  101 => 6,  80 => 4,  61 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base_index.html.twig' %}

{% block title %}Phoenix Space Industries{% endblock %}
{% block stylesheets %}<link rel=\"stylesheet\" href=\"{{ asset('assets/css/style.css') }}\">{% endblock %}

{% block li %}
    <li><a href={{ path('solar-map') }}>Map</a></li>
    <li><a href={{ path('destinations') }} >Our Destinations</a></li>
    <li><a href={{ path('app_login') }}>Login</a></li>
{% endblock %}

{% block main %}


    <section class=\"empty\"></section>
    <section class=\"section1 texts\">
        <div class=\"intro\">
            <img src=\"assets/img/logos/3eme_logo(1).png\" alt=\"\" class=\"resp logo\">
            <h1>Welcome to<br>Phoenix Space Industries</h1>
        </div>
        <br>
        <div>
            <div>
                <form action=\"\" method=\"post\" class=\"d-flex space-around\">
                    <label for=\"\">Departure</label>
                    <input type=\"text\">
                    <input type=\"date\" name=\"date\" id=\"date\">
                    <label for=\"\">Arrival</label>
                    <input type=\"text\">
                    <input type=\"button\" value=\"Travel\">
                </form>

            </div>
        </div>
        <div class=\"travel\">
            <div>

            </div>
        </div>
    </section>
    <section class=\"empty\"></section>

    <section class=\"section2\">
        <h2 class=\"texts\">Trending</h2>
        <div class=\"trending\">
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
        </div>
        <div class=\"trending\">
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
            <div>
                <img src=\"assets/img/Windows.png\" alt=\"\" class=\"resp windows\">
            </div>
        </div>
    </section>

<section class=\"empty\"></section>

{% endblock %}
", "index/index.html.twig", "/opt/lampp/htdocs/Phoenix-Space-Industries/templates/index/index.html.twig");
    }
}
