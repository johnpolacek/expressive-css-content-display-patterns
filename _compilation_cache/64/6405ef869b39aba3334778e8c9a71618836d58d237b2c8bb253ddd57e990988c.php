<?php

/* events.html */
class __TwigTemplate_2db511ed2e2190bec75faedbf5f48f519dba0640f60eb7387cd2ddb547da7e63 extends Twig_Template
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
        echo "<div class=\"grid-12 border-bottom\">
    <div class=\"grid-12 l-grid-6 l-border-right m-border-bottom s-border-bottom marg-2-bottom\">
        <div class=\"rel l-pad-2-right pad-2-bottom\">
            <div class=\"abs pos-top pos-left z-999\">
                <div class=\"pad-1-sides pad-half-vert bgr-grey-lt border-left-6-blue\">
                    <span class=\"text-small-2 letter-space-1 uppercase\">";
        // line 6
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), 0, array(), "array"), "category", array()), "html", null, true);
        echo "</span>
                </div>
            </div>
            <div class=\"box-gradient-overlay s-after-hidden\">
                <img src=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), 0, array(), "array"), "images", array()), "large", array()), "html", null, true);
        echo "\" alt=\"";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), 0, array(), "array"), "images", array()), "description", array()), "html", null, true);
        echo "\">
            </div>
            <div class=\"abs pos-bottom pos-left text-white z-9999 pad-2 s-rel s-text-dark s-pad-0\">
                <h2 class=\"text-reg s-pad-2-top\">";
        // line 13
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), 0, array(), "array"), "title", array()), "html", null, true);
        echo "</h2>
                <p class=\"bold text-small pad-1-bottom\">";
        // line 14
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), 0, array(), "array"), "dates", array()), "html", null, true);
        echo ", ";
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), 0, array(), "array"), "location", array()), "html", null, true);
        echo "</p>
                <p>";
        // line 15
        echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), 0, array(), "array"), "description", array()), "html", null, true);
        echo "</p>
            </div>
        </div>
    </div>
    
    <div class=\"grid-12 l-grid-6\">
        ";
        // line 21
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(1, 2));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 22
            echo "            <div class=\"rel grid-12 pad-2-left s-pad-0-left";
            if (($context["i"] == 2)) {
                echo " border-top pad-2-vert marg-2-top";
            }
            echo "\">
                <div class=\"abs pos-top pos-left z-999 pad-2-left s-pad-0-left";
            // line 23
            if (($context["i"] == 2)) {
                echo " pad-2-top";
            }
            echo "\">
                    <div class=\"pad-1-sides pad-half-vert bgr-grey-lt border-left-6-blue\">
                        <span class=\"text-small-2 letter-space-1 uppercase\">";
            // line 25
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "category", array()), "html", null, true);
            echo "</span>
                    </div>
                </div>
                <img class=\"float-left pad-2-right s-pad-2-bottom\" src=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "images", array()), "small", array()), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "images", array()), "description", array()), "html", null, true);
            echo "\">
                <h3 class=\"text-reg\">";
            // line 29
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "title", array()), "html", null, true);
            echo "</h3>
                <p class=\"bold text-small pad-1-bottom\">";
            // line 30
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "dates", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "location", array()), "html", null, true);
            echo "</p>
                <p class=\"pad-0 text-small\">";
            // line 31
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "description", array()), "html", null, true);
            echo "</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 34
        echo "    </div>
