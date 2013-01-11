<?php

/* TwigBundle:Exception:traces.txt.twig */
class __TwigTemplate_59cc5d7dc9bbdfdc145a5b7ebab6238b extends Twig_Template
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
        if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
        if (twig_length_filter($this->env, $this->getAttribute($_exception_, "trace"))) {
            // line 2
            if (isset($context["exception"])) { $_exception_ = $context["exception"]; } else { $_exception_ = null; }
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($_exception_, "trace"));
            foreach ($context['_seq'] as $context["_key"] => $context["trace"]) {
                // line 3
                if (isset($context["trace"])) { $_trace_ = $context["trace"]; } else { $_trace_ = null; }
                $this->env->loadTemplate("TwigBundle:Exception:trace.txt.twig")->display(array("trace" => $_trace_));
                // line 4
                echo "
";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['trace'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
        }
    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:traces.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  125 => 24,  110 => 20,  97 => 18,  92 => 17,  89 => 16,  85 => 14,  28 => 4,  36 => 6,  104 => 19,  80 => 15,  63 => 13,  58 => 12,  40 => 7,  94 => 39,  88 => 6,  48 => 14,  39 => 7,  35 => 7,  31 => 6,  21 => 1,  46 => 9,  29 => 3,  57 => 9,  50 => 7,  47 => 7,  38 => 5,  32 => 4,  27 => 3,  250 => 96,  240 => 90,  236 => 88,  229 => 84,  225 => 83,  220 => 80,  218 => 79,  215 => 78,  212 => 77,  209 => 76,  200 => 71,  194 => 67,  179 => 61,  176 => 60,  173 => 59,  166 => 55,  162 => 54,  157 => 51,  155 => 50,  151 => 48,  148 => 47,  145 => 46,  139 => 45,  128 => 43,  118 => 22,  114 => 20,  109 => 31,  87 => 28,  84 => 27,  79 => 39,  69 => 9,  65 => 14,  34 => 5,  26 => 4,  24 => 4,  25 => 3,  22 => 2,  19 => 1,  203 => 72,  197 => 66,  189 => 62,  183 => 63,  180 => 57,  174 => 56,  170 => 54,  167 => 53,  158 => 48,  153 => 45,  150 => 44,  147 => 43,  144 => 42,  136 => 37,  133 => 44,  130 => 35,  124 => 32,  121 => 31,  113 => 21,  108 => 29,  105 => 19,  102 => 27,  99 => 26,  95 => 24,  91 => 16,  81 => 12,  70 => 15,  66 => 13,  62 => 22,  59 => 8,  56 => 10,  52 => 11,  49 => 10,  45 => 6,  41 => 15,  37 => 5,  33 => 4,  30 => 4,);
    }
}
