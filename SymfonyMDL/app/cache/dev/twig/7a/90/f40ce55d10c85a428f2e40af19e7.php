<?php

/* LamMdlBundle:Formation:listesport.html.twig */
class __TwigTemplate_7a90f40ce55d10c85a428f2e40af19e7 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = $this->env->loadTemplate("LamMdlBundle::layout.html.twig");

        $this->blocks = array(
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "LamMdlBundle::layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_body($context, array $blocks = array())
    {
        // line 4
        echo "
";
        // line 5
        $context["nb"] = 1;
        // line 6
        echo "
<h1>Les stages organisés pour la formation '";
        // line 7
        echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "laF"), "Titre"), "html", null, true);
        echo "' sont:  </h1>




  ";
        // line 12
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "lesStages"));
        foreach ($context['_seq'] as $context["_key"] => $context["unS"]) {
            // line 13
            echo "

     <h2>Stage ";
            // line 15
            echo twig_escape_filter($this->env, $this->getContext($context, "nb"), "html", null, true);
            echo "</h2>
      Date: ";
            // line 16
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Date"), "d-m-Y"), "html", null, true);
            echo "</br>
             Horaire:  ";
            // line 17
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Horaire"), "html", null, true);
            echo "</br>       
             Salle: ";
            // line 18
            echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "Salle"), "html", null, true);
            echo "</br>
     
        ";
            // line 20
            $context["nbi"] = twig_length_filter($this->env, $this->getAttribute($this->getContext($context, "unS"), "intervenant"));
            // line 21
            echo "        ";
            if (($this->getContext($context, "nbi") > 1)) {
                // line 22
                echo "        <p>Intervenants : Les docteurs :</p>
            ";
            } else {
                // line 24
                echo "        <p>Intervenant : Le docteur :</p>
            ";
            }
            // line 26
            echo "             
        ";
            // line 27
            $context['_parent'] = (array) $context;
            $context['_seq'] = twig_ensure_traversable($this->getAttribute($this->getContext($context, "unS"), "intervenant"));
            foreach ($context['_seq'] as $context["_key"] => $context["unI"]) {
                // line 28
                echo "        <h3>- ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unI"), "Prenom"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unI"), "Nom"), "html", null, true);
                echo "</h3>
      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unI'], $context['_parent'], $context['loop']);
            $context = array_merge($_parent, array_intersect_key($context, $_parent));
            // line 30
            echo "        <a href=\"";
            echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationsport"), "html", null, true);
            echo "\"> Retour </a>
  ";
            // line 31
            $context["nb"] = ($this->getContext($context, "nb") + 1);
            // line 32
            echo "  ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unS'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 33
        echo "

";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:Formation:listesport.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  114 => 33,  108 => 32,  106 => 31,  101 => 30,  90 => 28,  86 => 27,  83 => 26,  79 => 24,  75 => 22,  72 => 21,  70 => 20,  65 => 18,  61 => 17,  57 => 16,  53 => 15,  49 => 13,  45 => 12,  37 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
