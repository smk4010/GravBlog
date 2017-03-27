<?php

/* default_alt.html.twig */
class __TwigTemplate_80ef694eef2fd3968907d4d753e72b29f6689b61203591be43730d09cf969760 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("partials/base.html.twig", "default_alt.html.twig", 1);
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
        // line 2
        $context["banner"] = twig_first($this->env, $this->getAttribute($this->getAttribute(($context["page"] ?? null), "media", array()), "images", array()));
        // line 3
        $context["template_body_classes"] = "error404 is-not-singular not-front-page not-scrolled";
        // line 4
        $context["singular"] = false;
        // line 1
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 5
    public function block_content($context, array $blocks = array())
    {
        // line 6
        echo "<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
  <section class=\"alt-content\">
    <header class=\"page-header\">
      <h1 class=\"page-title\">";
        // line 9
        echo $this->getAttribute($this->getAttribute(($context["page"] ?? null), "header", array()), "title", array());
        echo "</h1>
    </header>
    <p>";
        // line 11
        echo $this->getAttribute(($context["page"] ?? null), "content", array());
        echo "</p>
  </section>
</main>
";
    }

    public function getTemplateName()
    {
        return "default_alt.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  48 => 11,  43 => 9,  38 => 6,  35 => 5,  31 => 1,  29 => 4,  27 => 3,  25 => 2,  11 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% extends 'partials/base.html.twig' %}
{% set banner = page.media.images|first %}
{% set template_body_classes = 'error404 is-not-singular not-front-page not-scrolled' %}
{% set singular = false %}
{% block content %}
<main id=\"main\" class=\"site-main clearfix\" role=\"main\">
  <section class=\"alt-content\">
    <header class=\"page-header\">
      <h1 class=\"page-title\">{{ page.header.title }}</h1>
    </header>
    <p>{{ page.content }}</p>
  </section>
</main>
{% endblock %}
", "default_alt.html.twig", "C:\\laragon\\www\\grav\\user\\themes\\receptar\\templates\\default_alt.html.twig");
    }
}
