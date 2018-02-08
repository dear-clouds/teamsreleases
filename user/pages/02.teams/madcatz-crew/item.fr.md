---
title: 'MadCatz Crew'
published: true
date: '14:14 02-02-2018'
publish_date: '02-02-2018 15:15'
taxonomy:
    category:
        - Crew
    tag:
        - 'Libre Accès'
        - Hardsub
    type:
        - Dramas
        - Films
        - Karaokes
    pays:
        - Japon
        - Thaïlande
        - Singapour
        - Corée
process:
    markdown: true
    twig: true
twig_first: true
header_image: '1'
header_image_file: MadCatz.png
site: 'http://madcatzcrew.crazyfruits.net/'
---

Madcatz est né en Juin 2016 avec comme seul but de rassembler plein de gens autour d'une même passion : Le Fansub/Scantrad. Non seulement vous trouvez des releases labellisées MadCatz mais aussi de l'entraide, une école, des découvertes et des discussions passionnantes. N'hésitez plus et venez rejoindre le fun ❤

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'MadCatz Crew' %}
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