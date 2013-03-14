<?php

/* LamMdlBundle:FormationInformatique:contenufi.html.twig */
class __TwigTemplate_9f511e8cfe51d764ef9a369238ac43a7 extends Twig_Template
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
        $context["numFi"] = 0;
        // line 6
        $context["numO"] = 0;
        // line 7
        echo "


";
        // line 10
        $context['_parent'] = (array) $context;
        $context['_seq'] = twig_ensure_traversable($this->getContext($context, "contenuformationinfo"));
        foreach ($context['_seq'] as $context["_key"] => $context["unContenu"]) {
            // line 11
            echo "

";
            // line 13
            if (($this->getContext($context, "numFi") != $this->getAttribute($this->getContext($context, "unContenu"), "toto"))) {
                // line 14
                $context["nom"] = $this->env->getExtension('assets')->getAssetUrl(("bundles/LamMdl/images/" . $this->getAttribute($this->getContext($context, "unContenu"), "logo")));
                // line 15
                echo "<img src=\"";
                echo twig_escape_filter($this->env, $this->getContext($context, "nom"), "html", null, true);
                echo "\" alt=\"logo\" width=\"130\" height=\"100\" />
    <p> <h2>Nom de la formation : </h2>";
                // line 16
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "titre"), "html", null, true);
                echo " </p>
       <p> <h3>Objectif : </h3>";
                // line 17
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "objectif"), "html", null, true);
                echo " </p>
          <p> <h3>Public : </h3>";
                // line 18
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "public"), "html", null, true);
                echo " </p>
             <p> <h3>Prerequis : </h3>";
                // line 19
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "prerequis"), "html", null, true);
                echo " </p>
   <h3>Nombre de places : ";
                // line 20
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "nbplace"), "html", null, true);
                echo " </h3>
<h4>Descriptif:</h4>
    ";
                // line 22
                $context["numFi"] = $this->getAttribute($this->getContext($context, "unContenu"), "toto");
            }
            // line 24
            echo "
    ";
            // line 25
            if (($this->getContext($context, "numO") != $this->getAttribute($this->getContext($context, "unContenu"), "ordre"))) {
                // line 26
                echo "    <h5> ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "ordre"), "html", null, true);
                echo " ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "nomtheme"), "html", null, true);
                echo " </h5>
    ";
                // line 27
                $context["numO"] = $this->getAttribute($this->getContext($context, "unContenu"), "ordre");
            }
            // line 29
            echo "\t\t\t     ";
            if (($this->getAttribute($this->getContext($context, "unContenu"), "libelle") != "")) {
                // line 30
                echo "\t\t<h6>*  ";
                echo twig_escape_filter($this->env, $this->getAttribute($this->getContext($context, "unContenu"), "libelle"), "html", null, true);
                echo " </h6>
                ";
            }
            // line 32
            echo "
\t";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['unContenu'], $context['_parent'], $context['loop']);
        $context = array_merge($_parent, array_intersect_key($context, $_parent));
        // line 34
        echo "<p><a href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('routing')->getPath("LamMdlBundle_formationinformatique"), "html", null, true);
        echo "\"> Retour </a></p>

";
    }

    public function getTemplateName()
    {
        return "LamMdlBundle:FormationInformatique:contenufi.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  113 => 34,  106 => 32,  100 => 30,  97 => 29,  94 => 27,  87 => 26,  85 => 25,  82 => 24,  79 => 22,  74 => 20,  70 => 19,  66 => 18,  62 => 17,  58 => 16,  53 => 15,  51 => 14,  49 => 13,  45 => 11,  41 => 10,  36 => 7,  34 => 6,  32 => 5,  29 => 4,  26 => 3,);
    }
}
