<?php

/* partials/comments.html.twig */
class __TwigTemplate_56dbdd2acc6c88e1b642844853a83d8a0095a57c672ce6ef6dfe6fcbd3f31f2d extends Twig_Template
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
        if ($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "enable", array())) {
            // line 2
            if (twig_length_filter($this->env, $this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array()))) {
                // line 3
                echo "<div class=\"comment-holder\">
  <div class=\"comment-thread\">
    <ol class=\"comment-list\">
      ";
                // line 6
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(array_reverse($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "twig", array()), "comments", array())));
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
                foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
                    // line 7
                    echo "      <li class=\"comment byuser bypostauthor thread-";
                    if (($this->getAttribute($context["loop"], "index", array()) % 2 == 0)) {
                        echo "even";
                    } else {
                        echo "odd";
                    }
                    echo " depth-1 parent\">
        <article id=\"div-comment-";
                    // line 8
                    echo $this->getAttribute($context["loop"], "index", array());
                    echo "\" class=\"comment-body\">
          <div class=\"comment-meta\" kind=\"m\">
            <div class=\"comment-author\">";
                    // line 10
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "author", array()));
                    echo "</div>
            <div class=\"comment-metadata\">
              ";
                    // line 12
                    echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate("PLUGIN_COMMENTS.WRITTEN_ON");
                    echo " ";
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "date", array()));
                    echo "
            </div>
          </div>
          <div class=\"comment-content\">
            ";
                    // line 16
                    echo twig_escape_filter($this->env, $this->getAttribute($context["comment"], "text", array()));
                    echo "
            <br />
          </div>
        </article>
      </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['comment'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 22
                echo "    </ol>
  </div>
</div>
    ";
            }
            // line 26
            echo "
    <div class=\"comment-replybox-thread\">
    <form class=\"contact-form\" name=\"";
            // line 28
            echo $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "name", array());
            echo "\"
          action=\"";
            // line 29
            echo (($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array())) ? ((($context["base_url"] ?? null) . $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "action", array()))) : ($this->getAttribute(($context["page"] ?? null), "url", array())));
            echo "\"
          method=\"";
            // line 30
            echo _twig_default_filter(twig_upper_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "method", array())), "POST");
            echo "\">
    ";
            // line 31
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "fields", array()));
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
            foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
                // line 32
                echo "
        ";
                // line 33
                $context["value"] = $this->getAttribute(($context["form"] ?? null), "value", array(0 => $this->getAttribute($context["field"], "name", array())), "method");
                // line 34
                echo "        ";
                if ($this->getAttribute($context["field"], "evaluateDefault", array())) {
                    // line 35
                    echo "            ";
                    $context["value"] = $this->env->getExtension('Grav\Common\Twig\TwigExtension')->evaluateFunc($this->getAttribute($context["field"], "evaluateDefault", array()));
                    // line 36
                    echo "        ";
                }
                // line 37
                echo "        <div>
            ";
                // line 38
                $this->loadTemplate((((("forms/fields/" . $this->getAttribute($context["field"], "type", array())) . "/") . $this->getAttribute($context["field"], "type", array())) . ".html.twig"), "partials/comments.html.twig", 38)->display($context);
                // line 39
                echo "        </div>
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
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 41
            echo "
        <div class=\"buttons\">
        ";
            // line 43
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute($this->getAttribute(($context["grav"] ?? null), "config", array()), "plugins", array()), "comments", array()), "form", array()), "buttons", array()));
            foreach ($context['_seq'] as $context["_key"] => $context["button"]) {
                // line 44
                echo "            <button class=\"btn\" type=\"";
                echo (($this->getAttribute($context["button"], "type", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "type", array()), "submit")) : ("submit"));
                echo "\">";
                echo (($this->getAttribute($context["button"], "value", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute($context["button"], "value", array()), "Submit")) : ("Submit"));
                echo "</button>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['button'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 46
            echo "        </div>

        ";
            // line 48
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->nonceFieldFunc("form", "form-nonce");
            echo "
    </form>

    ";
            // line 51
            if ($this->getAttribute(($context["form"] ?? null), "message", array())) {
                // line 52
                echo "    <div class=\"alert\">";
                echo $this->getAttribute(($context["form"] ?? null), "message", array());
                echo "</div>
    ";
            }
            // line 54
            echo "    </div>

";
        }
    }

    public function getTemplateName()
    {
        return "partials/comments.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  203 => 54,  197 => 52,  195 => 51,  189 => 48,  185 => 46,  174 => 44,  170 => 43,  166 => 41,  151 => 39,  149 => 38,  146 => 37,  143 => 36,  140 => 35,  137 => 34,  135 => 33,  132 => 32,  115 => 31,  111 => 30,  107 => 29,  103 => 28,  99 => 26,  93 => 22,  73 => 16,  64 => 12,  59 => 10,  54 => 8,  45 => 7,  28 => 6,  23 => 3,  21 => 2,  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% if grav.twig.enable %}
{% if grav.twig.comments|length %}
<div class=\"comment-holder\">
  <div class=\"comment-thread\">
    <ol class=\"comment-list\">
      {% for comment in grav.twig.comments|array_reverse %}
      <li class=\"comment byuser bypostauthor thread-{% if loop.index is even %}even{% else %}odd{% endif %} depth-1 parent\">
        <article id=\"div-comment-{{ loop.index }}\" class=\"comment-body\">
          <div class=\"comment-meta\" kind=\"m\">
            <div class=\"comment-author\">{{comment.author|e}}</div>
            <div class=\"comment-metadata\">
              {{'PLUGIN_COMMENTS.WRITTEN_ON'|t}} {{comment.date|e}}
            </div>
          </div>
          <div class=\"comment-content\">
            {{comment.text|e}}
            <br />
          </div>
        </article>
      </li>
      {% endfor %}
    </ol>
  </div>
</div>
    {% endif %}

    <div class=\"comment-replybox-thread\">
    <form class=\"contact-form\" name=\"{{ grav.config.plugins.comments.form.name }}\"
          action=\"{{ grav.config.plugins.comments.form.action ?  base_url ~ grav.config.plugins.comments.form.action : page.url }}\"
          method=\"{{ grav.config.plugins.comments.form.method|upper|default('POST') }}\">
    {% for field in grav.config.plugins.comments.form.fields %}

        {% set value = form.value(field.name) %}
        {% if field.evaluateDefault %}
            {% set value = evaluate(field.evaluateDefault) %}
        {% endif %}
        <div>
            {% include \"forms/fields/#{field.type}/#{field.type}.html.twig\" %}
        </div>
    {% endfor %}

        <div class=\"buttons\">
        {% for button in grav.config.plugins.comments.form.buttons %}
            <button class=\"btn\" type=\"{{ button.type|default('submit') }}\">{{ button.value|default('Submit') }}</button>
        {% endfor %}
        </div>

        {{ nonce_field('form', 'form-nonce') }}
    </form>

    {% if form.message %}
    <div class=\"alert\">{{ form.message }}</div>
    {% endif %}
    </div>

{% endif %}
", "partials/comments.html.twig", "C:\\laragon\\www\\grav\\user\\themes\\receptar\\templates\\partials\\comments.html.twig");
    }
}
