<?php

/* layouts/skills.html.twig */
class __TwigTemplate_1ea489aa5abf2ab9d897b52a23d0824510de35c686c0dcb0be55586013dc3f02 extends Twig_Template
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

  <div class=\"row design\">
    <div class=\"large-7 columns ";
        // line 7
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "column1_animation", array())) {
            echo "animated ";
            echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "column1_animation", array());
        }
        echo "\">
      <h6>";
        // line 8
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "column1_name", array());
        echo "</h6>
      ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "column1", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 10
            echo "      <ul class=\"small-block-grid-2\">
        <li class=\"name\">";
            // line 11
            echo $this->getAttribute($context["item"], "name", array());
            echo "</li>
        <li>
          <ul class=\"small-block-grid-8 ellipses\">
            ";
            // line 14
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(range(1, 8));
            foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
                // line 15
                echo "            <li><span ";
                if (($context["i"] > $this->getAttribute($context["item"], "level", array()))) {
                    echo "class=\"grey\"";
                }
                echo "></span></li>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 17
            echo "          </ul>
        </li>
      </ul>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 21
        echo "    </div>
    <div class=\"large-5 columns ";
        // line 22
        if ($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "column2_animation", array())) {
            echo "animated ";
            echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "column2_animation", array());
        }
        echo "\">
      <h6>";
        // line 23
        echo $this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "column2_name", array());
        echo "</h6>
      ";
        // line 24
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute(($context["module"] ?? null), "header", array()), "column2", array()));
        foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
            // line 25
            echo "      <div class=\"name\">";
            echo $this->getAttribute($context["item"], "name", array());
            echo "</div>
      ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "    </div>
  </div>
</div>
";
    }

    public function getTemplateName()
    {
        return "layouts/skills.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  108 => 27,  99 => 25,  95 => 24,  91 => 23,  84 => 22,  81 => 21,  72 => 17,  61 => 15,  57 => 14,  51 => 11,  48 => 10,  44 => 9,  40 => 8,  33 => 7,  27 => 4,  22 => 2,  19 => 1,);
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

  <div class=\"row design\">
    <div class=\"large-7 columns {% if module.header.column1_animation %}animated {{ module.header.column1_animation }}{% endif %}\">
      <h6>{{ module.header.column1_name }}</h6>
      {% for item in module.header.column1 %}
      <ul class=\"small-block-grid-2\">
        <li class=\"name\">{{ item.name }}</li>
        <li>
          <ul class=\"small-block-grid-8 ellipses\">
            {% for i in 1..8 %}
            <li><span {% if i > item.level %}class=\"grey\"{% endif %}></span></li>
            {% endfor %}
          </ul>
        </li>
      </ul>
      {% endfor %}
    </div>
    <div class=\"large-5 columns {% if module.header.column2_animation %}animated {{ module.header.column2_animation }}{% endif %}\">
      <h6>{{ module.header.column2_name }}</h6>
      {% for item in module.header.column2 %}
      <div class=\"name\">{{ item.name }}</div>
      {% endfor %}
    </div>
  </div>
</div>
", "layouts/skills.html.twig", "/Users/apostolossiokas/Documents/cv/user/themes/resume/templates/layouts/skills.html.twig");
    }
}
