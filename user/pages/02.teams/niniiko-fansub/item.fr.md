---
title: 'NiNiiko Fansub'
date: '17:12 02-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - Hardsub
    type:
        - Dramas
        - Films
        - MV
        - Karaokes
        - Webdramas
        - Emissions
    pays:
        - Corée
        - Chine
        - Japon
        - Thaïlande
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://niniiko-fansub.eklablog.fr/'
---

La Niniiko Fansub est un petit fansub traduisant des émissions, dramas et films venant de l'Asie. Tout a commencé avec Ninii qui voulut créer un fansub (sur un coup de tête ^-^). Elle se fit assister plus tard, par sa soeur Nana puis par une amie à elle Eymiko.

Durant ce parcours, Ninii fit de belles rencontres qui constitue désormais la team Niniiko Fansub. 

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'NiNiiko Fansub' %}
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