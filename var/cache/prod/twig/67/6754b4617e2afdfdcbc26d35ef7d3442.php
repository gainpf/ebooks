<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* master/index.html.twig */
class __TwigTemplate_a3c1621fadca3ea4794d494fcbc397e2 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $this->parent = $this->load("base.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 4
        yield "
\t<header class=\"header\">
\t\t<nav class=\"nav container\">
\t\t\t<div class=\"logo\">
\t\t\t\t<svg width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t<path d=\"M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z\"/>
\t\t\t\t\t<path d=\"M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z\"/>
\t\t\t\t</svg>
\t\t\t\t<span>MPC Book Vault</span>
\t\t\t</div>
\t\t\t<div class=\"nav-links\">";
        // line 15
        yield "\t\t\t\t";
        // line 18
        yield "\t\t\t</div>
\t\t\t<div class=\"nav-actions\">
\t\t\t\t";
        // line 26
        yield "\t\t\t\t";
        // line 35
        yield "\t\t\t</div>
\t\t</nav>
\t</header>

\t<main>
\t\t<section class=\"hero\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"hero-content\">
\t\t\t\t\t<h1>Discover Your Next
\t\t\t\t\t\t<span>Biblical</span>
\t\t\t\t\t\tBook</h1>
\t\t\t\t\t<i>\"An intelligent heart acquires knowledge, and the ear of the wise seeks knowledge.\" <span class=\"badge badge-light\">Proverbs: 18:15</span></i>
\t\t\t\t\t<div class=\"hero-actions\">
\t\t\t\t\t\t<button class=\"primary-btn\">Happy Reading...</button>
\t\t\t\t\t\t";
        // line 50
        yield "\t\t\t\t\t</div>
\t\t\t\t\t";
        // line 58
        yield "\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

\t\t<section class=\"featured\">
\t\t\t<div class=\"container\">
\t\t\t\t<div class=\"section-header\">
\t\t\t\t\t<h2>Featured Books</h2>
\t\t\t\t\t";
        // line 67
        yield "\t\t\t\t</div>
                ";
        // line 69
        yield "
\t\t\t\t<div class=\"book-grid\" id=\"featured-books\">

\t\t\t\t\t<div class=\"book-card border border-light shadow-sm rounded\">
\t\t\t\t\t\t<div class=\"book-card-image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/even_in_our_darkness.jpg"), "html", null, true);
        yield "\" alt=\"Even in our darkness\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"book-card-content\">
\t\t\t\t\t\t\t<h6 class=\"text-uppercase\">Even in our darkness</h6>
\t\t\t\t\t\t\t<p class=\"book-card-author\">Jack S. Deere</p>


\t\t\t\t\t\t\t<span class=\"badge text-bg-warning\">300 pages</span>

\t\t\t\t\t\t\t<span class=\"badge text-bg-danger\">3.3MB</span>
                            <span class=\"badge text-bg-info\">2018</span>

\t\t\t\t\t\t\t<div class=\"book-card-footer mt-3\">
\t\t\t\t\t\t\t\t<a  class=\"btn btn-primary btn-sm m-1 read\" target=\"__blank\" href=\"";
        // line 88
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ebook_reader", ["name" => "even_in_our_darkness.pdf"], true);
        yield "\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-book me-1\"></i>Read</a>
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"btn btn-light btn-sm m-1\" href=\"";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/even_in_our_darkness.pdf"), "html", null, true);
        yield "\" download>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-download me-1\"></i>Download</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>
\t\t\t\t\t<div class=\"book-card border border-light shadow-sm rounded\">
\t\t\t\t\t\t<div class=\"book-card-image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 97
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/encyclopedia.jpg"), "html", null, true);
        yield "\" alt=\"Encyclopedia\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"book-card-content\">
\t\t\t\t\t\t\t<h6 class=\"text-uppercase\">Encyclopedia Biblical</h6>
\t\t\t\t\t\t\t<p class=\"book-card-author\">Paul D. Gardner</p>


\t\t\t\t\t\t\t<span class=\"badge text-bg-warning\">1036 pages</span>

\t\t\t\t\t\t\t<span class=\"badge text-bg-danger\">3.7MB</span>
                            <span class=\"badge text-bg-info\">1995</span>

\t\t\t\t\t\t\t<div class=\"book-card-footer mt-3\">
\t\t\t\t\t\t\t\t<a  class=\"btn btn-primary btn-sm m-1 read\" href=\"";
        // line 111
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ebook_reader", ["name" => "encyclopedia_of_bible_characters.pdf"]);
        yield "\" target=\"__blank\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-book me-1\"></i>Read</a>
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"btn btn-light btn-sm m-1\" href=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/encyclopedia_of_bible_characters.pdf"), "html", null, true);
        yield "\" download>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-download me-1\"></i>Download</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>


\t\t\t\t\t<div class=\"book-card border border-light shadow-sm rounded\">
\t\t\t\t\t\t<div class=\"book-card-image\">
\t\t\t\t\t\t\t<img src=\"";
        // line 122
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/grc.jpg"), "html", null, true);
        yield "\" alt=\"Global renewal Christianity\">

