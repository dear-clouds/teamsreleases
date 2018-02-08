---
title: 'Mangas Arigatou'
date: '15:58 04-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - Hardsub
    type:
        - Dramas
        - Films
        - Animes
    genre:
        - Yaoi
    pays:
        - Japon
        - Corée
        - Thaïlande
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://www.mangas-arigatou.fr/'
---

M-Alice Fansub fut créée pour combler l'ennui du seigneur des Enfers.
Lasse de ses habituelles machines à sévices corporelles, il décida d'assouvir ses besoins sadiques,
sans cesse constants, au moyen d'un nouveau type de torture psychologique, le fansub.
Depuis, il contraint ses ombres brumeuses à bosser comme des damnés,
pour proposer toujours plus de projets.

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Mangas Arigatou' %}
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