---
title: Pan-Da-Fansub
date: '15:26 02-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - Softsub
    type:
        - Dramas
    pays:
        - Corée
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://teampandafansub.eklablog.fr'
---

Oyez oyez amis Drama-vores, soyez les bienvenus chez la Pan-Da Fansub.

Il ne faut pas se voiler la face, en arrivant chez nous, tout le monde va se dire :

" Non mais lol encore une équipe de bras cassés qui va traduire et faire croire qu'ils sont importants !".

Bon perso je me sens important mais c'est mon égocentrisme naturel qui parle. Blague à part, cette petite équipe de quatre personnes dévouées à leur manière et selon leur temps à la traduction et a la dégustation de ravioles sauce piquante va vous en boucher un coin (nous ne sommes pas plombiers ni maçons), et partager avec vous leurs talents littéraires.

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Pan-Da Fansub' %}
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