---
title: 'KICHIGAI FANSUB'
date: '16:17 02-02-2018'
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
    pays:
        - Corée
        - Japon
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://kichigai-fansub.com/'
---

Nous sommes une petite team de fansub traduisant des dramas et films asiatiques.

Tous nos projets sont en libre service sauf les potentiels licenciés pour lesquels il faudra un mot de passe !


<h3>Dernières sorties de la team</h3>


<div class="gap"></div>
<div class="row">
{% for name, feed in twig_feeds if name == 'KICHIGAI FANSUB' %}
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