\t\t\t\t\t\t</div>
\t\t\t\t\t\t<div class=\"book-card-content\">
\t\t\t\t\t\t\t<h6 class=\"text-uppercase text-break\">Global renwal Christianity</h6>
\t\t\t\t\t\t\t<p class=\"book-card-author\">Vinson Synan and Amos Yong</p>


\t\t\t\t\t\t\t<span class=\"badge text-bg-warning\">419 pages</span>

\t\t\t\t\t\t\t<span class=\"badge text-bg-danger\">4.5MB</span>
                            <span class=\"badge text-bg-info\">2013</span>

\t\t\t\t\t\t\t<div class=\"book-card-footer mt-3\">
\t\t\t\t\t\t\t\t<a class=\"btn btn-primary btn-sm m-1 read\" href=\"";
        // line 136
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("ebook_reader", ["name" => "global_renewal_christianity.pdf"]);
        yield "\" target=\"__blank\">
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-book me-1\"></i>Read</a>
\t\t\t\t\t\t\t\t<a type=\"button\" class=\"btn btn-light btn-sm m-1\" href=\"";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("pdf/global_renewal_christianity.pdf"), "html", null, true);
        yield "\" download>
\t\t\t\t\t\t\t\t\t<i class=\"bi bi-download me-1\"></i>Download</a>
\t\t\t\t\t\t\t</div>
\t\t\t\t\t\t</div>
\t\t\t\t\t</div>

\t\t\t\t</div>
\t\t\t</div>
\t\t</section>

      

\t\t";
        // line 156
        yield "
\t\t";
        // line 177
        yield "
\t\t";
        // line 191
        yield "\t</main>
\t


\t<footer class=\"footer\">
\t\t<div class=\"container\">
\t\t\t<div class=\"footer-content\">
\t\t\t\t<div class=\"footer-section\">
\t\t\t\t\t<div class=\"logo\">
\t\t\t\t\t\t<svg width=\"24\" height=\"24\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t<path d=\"M2 3h6a4 4 0 0 1 4 4v14a3 3 0 0 0-3-3H2z\"/>
\t\t\t\t\t\t\t<path d=\"M22 3h-6a4 4 0 0 0-4 4v14a3 3 0 0 1 3-3h7z\"/>
\t\t\t\t\t\t</svg>
\t\t\t\t\t\t<span>MPC Book Vault</span>
\t\t\t\t\t</div>
\t\t\t\t\t<p>Your premier destination for biblical reading.</p>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-section\">
\t\t\t\t\t<h3>Quick Links</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Home</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Browse</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Categories</a></li>
\t\t\t\t\t\t<li><a href=\"#\">My Library</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-section\">
\t\t\t\t\t<h3>Support</h3>
\t\t\t\t\t<ul>
\t\t\t\t\t\t<li><a href=\"#\">Help Center</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Contact Us</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Privacy Policy</a></li>
\t\t\t\t\t\t<li><a href=\"#\">Terms of Service</a></li>
\t\t\t\t\t</ul>
\t\t\t\t</div>
\t\t\t\t<div class=\"footer-section\">
\t\t\t\t\t<h3>Connect</h3>
\t\t\t\t\t<div class=\"social-links\">
\t\t\t\t\t\t<a href=\"#\" aria-label=\"Twitter\">
\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t<path d=\"M22 4s-.7 2.1-2 3.4c1.6 10-9.4 17.3-18 11.6 2.2.1 4.4-.6 6-2C3 15.5.5 9.6 3 5c2.2 2.6 5.6 4.1 9 4-.9-4.2 4-6.6 7-3.8 1.1 0 3-1.2 3-1.2z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" aria-label=\"Facebook\">
\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t<path d=\"M18 2h-3a5 5 0 0 0-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 0 1 1-1h3z\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t\t<a href=\"#\" aria-label=\"Instagram\">
\t\t\t\t\t\t\t<svg width=\"20\" height=\"20\" viewbox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\">
\t\t\t\t\t\t\t\t<rect width=\"20\" height=\"20\" x=\"2\" y=\"2\" rx=\"5\" ry=\"5\"/>
\t\t\t\t\t\t\t\t<path d=\"M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z\"/>
\t\t\t\t\t\t\t\t<line x1=\"17.5\" x2=\"17.51\" y1=\"6.5\" y2=\"6.5\"/>
\t\t\t\t\t\t\t</svg>
\t\t\t\t\t\t</a>
\t\t\t\t\t</div>
\t\t\t\t</div>
\t\t\t</div>
\t\t\t<div class=\"footer-bottom\">
\t\t\t\t<p>&copy; 2025 MPCBookVault. All rights reserved.</p>
\t\t\t</div>
\t\t</div>
\t</footer>

";
        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "master/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  226 => 191,  223 => 177,  220 => 156,  205 => 138,  200 => 136,  183 => 122,  171 => 113,  166 => 111,  149 => 97,  139 => 90,  134 => 88,  117 => 74,  110 => 69,  107 => 67,  97 => 58,  94 => 50,  78 => 35,  76 => 26,  72 => 18,  70 => 15,  58 => 4,  51 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "master/index.html.twig", "/home/danny/pwc/e_books/templates/master/index.html.twig");
    }
}
