---
title: 'Le Temps d''une Passion'
date: '15:18 02-02-2018'
taxonomy:
    category:
        - Indépendant
    tag:
        - 'Libre Accès'
        - Hardsub
    type:
        - Dramas
        - Concerts
    pays:
        - Taïwan
        - Corée
slug: le-temps-dune-passion
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://letempsdunepassion.eklablog.com/'
---

Bonjour ~ Bonsoir & Bienvenue 

Je me présente, je m'appelle Morgan, mais je préfère Ganoushe, j'ai 23 ans et je suis passionnée depuis maintenant 6 ans de l'Asie, en particulier le Japon, la Corée et la Taiwan, j'ai d'abord créée une page Facebook : Le Temps D'une Passion. Puis après, j'ai eu envie de me mettre à traduire; 

Un TW-Drama de 29 épisodes : Moon River

et ce n'est que le début :D

Bref, j'espère que cette page vous plaira :) Bonne journée~ Bonne soirée 

Dans cette Team vous y trouverez que Moi : ~**Ganoushe** ^^


<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Le Temps Dune Passion Fansub' %}
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