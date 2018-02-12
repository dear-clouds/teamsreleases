---
title: Tokusatsu-Fansub
date: '21:38 12-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - Hardsub
        - Softsub
    type:
        - Dramas
    genre:
        - Tokusatsu
        - Sentai
    pays:
        - Japon
header_image: '1'
site: 'http://tokusatsu-fansub.fr/'
---

Tokusatsu-Fansub est une team créée en 2013 regroupant divers fansubbeurs expérimentés qui aiment le Tokusatsu !

Née de l’idée de Setsuna531, Tokusatsu-Fansub s’occupe actuellement de trois projets Super Sentai, j’ai nommés Maskman, Jetman et Fiveman. Mais le Tokusatsu est un grand monde, il y regroupe des genres différents, et nous en développerons les branches avec le temps.

Ces séries sont proposées en softsub mkv avec les sous-titres français (réalisés par la team Tokusatsu-Fansub), anglais (réalisés par GUIS) et les pistes audios japonaise et française (lorsque celle-ci est disponible). D’autres projets apparaîtront comme par exemple Jiban le film.

Nous vous souhaitons un agréable visionnage en notre compagnie.

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>

<div class="row">
{% for name, feed in twig_feeds if name == 'Tokusatsu-Fansub' %}
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