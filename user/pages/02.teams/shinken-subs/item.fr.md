---
title: 'Shinken Subs'
date: '22:00 11-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - Hardsub
    type:
        - Dramas
    genre:
        - Tokusatsu
        - Sentai
    pays:
        - Japon
header_image: '1'
site: 'https://shinkensubs.wordpress.com'
---

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>

<div class="row">
{% for name, feed in twig_feeds if name == 'Shinken Subs' %}
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