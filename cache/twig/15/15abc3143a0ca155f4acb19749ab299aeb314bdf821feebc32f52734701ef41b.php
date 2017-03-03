<?php

/* resume.html.twig */
class __TwigTemplate_0a58600fa366ab990f8becbf5c182306d86d707da913c428a509ba470e68b155 extends Twig_Template
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
        $this->loadTemplate("resume.html.twig", "resume.html.twig", 1, "1129398982")->display($context);
        // line 34
        echo "

";
    }

    public function getTemplateName()
    {
        return "resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  21 => 34,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

  {% set collection = page.collection() %}
  {% set base_url = page.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
    {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
  {% endif  %}

  {% block content %}
    <div class=\"large-6 columns\">
      {% for module in page.collection({'items':{'@taxonomy.category': 'left'},'order': {'by': 'date', 'dir': 'desc'}}) %}
        {% if module.template %}
          {% include 'layouts/' ~ module.template ~ '.html.twig' %}
        {% endif %}
      {% endfor %}
    </div> 

    <div class=\"large-6 columns\">
      {% for module in page.collection({'items':{'@taxonomy.category': 'right'},'order': {'by': 'date', 'dir': 'desc'}}) %}
        {% if module.template %}
          {% include 'layouts/' ~ module.template ~ '.html.twig' %}
        {% endif %}
      {% endfor %}
     </div>
  {% endblock %}

{% endembed %}


", "resume.html.twig", "/Users/apostolossiokas/Documents/cv/user/themes/resume/templates/resume.html.twig");
    }
}


/* resume.html.twig */
class __TwigTemplate_0a58600fa366ab990f8becbf5c182306d86d707da913c428a509ba470e68b155_1129398982 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "resume.html.twig", 1);
        $this->blocks = array(
            'content' => array($this, 'block_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "partials/base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 3
        $context["collection"] = $this->getAttribute(($context["page"] ?? null), "collection", array(), "method");
        // line 4
        $context["base_url"] = $this->getAttribute(($context["page"] ?? null), "url", array());
        // line 5
        $context["feed_url"] = ($context["base_url"] ?? null);
        // line 7
        if ((($context["base_url"] ?? null) == "/")) {
            // line 8
            $context["base_url"] = "";
        }
        // line 11
        if ((($context["base_url"] ?? null) == ($context["base_url_relative"] ?? null))) {
            // line 12
            $context["feed_url"] = ((($context["base_url"] ?? null) . "/") . $this->getAttribute(($context["page"] ?? null), "slug", array()));
        }
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 15
    public function block_content($context, array $blocks = array())
    {
        // line 16
        echo "    <div class=\"large-6 columns\">
      ";
        // line 17
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.category" => "left"), "order" => array("by" => "date", "dir" => "desc"))), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 18
            echo "        ";
            if ($this->getAttribute($context["module"], "template", array())) {
                // line 19
                echo "          ";
                $this->loadTemplate((("layouts/" . $this->getAttribute($context["module"], "template", array())) . ".html.twig"), "resume.html.twig", 19)->display($context);
                // line 20
                echo "        ";
            }
            // line 21
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 22
        echo "    </div> 

    <div class=\"large-6 columns\">
      ";
        // line 25
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable($this->getAttribute(($context["page"] ?? null), "collection", array(0 => array("items" => array("@taxonomy.category" => "right"), "order" => array("by" => "date", "dir" => "desc"))), "method"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["module"]) {
            // line 26
            echo "        ";
            if ($this->getAttribute($context["module"], "template", array())) {
                // line 27
                echo "          ";
                $this->loadTemplate((("layouts/" . $this->getAttribute($context["module"], "template", array())) . ".html.twig"), "resume.html.twig", 27)->display($context);
                // line 28
                echo "        ";
            }
            // line 29
            echo "      ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['module'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 30
        echo "     </div>
  ";
    }

    public function getTemplateName()
    {
        return "resume.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  224 => 30,  210 => 29,  207 => 28,  204 => 27,  201 => 26,  184 => 25,  179 => 22,  165 => 21,  162 => 20,  159 => 19,  156 => 18,  139 => 17,  136 => 16,  133 => 15,  129 => 1,  126 => 12,  124 => 11,  121 => 8,  119 => 7,  117 => 5,  115 => 4,  113 => 3,  99 => 1,  21 => 34,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% embed 'partials/base.html.twig' %}

  {% set collection = page.collection() %}
  {% set base_url = page.url %}
  {% set feed_url = base_url %}

  {% if base_url == '/' %}
    {% set base_url = '' %}
  {% endif %}

  {% if base_url == base_url_relative %}
    {% set feed_url = base_url~'/'~page.slug %}
  {% endif  %}

  {% block content %}
    <div class=\"large-6 columns\">
      {% for module in page.collection({'items':{'@taxonomy.category': 'left'},'order': {'by': 'date', 'dir': 'desc'}}) %}
        {% if module.template %}
          {% include 'layouts/' ~ module.template ~ '.html.twig' %}
        {% endif %}
      {% endfor %}
    </div> 

    <div class=\"large-6 columns\">
      {% for module in page.collection({'items':{'@taxonomy.category': 'right'},'order': {'by': 'date', 'dir': 'desc'}}) %}
        {% if module.template %}
          {% include 'layouts/' ~ module.template ~ '.html.twig' %}
        {% endif %}
      {% endfor %}
     </div>
  {% endblock %}

{% endembed %}


", "resume.html.twig", "/Users/apostolossiokas/Documents/cv/user/themes/resume/templates/resume.html.twig");
    }
}
