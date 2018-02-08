---
title: 'Répertoire Teams'
published: true
jscomments:
    active: true
    provider: disqus
menu: Teams
slug: teams
process:
    markdown: true
    twig: false
twig_first: false
admin:
    children_display_order: default
content:
    items: '@self.children'
    limit: 32
    order:
        by: title
        dir: asc
    pagination: true
    url_taxonomy_filters: true
---

<div class="card amber lighten-5">
  <div class="card-content" style="line-height: 18px;">
    <p>
    Si vous souhaitez apparaître ici, merci de m'aider à bien tout harmoniser en postant un titre clair et que la première image de votre article représente votre sortie ! Ce sera plus joli et ça ne change pas trop vos habitudes. Si vous souhaitez aller encore plus loin, vous pouvez afficher sur votre site un de mes logos (en création).
</p>
    <br><br>
    <p>
    
<b>ATTENTION</b> - Ajouter une Team ne signifie pas qu'elle paraîtra dans le flux des sorties. Pour cela j'ai besoin de vérifier que le flux rss est ok ! S'il ne l'est pas, alors seule une fiche sera créée.
    
</p>
 <a class="waves-effect waves-light btn right btn-small" href="https://teamsreleases.dearclouds.com/ajouter-une-team"><i class="material-icons left">add</i>Ajouter une Team</a>
  </div>
</div>


<div class="gap"></div>
<div class="center-align">
<a class="waves-effect waves-light btn btn-large" href="{{ home_url }}/teams/">TOUT</a> <a class="waves-effect waves-light btn btn-large teal lighten-1" href="{{ home_url }}/teams/type:Dramas">Dramas</a> <a class="waves-effect waves-light btn btn-large red darken-4" href="{{ home_url }}/teams/type:Films">Films</a> <a class="waves-effect waves-light btn btn-large  light-blue" href="{{ home_url }}/teams/type:Animes">Animes</a> <a class="waves-effect waves-light btn btn-large amber lighten-1" href="{{ home_url }}/teams/type:Karaokes">Karaokes</a> <a class="waves-effect waves-light btn btn-large light-green lighten-1" href="{{ home_url }}/teams/type:Mangas">Mangas</a>
</div>