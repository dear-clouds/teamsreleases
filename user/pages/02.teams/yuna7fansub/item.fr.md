---
title: Yuna7fansub
date: '18:23 04-02-2018'
taxonomy:
    category:
        - Indépendant
    tag:
        - 'Libre Accès'
        - Hardsub
    type:
        - Dramas
        - Films
    pays:
        - Japon
        - Corée
        - Thaïlande
        - Chine
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://yuna7fansub.blogspot.com/'
---

Traductrice indépendante de films et dramas asiatiques depuis octobre 2016. J'ai voulu créer une vitrine pour tous mes projets. Si vous avez des questions sur mes projets ou aimeriez en proposer, n'hésitez pas à me contacter via les divers moyens que j'ai mis à votre disposition. (réseaux sociaux, courriel, tchat, etc.)

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>

<div class="row">
{% for name, feed in twig_feeds if name == 'Yuna7fansub' %}
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