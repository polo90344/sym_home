<?php

/* ZMBDataBundle:Default:show.html.twig */
class __TwigTemplate_5c1ede92abc295eb7dbc9d6620c61298 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("::base.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "::base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "    <table>
        <tr>
            <td>Id</td>
            <td>Name</td>
            <td>Price</td>
            <td>Description</td>
        </tr>
        ";
        // line 11
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "product"));
        foreach ($context['_seq'] as $context["_key"] => $context["prd"]) {
            // line 12
            echo "            <tr>
                <td>";
            // line 13
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prd"), "id"), "html", null, true);
            echo "</td>
                <td>";
            // line 14
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prd"), "name"), "html", null, true);
            echo "</td>
                <td>";
            // line 15
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prd"), "price"), "html", null, true);
            echo "</td>
                <td>";
            // line 16
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "prd"), "description"), "html", null, true);
            echo "</td>
            </tr>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['prd'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 19
        echo "    </table>
";
    }

    public function getTemplateName()
    {
        return "ZMBDataBundle:Default:show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  68 => 19,  59 => 16,  55 => 15,  51 => 14,  47 => 13,  44 => 12,  40 => 11,  31 => 4,  28 => 3,);
    }
}
