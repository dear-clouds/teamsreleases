---
title: 'Pocky Subs'
date: '16:01 04-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - Hardsub
        - Softsub
    type:
        - Dramas
        - Films
        - Emissions
    pays:
        - Corée
        - Japon
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://pocky-subs.tumblr.com/'
---

Annyeong, yorobeun !
La pocky-subs, c'est une petite team de fansub dirigée par Anju depuis courant 2012 et qui ma foi fait son petit bout de chemin en choisissant des projets qui lui plaisent, et en y versant plein plein d'amour et de paillettes ( hu hu hu ).
Hope you like it ! 

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Pocky-subs' %}
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