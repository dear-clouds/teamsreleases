---
title: 'Mimi Fansub'
date: '16:08 02-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Accès Privé'
    type:
        - Dramas
        - Films
    pays:
        - Chine
        - Taïwan
        - Thaïlande
        - Inde
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://teammimifansub.eklablog.com/'
---

Team spécialisée dans la traduction de dramas/films taïwanais et chinois.
La team prend également en charge quelques Lakorns.
Tous nos projets sont disponibles en Hardsub.
La team recrute pour les postes de traducteurs et de checkeurs.

**Petite histoire:** La créatrice de la team en 2013 est HeiYue.
En août 2014, HeiYue a choisi de continuer en indépendante et nous lui souhaitons tous les encouragements qu'elle mérite.

A partir du 1er janvier 2015, les sorties ont lieux les 01 / 08 / 15 / 21 et 29 de chaque mois. 

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Mimi Fansub' %}
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