</div>
<div class=\"grid-12 border-bottom grid-flex\">
    ";
        // line 37
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(range(3, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["i"]) {
            // line 38
            echo "        ";
            if (($context["i"] == 3)) {
                // line 39
                echo "        <div class=\"grid-3 m-grid-6 s-grid-12 pad-2 s-pad-0-sides border-right s-border-right-0 border-bottom l-border-bottom-0\">
        ";
            }
            // line 41
            echo "
        ";
            // line 42
            if (($context["i"] == 4)) {
                // line 43
                echo "        <div class=\"grid-3 m-grid-6 s-grid-12 pad-2 s-pad-0-sides l-border-right border-bottom l-border-bottom-0\">
        ";
            }
            // line 45
            echo "
        ";
            // line 46
            if (($context["i"] == 5)) {
                // line 47
                echo "        <div class=\"grid-3 m-grid-6 s-grid-12 pad-2 s-pad-0-sides border-right s-border-right-0 s-border-bottom\">
        ";
            }
            // line 49
            echo "
        ";
            // line 50
            if (($context["i"] == 6)) {
                // line 51
                echo "        <div class=\"grid-3 m-grid-6 s-grid-12 pad-2 s-pad-0-sides\">
        ";
            }
            // line 53
            echo "
            <div class=\"marg-1-top marg-2-bottom\">
                <span class=\"pad-1-sides pad-half-vert bgr-grey-lt border-left-6-blue\">
                    <span class=\"text-small-2 letter-space-1 uppercase\">";
            // line 56
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "category", array()), "html", null, true);
            echo "</span>
                </span>
            </div>
            <h5 class=\"text-reg\">";
            // line 59
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "title", array()), "html", null, true);
            echo "</h5>
            <p class=\"bold text-small pad-1-bottom\">";
            // line 60
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "dates", array()), "html", null, true);
            echo ", ";
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "location", array()), "html", null, true);
            echo "</p>
            <p class=\"text-small pad-0\">";
            // line 61
            echo twig_escape_filter($this->env, $this->getAttribute($this->getAttribute((isset($context["events"]) ? $context["events"] : null), $context["i"], array(), "array"), "description", array()), "html", null, true);
            echo "</p>
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['i'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 64
        echo "</div>";
    }

    public function getTemplateName()
    {
        return "events.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  182 => 64,  173 => 61,  167 => 60,  163 => 59,  157 => 56,  152 => 53,  148 => 51,  146 => 50,  143 => 49,  139 => 47,  137 => 46,  134 => 45,  130 => 43,  128 => 42,  125 => 41,  121 => 39,  118 => 38,  114 => 37,  109 => 34,  100 => 31,  94 => 30,  90 => 29,  84 => 28,  78 => 25,  71 => 23,  64 => 22,  60 => 21,  51 => 15,  45 => 14,  41 => 13,  33 => 10,  26 => 6,  19 => 1,);
    }
}
/* <div class="grid-12 border-bottom">*/
/*     <div class="grid-12 l-grid-6 l-border-right m-border-bottom s-border-bottom marg-2-bottom">*/
/*         <div class="rel l-pad-2-right pad-2-bottom">*/
/*             <div class="abs pos-top pos-left z-999">*/
/*                 <div class="pad-1-sides pad-half-vert bgr-grey-lt border-left-6-blue">*/
/*                     <span class="text-small-2 letter-space-1 uppercase">{{ events[0].category }}</span>*/
/*                 </div>*/
/*             </div>*/
/*             <div class="box-gradient-overlay s-after-hidden">*/
/*                 <img src="{{ events[0].images.large }}" alt="{{ events[0].images.description }}">*/
/*             </div>*/
/*             <div class="abs pos-bottom pos-left text-white z-9999 pad-2 s-rel s-text-dark s-pad-0">*/
/*                 <h2 class="text-reg s-pad-2-top">{{ events[0].title }}</h2>*/
/*                 <p class="bold text-small pad-1-bottom">{{ events[0].dates }}, {{ events[0].location }}</p>*/
/*                 <p>{{ events[0].description }}</p>*/
/*             </div>*/
/*         </div>*/
/*     </div>*/
/*     */
/*     <div class="grid-12 l-grid-6">*/
/*         {% for i in range(1,2) %}*/
/*             <div class="rel grid-12 pad-2-left s-pad-0-left{% if i == 2 %} border-top pad-2-vert marg-2-top{% endif %}">*/
/*                 <div class="abs pos-top pos-left z-999 pad-2-left s-pad-0-left{% if i == 2 %} pad-2-top{% endif %}">*/
/*                     <div class="pad-1-sides pad-half-vert bgr-grey-lt border-left-6-blue">*/
/*                         <span class="text-small-2 letter-space-1 uppercase">{{ events[i].category }}</span>*/
/*                     </div>*/
/*                 </div>*/
/*                 <img class="float-left pad-2-right s-pad-2-bottom" src="{{ events[i].images.small }}" alt="{{ events[i].images.description }}">*/
/*                 <h3 class="text-reg">{{ events[i].title }}</h3>*/
/*                 <p class="bold text-small pad-1-bottom">{{ events[i].dates }}, {{ events[i].location }}</p>*/
/*                 <p class="pad-0 text-small">{{ events[i].description }}</p>*/
/*             </div>*/
/*         {% endfor %}*/
/*     </div>*/
/* </div>*/
/* <div class="grid-12 border-bottom grid-flex">*/
/*     {% for i in range(3,6) %}*/
/*         {% if i == 3 %}*/
/*         <div class="grid-3 m-grid-6 s-grid-12 pad-2 s-pad-0-sides border-right s-border-right-0 border-bottom l-border-bottom-0">*/
/*         {% endif %}*/
/* */
/*         {% if i == 4 %}*/
/*         <div class="grid-3 m-grid-6 s-grid-12 pad-2 s-pad-0-sides l-border-right border-bottom l-border-bottom-0">*/
/*         {% endif %}*/
/* */
/*         {% if i == 5 %}*/
/*         <div class="grid-3 m-grid-6 s-grid-12 pad-2 s-pad-0-sides border-right s-border-right-0 s-border-bottom">*/
/*         {% endif %}*/
/* */
/*         {% if i == 6 %}*/
/*         <div class="grid-3 m-grid-6 s-grid-12 pad-2 s-pad-0-sides">*/
/*         {% endif %}*/
/* */
/*             <div class="marg-1-top marg-2-bottom">*/
/*                 <span class="pad-1-sides pad-half-vert bgr-grey-lt border-left-6-blue">*/
/*                     <span class="text-small-2 letter-space-1 uppercase">{{ events[i].category }}</span>*/
/*                 </span>*/
/*             </div>*/
/*             <h5 class="text-reg">{{ events[i].title }}</h5>*/
/*             <p class="bold text-small pad-1-bottom">{{ events[i].dates }}, {{ events[i].location }}</p>*/
/*             <p class="text-small pad-0">{{ events[i].description }}</p>*/
/*         </div>*/
/*     {% endfor %}*/
/* </div>*/
