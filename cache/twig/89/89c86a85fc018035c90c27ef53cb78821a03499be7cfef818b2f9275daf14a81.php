<?php

/* forms/default/field.html.twig */
class __TwigTemplate_b8df7bb034210c56e7b3585b5db508200dad2b381d1577ca024022f11e28f6a8 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
            'field' => array($this, 'block_field'),
            'outer_field_classes' => array($this, 'block_outer_field_classes'),
            'contents' => array($this, 'block_contents'),
            'label' => array($this, 'block_label'),
            'global_attributes' => array($this, 'block_global_attributes'),
            'group' => array($this, 'block_group'),
            'input' => array($this, 'block_input'),
            'prepend' => array($this, 'block_prepend'),
            'input_attributes' => array($this, 'block_input_attributes'),
            'append' => array($this, 'block_append'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        // line 1
        $context["originalValue"] = ((array_key_exists("originalValue", $context)) ? (($context["originalValue"] ?? null)) : (($context["value"] ?? null)));
        // line 2
        $context["toggleableChecked"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) && ( !(null === ($context["originalValue"] ?? null)) &&  !twig_test_empty(($context["originalValue"] ?? null))));
        // line 3
        $context["isDisabledToggleable"] = ($this->getAttribute(($context["field"] ?? null), "toggleable", array()) &&  !($context["toggleableChecked"] ?? null));
        // line 4
        $context["value"] = (((is_object(($context["value"] ?? null)) || (null === ($context["value"] ?? null)))) ? ($this->getAttribute(($context["field"] ?? null), "default", array())) : (($context["value"] ?? null)));
        // line 5
        $context["errors"] = $this->getAttribute($this->getAttribute(($context["form"] ?? null), "messages", array()), $this->getAttribute(($context["field"] ?? null), "name", array()));
        // line 6
        echo "
";
        // line 7
        $this->displayBlock('field', $context, $blocks);
    }

    public function block_field($context, array $blocks = array())
    {
        // line 8
        echo "    <div class=\"form-field ";
        if ($this->getAttribute(($context["field"] ?? null), "outerclasses", array(), "any", true, true)) {
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "outerclasses", array());
        }
        if (($context["errors"] ?? null)) {
            echo " has-errors";
        }
        echo " ";
        $this->displayBlock('outer_field_classes', $context, $blocks);
        echo "\">
        ";
        // line 9
        $this->displayBlock('contents', $context, $blocks);
        // line 73
        echo "    </div>
