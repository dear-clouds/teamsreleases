---
title: 'Tokki Fansub'
published: true
date: '21:04 01-02-2018'
taxonomy:
    category:
        - Indépendant
    tag:
        - 'Accès Privé'
        - 'Libre Accès'
    type:
        - Dramas
        - Emissions
    pays:
        - Corée
jscomments:
    active: true
    provider: disqus
process:
    twig: true
    markdown: false
header_image: '1'
header_image_file: header.jpg
site: 'http://tokkifansub.eklablog.com/'
---

Etant seule, et n'ayant pas non plus trop de temps, je fais à mon rythme.
Je prends des dramas comme des films ou émissions, tout dépend de mon envie.

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Tokki Fansub' %}
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