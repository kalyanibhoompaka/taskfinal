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

/* themes/custom/my_custom_theme/templates/page.html.twig */
class __TwigTemplate_20f25a3f62781475a437c0a6a1acc130f19242ea9b69496853f41b02bbd63ffd extends \Twig\Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        echo "<div class=\"tabs-section\">
  <!-- Tab Links --> 
  ";
        // line 3
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["page"] ?? null), "header", [], "any", false, false, true, 3), 3, $this->source), "html", null, true);
        echo "
  <ul class=\"nav nav-tabs\">
  
    <li class=\"active\">
      <a href=\"#tab1\" class=\"tab-link\" data-tab=\"tab1\" id=\"featured-tab\" >
      Featured Conferences</a>
    </li>
    <li>
      <a href=\"#tab2\" class=\"tab-link\" data-tab=\"tab2\" id=\"recommended-tab\" >
      Recommended Conferences</a>
    </li>
    <li>
      <a href=\"#tab3\" class=\"tab-link\" data-tab=\"tab3\">Past Conferences</a>
    </li>
  </ul>

  <!-- Tab Content <img src=\"themes/custom/my_custom_theme/images/vector.png\">-->
  <div class=\"tab-content\">
    <!-- Featured Conferences Content -->
    <div id=\"tab1\" class=\"tab-pane active\">
      <div class=\"cards-container\">
        ";
        // line 24
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["featured_conferences"] ?? null), 24, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <!-- Recommended Conferences Content -->
    <div id=\"tab2\" class=\"tab-pane\">
      <div class=\"cards-container\">
        ";
        // line 31
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["recommended_conferences"] ?? null), 31, $this->source), "html", null, true);
        echo "
      </div>
    </div>

    <!-- Past Conferences Content -->
    <div id=\"tab3\" class=\"tab-pane\">
      <div class=\"cards-container\">
        ";
        // line 38
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["past_conferences"] ?? null), 38, $this->source), "html", null, true);
        echo "
      </div>
    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/my_custom_theme/templates/page.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 38,  77 => 31,  67 => 24,  43 => 3,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<div class=\"tabs-section\">
  <!-- Tab Links --> 
  {{ page.header }}
  <ul class=\"nav nav-tabs\">
  
    <li class=\"active\">
      <a href=\"#tab1\" class=\"tab-link\" data-tab=\"tab1\" id=\"featured-tab\" >
      Featured Conferences</a>
    </li>
    <li>
      <a href=\"#tab2\" class=\"tab-link\" data-tab=\"tab2\" id=\"recommended-tab\" >
      Recommended Conferences</a>
    </li>
    <li>
      <a href=\"#tab3\" class=\"tab-link\" data-tab=\"tab3\">Past Conferences</a>
    </li>
  </ul>

  <!-- Tab Content <img src=\"themes/custom/my_custom_theme/images/vector.png\">-->
  <div class=\"tab-content\">
    <!-- Featured Conferences Content -->
    <div id=\"tab1\" class=\"tab-pane active\">
      <div class=\"cards-container\">
        {{ featured_conferences}}
      </div>
    </div>

    <!-- Recommended Conferences Content -->
    <div id=\"tab2\" class=\"tab-pane\">
      <div class=\"cards-container\">
        {{ recommended_conferences }}
      </div>
    </div>

    <!-- Past Conferences Content -->
    <div id=\"tab3\" class=\"tab-pane\">
      <div class=\"cards-container\">
        {{ past_conferences }}
      </div>
    </div>
  </div>
</div>
", "themes/custom/my_custom_theme/templates/page.html.twig", "D:\\xampp\\htdocs\\drupaltask\\themes\\custom\\my_custom_theme\\templates\\page.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array();
        static $filters = array("escape" => 3);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                [],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
