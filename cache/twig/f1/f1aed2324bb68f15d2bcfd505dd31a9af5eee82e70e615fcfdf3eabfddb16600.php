<?php

/* layouts/experience.html.twig */
class __TwigTemplate_d4e333824c762fc498fc8ea4b29d1f231c988895fef0bfa063f92614b98111ef extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        echo "<div class=\"avoid_pagebreak\">
  <h4>";
        // line 2
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "title", array());
        echo "</h4>

  ";
        // line 4
        echo $this->getAttribute(($context["module"] ?? null), "content", array());
        echo "

  <div class=\"row experience\">
    ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "experience", array()));
        $context['loop'] = array(
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        );
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 8
            echo "    <div class=\"large-6 medium-6 small-12 columns ";
            if ($this->getAttribute($context["loop"], "last", array())) {
                echo "end";
            }
            echo " ";
            if ($this->getAttribute($context["item"], "animation", array())) {
                echo "animated ";
                echo $this->getAttribute($context["item"], "animation", array());
            }
            echo "\">
      <div class=\"year\">";
            // line 9
            echo $this->getAttribute($context["item"], "years", array());
            echo "</div>
      <div class=\"exp_data\">
        <div class=\"date\">";
            // line 11
            echo $this->getAttribute($context["item"], "date", array());
            echo "</div>
        <div class=\"role\">";
            // line 12
            echo $this->getAttribute($context["item"], "role", array());
            echo "</div>
        <div class=\"company\">";
            // line 13
            echo $this->getAttribute($context["item"], "company", array());
            echo "</div>
      </div>
    </div>
    ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 17
        echo "  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/experience.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  93 => 17,  75 => 13,  71 => 12,  67 => 11,  62 => 9,  50 => 8,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"avoid_pagebreak\">
  <h4>{{ module.header.title }}</h4>

  {{ module.content }}

  <div class=\"row experience\">
    {% for item in module.header.experience %}
    <div class=\"large-6 medium-6 small-12 columns {% if loop.last %}end{% endif %} {% if item.animation %}animated {{ item.animation }}{% endif %}\">
      <div class=\"year\">{{ item.years }}</div>
      <div class=\"exp_data\">
        <div class=\"date\">{{ item.date }}</div>
        <div class=\"role\">{{ item.role }}</div>
        <div class=\"company\">{{ item.company }}</div>
      </div>
    </div>
    {% endfor %}
  </div>
</div>
", "layouts/experience.html.twig", "/Users/apostolossiokas/Documents/cv/user/themes/resume/templates/layouts/experience.html.twig");
    }
}
