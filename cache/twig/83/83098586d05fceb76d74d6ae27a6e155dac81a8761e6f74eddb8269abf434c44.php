<?php

/* @Page:C:/wamp64/www/teamsreleases/user/pages/03.ajouter-une-team */
class __TwigTemplate_c18de0831d1e684fad7a6ce88a6a544afe222f8bf5703f578930af35b0e8d0e1 extends Twig_Template
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
        echo "<div class=\"card red lighten-4\">
  <div class=\"card-content\" style=\"line-height: 18px;\">
 <b> Merci de bien suivre ces règles avant de soumettre une Team.</b>
<ul>
   <li> - Vérifiez bien qu'elle n'est pas déjà présente sur ma liste !</li>
   <li> - La Team doit être encore en vie.</li>
   <li> - La Team n'est pas obligé de faire uniquement des projets Asiatiques.</li>
   <li> - Actuellement seules les Teams de Dramas peuvent être ajoutées au Flux des Sorties.</li>
</ul>

  <br><p>Merci aussi de me donner toute information susceptible de me faciliter la tâche. </p>   
<p>  <u>Exemple :</u> le mot de passe pour la partie VIP pour que je puisse voir tous les projets, ou un accès temporaire à un forum privé ou encore la liste complète de vos projets avec l'origine de chaque projet.</p>

<br><p><b>ATTENTION -</b> Ajouter une Team ne signifie pas qu'elle paraîtra dans le flux des sorties. Pour cela il faut que la team ai un <u>Flux RSS</u> qui annonce <b>uniquement</b> ses sorties ! Si elle n'en a pas, alors seule une fiche sera créée. Si la Team que vous souhaitez ajouter n'a pas de RSS, elle ne peut pas être ajoutée. Pourquoi ne pas essayer de leur demander de mettre en place un Flux RSS ? 
    
</p>
  </div>";
    }

    public function getTemplateName()
    {
        return "@Page:C:/wamp64/www/teamsreleases/user/pages/03.ajouter-une-team";
    }

    public function getDebugInfo()
    {
        return array (  19 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<div class=\"card red lighten-4\">
  <div class=\"card-content\" style=\"line-height: 18px;\">
 <b> Merci de bien suivre ces règles avant de soumettre une Team.</b>
<ul>
   <li> - Vérifiez bien qu'elle n'est pas déjà présente sur ma liste !</li>
   <li> - La Team doit être encore en vie.</li>
   <li> - La Team n'est pas obligé de faire uniquement des projets Asiatiques.</li>
   <li> - Actuellement seules les Teams de Dramas peuvent être ajoutées au Flux des Sorties.</li>
</ul>

  <br><p>Merci aussi de me donner toute information susceptible de me faciliter la tâche. </p>   
<p>  <u>Exemple :</u> le mot de passe pour la partie VIP pour que je puisse voir tous les projets, ou un accès temporaire à un forum privé ou encore la liste complète de vos projets avec l'origine de chaque projet.</p>

<br><p><b>ATTENTION -</b> Ajouter une Team ne signifie pas qu'elle paraîtra dans le flux des sorties. Pour cela il faut que la team ai un <u>Flux RSS</u> qui annonce <b>uniquement</b> ses sorties ! Si elle n'en a pas, alors seule une fiche sera créée. Si la Team que vous souhaitez ajouter n'a pas de RSS, elle ne peut pas être ajoutée. Pourquoi ne pas essayer de leur demander de mettre en place un Flux RSS ? 
    
</p>
  </div>", "@Page:C:/wamp64/www/teamsreleases/user/pages/03.ajouter-une-team", "");
    }
}
