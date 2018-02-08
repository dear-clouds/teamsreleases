---
title: 'Infinity Fansub'
date: '19:56 04-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - Hardsub
    type:
        - Dramas
        - Films
    pays:
        - Corée
        - Chine
        - Japon
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://infinity-fansub.eklablog.com/'
---

Nous sommes une toute nouvelle Team de Fansub.

Ici vous trouverez principalement des Dramas/films coréens et chinois.

Actuellement nous sommes à la recherche de nouvelles personnes pour intégrer la Team, passer de bons moments et fournir un travail de qualité dans les meilleurs délais sans stress et dans la bonne humeur.

Vous voulez faire parti de cette belle aventure ! Merci de déposer votre candidature dans la rubrique 'recrutement' du blog.

Bonne navigation.


<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Infinity Fansub' %}
{% for item in feed.items %}
<div class="col s12 m6 l4 xl3">
<div class="card">
<span class="top-icon"><i class="material-icons">terrain</i></span>
<div class="rssincl-itemdate">{{ item.date.date | date("d M Y (H:i)") }}</div><br>
<a href="{{ item.url }}" target="_blank"><div class="item-image">{{ item.content }}</div></a>
 <h2 class="truncate"><i class="tiny material-icons">play_arrow</i><a href="{{ item.url }}" target="_blank">{{ item.title }}</a></h2>
<div class="rssincl-itemfeedtitle">{{ item.name }}</div>
</div>
</div>
{% endfor %}
{% endfor %}
</div>