<?php

/* base.html.twig */
class __TwigTemplate_eb66c2f72f1eb3ea51de6c4e9e1ff28181f96037483b3aefa48a574f27319840 extends Twig_Template
{
    private $source;

    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = array(
            'title' => array($this, 'block_title'),
            'stylesheets' => array($this, 'block_stylesheets'),
            'body' => array($this, 'block_body'),
            'content' => array($this, 'block_content'),
            'javascripts' => array($this, 'block_javascripts'),
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "base.html.twig"));

        // line 1
        echo "<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
        <title>";
        // line 6
        $this->displayBlock('title', $context, $blocks);
        echo "</title>
        ";
        // line 7
        $this->displayBlock('stylesheets', $context, $blocks);
        // line 14
        echo "    </head>
    <body>
        ";
        // line 16
        $this->displayBlock('body', $context, $blocks);
        // line 77
        echo "        ";
        $this->displayBlock('javascripts', $context, $blocks);
        // line 78
        echo "    </body>
</html>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 6
    public function block_title($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "SweetsDesserts&Bread";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 7
    public function block_stylesheets($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 8
        echo "            <link rel=\"stylesheet\" href=\"";
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/navbar.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 9
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/font.css"), "html", null, true);
        echo "\">
            <link rel=\"stylesheet\" href=\"";
        // line 10
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("css/socialbar.css"), "html", null, true);
        echo "\">
            <link href=\"https://fonts.googleapis.com/css?family=Coming+Soon\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 16
    public function block_body($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 17
        echo "            ";
        $this->displayBlock('content', $context, $blocks);
        // line 76
        echo "        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 17
    public function block_content($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "content"));

        // line 18
        echo "
                <div class=\"w3-bar w3-border\">
                    <div class=\"w3-bar-item\">
                        <img id=\"logo\" src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("imatges/SweetsDesserts&BreadIndividualPetit.png"), "html", null, true);
        echo "\"/>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">PASTISSOS</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">BRAÇ DE GITANO</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">FLAMS</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">GALETES</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">MAGDALENES</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">MOUSSE</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">PA I BASTONETS</button>
                    </div>

                    <div class =\"w3-bar-item w3-dropdown-hover navbar-item\">
                        <button class=\"w3-button navbar-button\">PRODUCTES</button>
                        <div class=\"w3-dropdown-content w3-bar-block w3-card-4\">
                            <a href=\"#\" class=\"w3-bar-item w3-button\">Tots</a>
                            <a href=\"#\" class=\"w3-bar-item w3-button\">En promoció</a>
                            <a href=\"#\" class=\"w3-bar-item w3-button\">De Temporada</a>
                    </div>
                </div>

                    <button class=\"nav-btn\" onclick=\"onUsuariBtnClick(event)\"><i class=\"fas fa-user-circle fa-2x\"></i></button>
                    <div id=\"usuariRegistre\" class=\"dropdown\" style=\"right:70px\">
                        <a href=\"\">Registre't</a>
                        <a href=\"\">Inicia sessió</a>
                    </div>
                    <button class=\"nav-btn\"><i class=\"fas fa-shopping-basket fa-2x\"></i></ion-icon></button>

                <div class=\"social-bar\">
                    <a href=\"https://www.facebook.com/pg/SweetsDessertsBread-174215420181490/posts/\" class=\"icon icon-facebook2\" target=\"_blank\"></a>
                    <a href=\"https://twitter.com/SweetsDesserts1\" class=\"icon icon-twitter\" target=\"_blank\"></a>
                    <a href=\"https://www.instagram.com/sweets_desserts_and_bread/\" class=\"icon icon-instagram\" target=\"_blank\"></a>
                    <a href=\"mailto:sweets.and.desserts.r@gmail.com\" class=\"icon icon-mail\"></a>
                </div>

            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 77
    public function block_javascripts($context, array $blocks = array())
    {
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "javascripts"));

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "base.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  219 => 77,  154 => 21,  149 => 18,  140 => 17,  130 => 76,  127 => 17,  118 => 16,  104 => 10,  100 => 9,  95 => 8,  86 => 7,  68 => 6,  56 => 78,  53 => 77,  51 => 16,  47 => 14,  45 => 7,  41 => 6,  34 => 1,);
    }

    public function getSourceContext()
    {
        return new Twig_Source("<!DOCTYPE html>
<html>
    <head>
        <meta charset=\"UTF-8\">
        <link rel=\"stylesheet\" href=\"https://www.w3schools.com/w3css/4/w3.css\">
        <title>{% block title %}SweetsDesserts&Bread{% endblock %}</title>
        {% block stylesheets %}
            <link rel=\"stylesheet\" href=\"{{ asset('css/navbar.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/font.css') }}\">
            <link rel=\"stylesheet\" href=\"{{ asset('css/socialbar.css') }}\">
            <link href=\"https://fonts.googleapis.com/css?family=Coming+Soon\" rel=\"stylesheet\">
            <link href=\"https://fonts.googleapis.com/css?family=Montserrat\" rel=\"stylesheet\">
        {% endblock %}
    </head>
    <body>
        {% block body %}
            {% block content %}

                <div class=\"w3-bar w3-border\">
                    <div class=\"w3-bar-item\">
                        <img id=\"logo\" src=\"{{ asset('imatges/SweetsDesserts&BreadIndividualPetit.png') }}\"/>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">PASTISSOS</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">BRAÇ DE GITANO</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">FLAMS</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">GALETES</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">MAGDALENES</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">MOUSSE</button>
                    </div>

                    <div class =\"w3-bar-item navbar-item\">
                        <button class=\"w3-button navbar-button\">PA I BASTONETS</button>
                    </div>

                    <div class =\"w3-bar-item w3-dropdown-hover navbar-item\">
                        <button class=\"w3-button navbar-button\">PRODUCTES</button>
                        <div class=\"w3-dropdown-content w3-bar-block w3-card-4\">
                            <a href=\"#\" class=\"w3-bar-item w3-button\">Tots</a>
                            <a href=\"#\" class=\"w3-bar-item w3-button\">En promoció</a>
                            <a href=\"#\" class=\"w3-bar-item w3-button\">De Temporada</a>
                    </div>
                </div>

                    <button class=\"nav-btn\" onclick=\"onUsuariBtnClick(event)\"><i class=\"fas fa-user-circle fa-2x\"></i></button>
                    <div id=\"usuariRegistre\" class=\"dropdown\" style=\"right:70px\">
                        <a href=\"\">Registre't</a>
                        <a href=\"\">Inicia sessió</a>
                    </div>
                    <button class=\"nav-btn\"><i class=\"fas fa-shopping-basket fa-2x\"></i></ion-icon></button>

                <div class=\"social-bar\">
                    <a href=\"https://www.facebook.com/pg/SweetsDessertsBread-174215420181490/posts/\" class=\"icon icon-facebook2\" target=\"_blank\"></a>
                    <a href=\"https://twitter.com/SweetsDesserts1\" class=\"icon icon-twitter\" target=\"_blank\"></a>
                    <a href=\"https://www.instagram.com/sweets_desserts_and_bread/\" class=\"icon icon-instagram\" target=\"_blank\"></a>
                    <a href=\"mailto:sweets.and.desserts.r@gmail.com\" class=\"icon icon-mail\"></a>
                </div>

            {% endblock %}
        {% endblock %}
        {% block javascripts %}{% endblock %}
    </body>
</html>
", "base.html.twig", "C:\\Users\\raque\\OneDrive\\Documentos\\GitHub\\PracticaLliureWEB_Symfony\\SweetsAndDesserts\\templates\\base.html.twig");
    }
}
