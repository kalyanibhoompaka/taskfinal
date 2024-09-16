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

/* themes/custom/my_custom_theme/templates/views/views-view--cards-view.html.twig */
class __TwigTemplate_388264af4c580534f6e7e1e8318fc718c3406a57d75fce60819f97f9982a5387 extends \Twig\Template
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
        // line 35
        echo "

        <!-- Your view output here -->

";
        // line 40
        $context["classes"] = [0 => ((        // line 41
($context["dom_id"] ?? null)) ? (("js-view-dom-id-" . $this->sandbox->ensureToStringAllowed(($context["dom_id"] ?? null), 41, $this->source))) : (""))];
        // line 44
        echo "
<div";
        // line 45
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => ($context["classes"] ?? null)], "method", false, false, true, 45), 45, $this->source), "html", null, true);
        echo ">

  ";
        // line 47
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_prefix"] ?? null), 47, $this->source), "html", null, true);
        echo "
  ";
        // line 48
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 48, $this->source), "html", null, true);
        echo "
  ";
        // line 49
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title_suffix"] ?? null), 49, $this->source), "html", null, true);
        echo "

  ";
        // line 51
        if (($context["header"] ?? null)) {
            // line 52
            echo "    <header>
      ";
            // line 53
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["header"] ?? null), 53, $this->source), "html", null, true);
            echo "
    </header>
  ";
        }
        // line 56
        echo "
  ";
        // line 57
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["exposed"] ?? null), 57, $this->source), "html", null, true);
        echo "
  ";
        // line 58
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_before"] ?? null), 58, $this->source), "html", null, true);
        echo "

  ";
        // line 60
        if (($context["rows"] ?? null)) {
            // line 62
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["rows"] ?? null), 62, $this->source), "html", null, true);
            echo "
              <li class=\"pager__item pager__item--mini pager__item--action pager__item--previous\"><a class=\"pager__link pager__link--mini pager__link--action-link\" title=\"Go to previous page\" href=\"/drupaltask/cards-view?page=0\"><span class=\"visually-hidden\">Previous page</span></a></li>

  ";
        } elseif (        // line 65
($context["empty"] ?? null)) {
            // line 66
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["empty"] ?? null), 66, $this->source), "html", null, true);
            echo "

  ";
        }
        // line 69
        echo "
  ";
        // line 70
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["pager"] ?? null), 70, $this->source), "html", null, true);
        echo "
  ";
        // line 71
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attachment_after"] ?? null), 71, $this->source), "html", null, true);
        echo "
  ";
        // line 72
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["more"] ?? null), 72, $this->source), "html", null, true);
        echo "

  ";
        // line 74
        if (($context["footer"] ?? null)) {
            // line 75
            echo "    <footer>
      ";
            // line 76
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["footer"] ?? null), 76, $this->source), "html", null, true);
            echo "
    </footer>
  ";
        }
        // line 79
        echo "
  ";
        // line 80
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["feed_icons"] ?? null), 80, $this->source), "html", null, true);
        echo "

</div><li class=\"pager__item pager__item--mini pager__item--action pager__item--next scroll-right\"><a class=\"pager__link pager__link--mini pager__link--action-link\" title=\"Go to next page\" href=\"/drupaltask/cards-view?page=1\"><span class=\"visually-hidden\">Next page</span></a></li></div>

   </div>
";
    }

    public function getTemplateName()
    {
        return "themes/custom/my_custom_theme/templates/views/views-view--cards-view.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  138 => 80,  135 => 79,  129 => 76,  126 => 75,  124 => 74,  119 => 72,  115 => 71,  111 => 70,  108 => 69,  102 => 66,  100 => 65,  94 => 62,  92 => 60,  87 => 58,  83 => 57,  80 => 56,  74 => 53,  71 => 52,  69 => 51,  64 => 49,  60 => 48,  56 => 47,  51 => 45,  48 => 44,  46 => 41,  45 => 40,  39 => 35,);
    }

    public function getSourceContext()
    {
        return new Source("", "themes/custom/my_custom_theme/templates/views/views-view--cards-view.html.twig", "D:\\xampp\\htdocs\\drupaltask\\themes\\custom\\my_custom_theme\\templates\\views\\views-view--cards-view.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("set" => 40, "if" => 51);
        static $filters = array("escape" => 45);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['set', 'if'],
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
