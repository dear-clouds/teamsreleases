---
title: 'Hak-kyo Fansub'
date: '18:14 02-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - 'Accès Privé'
        - Hardsub
    type:
        - Dramas
        - Films
        - Emissions
        - MV
    pays:
        - Corée
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://hak-kyo-fansub.eklablog.fr/'
---

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Hak-kyo Fansub' %}
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