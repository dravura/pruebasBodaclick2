<?php

/* VictorPruebasAlimentosBundle:Default:mostrarAlimentos.html.twig */
class __TwigTemplate_ee90e5b319862327a9e36e8c82182f4b extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("VictorPruebasAlimentosBundle::layout.html.twig");

        $this->blocks = array(
            'contenido' => array($this, 'block_contenido'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "VictorPruebasAlimentosBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_contenido($context, array $blocks = array())
    {
        // line 4
        echo "
  ";
        // line 5
        $this->env->loadTemplate("VictorPruebasAlimentosBundle:Default:_tablaAlimentos.html.twig")->display(array_merge($context, array("alimentos" => (isset($context["alimentos"]) ? $context["alimentos"] : $this->getContext($context, "alimentos")))));
        // line 6
        echo "
  ";
    }

    public function getTemplateName()
    {
        return "VictorPruebasAlimentosBundle:Default:mostrarAlimentos.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  36 => 6,  34 => 5,  31 => 4,  28 => 3,);
    }
}