";
    }

    // line 8
    public function block_outer_field_classes($context, array $blocks = array())
    {
    }

    // line 9
    public function block_contents($context, array $blocks = array())
    {
        // line 10
        echo "            <div class=\"form-label\">
                <label class=\"inline\" ";
        // line 11
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "for=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        echo " >
                ";
        // line 12
        $this->displayBlock('label', $context, $blocks);
        // line 20
        echo "                </label>
            </div>
            <div class=\"form-data\"
                ";
        // line 23
        $this->displayBlock('global_attributes', $context, $blocks);
        // line 28
        echo "            >
                ";
        // line 29
        $this->displayBlock('group', $context, $blocks);
        // line 65
        echo "                ";
        if ($this->getAttribute(($context["field"] ?? null), "description", array())) {
            // line 66
            echo "                    <div class=\"form-extra-wrapper ";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "size", array()));
            echo " ";
            echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
            echo "\">
                        <span class=\"form-description\">";
            // line 67
            echo $this->getAttribute(($context["field"] ?? null), "description", array());
            echo "</span>
                    </div>
                ";
        }
        // line 70
        echo "
            </div>
        ";
    }

    // line 12
    public function block_label($context, array $blocks = array())
    {
        // line 13
        echo "                    ";
        if ($this->getAttribute(($context["field"] ?? null), "help", array())) {
            // line 14
            echo "                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "help", array())));
            echo "\">";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))));
            echo "</span>
                    ";
        } else {
            // line 16
            echo "                    ";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate((($this->getAttribute(($context["field"] ?? null), "label", array(), "any", true, true)) ? (_twig_default_filter($this->getAttribute(($context["field"] ?? null), "label", array()), twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))) : (twig_capitalize_string_filter($this->env, $this->getAttribute(($context["field"] ?? null), "name", array())))));
            echo "
                    ";
        }
        // line 18
        echo "                    ";
        echo ((twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) ? ("<span class=\"required\">*</span>") : (""));
        echo "
                ";
    }

    // line 23
    public function block_global_attributes($context, array $blocks = array())
    {
        // line 24
        echo "                data-grav-field=\"";
        echo $this->getAttribute(($context["field"] ?? null), "type", array());
        echo "\"
                data-grav-disabled=\"";
        // line 25
        echo (((null === ($context["originalValue"] ?? null))) ? ("true") : ("false"));
        echo "\"
                data-grav-default=\"";
        // line 26
        echo twig_escape_filter($this->env, twig_jsonencode_filter($this->getAttribute(($context["field"] ?? null), "default", array())), "html_attr");
        echo "\"
                ";
    }

    // line 29
    public function block_group($context, array $blocks = array())
    {
        // line 30
        echo "                    ";
        $this->displayBlock('input', $context, $blocks);
        // line 64
        echo "                ";
    }

    // line 30
    public function block_input($context, array $blocks = array())
    {
        // line 31
        echo "                        <div class=\"form-input-wrapper ";
        echo $this->getAttribute(($context["field"] ?? null), "size", array());
        echo " ";
        echo $this->getAttribute(($context["field"] ?? null), "wrapper_classes", array());
        echo "\">
                            ";
        // line 32
        $this->displayBlock('prepend', $context, $blocks);
        // line 33
        echo "                            <input
                                ";
        // line 35
        echo "                                name=\"";
        echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->fieldNameFilter((($context["scope"] ?? null) . $this->getAttribute(($context["field"] ?? null), "name", array())));
        echo "\"
                                value=\"";
        // line 36
        echo twig_escape_filter($this->env, twig_join_filter(($context["value"] ?? null), ", "), "html_attr");
        echo "\"
                                ";
        // line 38
        echo "                                ";
        $this->displayBlock('input_attributes', $context, $blocks);
        // line 53
        echo "                            />
                            ";
        // line 54
        $this->displayBlock('append', $context, $blocks);
        // line 55
        echo "                            ";
        if (($this->getAttribute(($context["form"] ?? null), "inline_errors", array()) && ($context["errors"] ?? null))) {
            // line 56
            echo "                                <div class=\"form-errors\">
                                    ";
            // line 57
            $context['_parent'] = $context;
            $context['_seq'] = twig_ensure_traversable(($context["errors"] ?? null));
            foreach ($context['_seq'] as $context["_key"] => $context["error"]) {
                // line 58
                echo "                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> ";
                echo $context["error"];
                echo "</p>
                                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['error'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 60
            echo "                                </div>
                            ";
        }
        // line 62
        echo "                        </div>
                    ";
    }

    // line 32
    public function block_prepend($context, array $blocks = array())
    {
    }

    // line 38
    public function block_input_attributes($context, array $blocks = array())
    {
        // line 39
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "classes", array(), "any", true, true)) {
            echo "class=\"";
            echo $this->getAttribute(($context["field"] ?? null), "classes", array());
            echo "\" ";
        }
        // line 40
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "id", array(), "any", true, true)) {
            echo "id=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "id", array()));
            echo "\" ";
        }
        // line 41
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "style", array(), "any", true, true)) {
            echo "style=\"";
            echo twig_escape_filter($this->env, $this->getAttribute(($context["field"] ?? null), "style", array()));
            echo "\" ";
        }
        // line 42
        echo "                                    ";
        if (($this->getAttribute(($context["field"] ?? null), "disabled", array()) || ($context["isDisabledToggleable"] ?? null))) {
            echo "disabled=\"disabled\"";
        }
        // line 43
        echo "                                    ";
        if ($this->getAttribute(($context["field"] ?? null), "placeholder", array())) {
            echo "placeholder=\"";
            echo $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "placeholder", array()));
            echo "\"";
        }
        // line 44
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autofocus", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "autofocus=\"autofocus\"";
        }
        // line 45
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "novalidate", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "novalidate=\"novalidate\"";
        }
        // line 46
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "readonly", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "readonly=\"readonly\"";
        }
        // line 47
        echo "                                    ";
        if (twig_in_filter($this->getAttribute(($context["field"] ?? null), "autocomplete", array()), array(0 => "on", 1 => "off"))) {
            echo "autocomplete=\"";
            echo $this->getAttribute(($context["field"] ?? null), "autocomplete", array());
            echo "\"";
        }
        // line 48
        echo "                                    ";
        if (twig_in_filter($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "required", array()), array(0 => "on", 1 => "true", 2 => 1))) {
            echo "required=\"required\"";
        }
        // line 49
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array())) {
            echo "pattern=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "pattern", array()));
            echo "\"";
        }
        // line 50
        echo "                                    ";
        if ($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute($this->getAttribute(($context["field"] ?? null), "validate", array()), "message", array())));
            echo "\"
                                    ";
        } elseif ($this->getAttribute(        // line 51
($context["field"] ?? null), "title", array(), "any", true, true)) {
            echo "title=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('Grav\Common\Twig\TwigExtension')->translate($this->getAttribute(($context["field"] ?? null), "title", array())));
            echo "\" ";
        }
        // line 52
        echo "                                ";
    }

    // line 54
    public function block_append($context, array $blocks = array())
    {
    }

    public function getTemplateName()
    {
        return "forms/default/field.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  330 => 54,  326 => 52,  320 => 51,  313 => 50,  306 => 49,  301 => 48,  294 => 47,  289 => 46,  284 => 45,  279 => 44,  272 => 43,  267 => 42,  260 => 41,  253 => 40,  246 => 39,  243 => 38,  238 => 32,  233 => 62,  229 => 60,  220 => 58,  216 => 57,  213 => 56,  210 => 55,  208 => 54,  205 => 53,  202 => 38,  198 => 36,  193 => 35,  190 => 33,  188 => 32,  181 => 31,  178 => 30,  174 => 64,  171 => 30,  168 => 29,  162 => 26,  158 => 25,  153 => 24,  150 => 23,  143 => 18,  137 => 16,  129 => 14,  126 => 13,  123 => 12,  117 => 70,  111 => 67,  104 => 66,  101 => 65,  99 => 29,  96 => 28,  94 => 23,  89 => 20,  87 => 12,  79 => 11,  76 => 10,  73 => 9,  68 => 8,  63 => 73,  61 => 9,  48 => 8,  42 => 7,  39 => 6,  37 => 5,  35 => 4,  33 => 3,  31 => 2,  29 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("{% set originalValue = originalValue is defined ? originalValue : value %}
{% set toggleableChecked = field.toggleable and (originalValue is not null and originalValue is not empty) %}
{% set isDisabledToggleable = field.toggleable and not toggleableChecked %}
{% set value = (is_object(value) or value is null ? field.default : value) %}
{% set errors = attribute(form.messages, field.name) %}

{% block field %}
    <div class=\"form-field {% if field.outerclasses is defined %} {{ field.outerclasses }}{% endif %}{% if errors %} has-errors{% endif %} {% block outer_field_classes %}{% endblock %}\">
        {% block contents %}
            <div class=\"form-label\">
                <label class=\"inline\" {% if field.id is defined %}for=\"{{ field.id|e }}\" {% endif %} >
                {% block label %}
                    {% if field.help %}
                    <span class=\"tooltip\" data-asTooltip-position=\"w\" title=\"{{ field.help|t|e }}\">{{ field.label|default(field.name|capitalize)|t }}</span>
                    {% else %}
                    {{ field.label|default(field.name|capitalize)|t }}
                    {% endif %}
                    {{ field.validate.required in ['on', 'true', 1] ? '<span class=\"required\">*</span>' }}
                {% endblock %}
                </label>
            </div>
            <div class=\"form-data\"
                {% block global_attributes %}
                data-grav-field=\"{{ field.type }}\"
                data-grav-disabled=\"{{ originalValue is null ? 'true' : 'false' }}\"
                data-grav-default=\"{{ field.default|json_encode()|e('html_attr') }}\"
                {% endblock %}
            >
                {% block group %}
                    {% block input %}
                        <div class=\"form-input-wrapper {{ field.size }} {{ field.wrapper_classes }}\">
                            {% block prepend %}{% endblock prepend %}
                            <input
                                {# required attribute structures #}
                                name=\"{{ (scope ~ field.name)|fieldName }}\"
                                value=\"{{ value|join(', ')|e('html_attr') }}\"
                                {# input attribute structures #}
                                {% block input_attributes %}
                                    {% if field.classes is defined %}class=\"{{ field.classes }}\" {% endif %}
                                    {% if field.id is defined %}id=\"{{ field.id|e }}\" {% endif %}
                                    {% if field.style is defined %}style=\"{{ field.style|e }}\" {% endif %}
                                    {% if field.disabled or isDisabledToggleable %}disabled=\"disabled\"{% endif %}
                                    {% if field.placeholder %}placeholder=\"{{ field.placeholder|t }}\"{% endif %}
                                    {% if field.autofocus in ['on', 'true', 1] %}autofocus=\"autofocus\"{% endif %}
                                    {% if field.novalidate in ['on', 'true', 1] %}novalidate=\"novalidate\"{% endif %}
                                    {% if field.readonly in ['on', 'true', 1] %}readonly=\"readonly\"{% endif %}
                                    {% if field.autocomplete in ['on', 'off'] %}autocomplete=\"{{ field.autocomplete }}\"{% endif %}
                                    {% if field.validate.required in ['on', 'true', 1] %}required=\"required\"{% endif %}
                                    {% if field.validate.pattern %}pattern=\"{{ field.validate.pattern|e }}\"{% endif %}
                                    {% if field.validate.message %}title=\"{{ field.validate.message|t|e }}\"
                                    {% elseif field.title is defined %}title=\"{{ field.title|t|e }}\" {% endif %}
                                {% endblock %}
                            />
                            {% block append %}{% endblock append %}
                            {% if form.inline_errors and errors %}
                                <div class=\"form-errors\">
                                    {% for error in errors %}
                                        <p class=\"form-message\"><i class=\"fa fa-exclamation-circle\"></i> {{ error }}</p>
                                    {% endfor %}
                                </div>
                            {% endif %}
                        </div>
                    {% endblock %}
                {% endblock %}
                {% if field.description %}
                    <div class=\"form-extra-wrapper {{ field.size|e }} {{ field.wrapper_classes }}\">
                        <span class=\"form-description\">{{ field.description|raw }}</span>
                    </div>
                {% endif %}

            </div>
        {% endblock %}
    </div>
{% endblock %}
", "forms/default/field.html.twig", "C:\\laragon\\www\\grav\\user\\plugins\\form\\templates\\forms\\default\\field.html.twig");
    }
}
