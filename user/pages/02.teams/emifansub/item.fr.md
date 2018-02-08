---
title: Emifansub
date: '18:20 02-02-2018'
taxonomy:
    category:
        - Indépendant
    tag:
        - 'Libre Accès'
        - Softsub
        - Hardsub
    type:
        - Dramas
    pays:
        - Corée
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://emi-fansub.eklablog.com/'
---



Bonsoir à tous, je m'appelle Emi, j'ai 24 ans. Je suis fan de dramas, films et émissions coréennes depuis 6 ans.

Depuis un moment je traduis pour moi-même les dramas et les émissions qui m'intéressent et aujourd'hui j'ai décidé de les partager avec vous. Je traduirai principalement des dramas coréens et des émissions coréennes qui seront en softsub et en hardsub. Si vous voulez me laisser un petit mot il y a le livre d'or.

Je vous souhaite la bienvenue sur mon blog.

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Emifansub' %}
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