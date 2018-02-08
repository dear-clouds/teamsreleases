---
title: RockGakuen
date: '15:39 02-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - Hardsub
    type:
        - Dramas
        - Films
    genre:
        - Horreur
    pays:
        - Japon
        - Chine
        - Corée
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://rockgakuenfansub.eklablog.com/'
---

**RockGakuen Fansub, Depuis quand ? **

RockGakuen Fansub est une Team Indépendante qui à ouvert ces porte le 25/08/2016, pour une première sortie le 14/11/2016,  dans le but de divertis ce monde remplie de brutalité ! x) 

 

**RockGakuen Fansub, Quel Projet ?**

Traducteur indépendant, je choisis mes projets selon l'envie que ce soit des Films, Dramas, Animes.. bien que les projet du Genre " Horreur " prendrons une GRANDE place dans cette Team.  
Toutefois, je vous invite vivement à faire vos propositions en cliquant ICI , car ce sera avec joix que je réaliserait la demande souhaiter, dans la mesure du possible. 

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'RockGakuen' %}
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