---
title: 'ELECTRIC BLACKNESS'
published: true
date: '14:02 02-02-2018'
publish_date: '02-02-2018 15:02'
taxonomy:
    category:
        - Team
    tag:
        - 'Accès Privé'
        - 'Libre Accès'
        - Hardsub
        - Softsub
    type:
        - Dramas
        - Films
        - Animes
        - Emissions
        - Karaokes
    genre:
        - Yaoi
        - Yuri
    pays:
        - Japon
        - Chine
        - Taïwan
        - Corée
        - Thaïlande
        - Hong-Kong
        - Singapour
jscomments:
    active: true
    provider: disqus
process:
    markdown: true
    twig: true
twig_first: true
header_image: '1'
header_image_file: Paruru.jpg
site: 'http://team.eb.free.fr'
---

Petite team de _Fansub & Scantrad_ en tout genre.

Nous faisons avant tout ce qu'il nous plaît sans se prendre la tête ^^

On fait principalement des **karaokes**, parce que c'est plus sympa à faire. Et on a décidé de stopper les dramas pour le moment vu notre vitesse actuelle (La plupart des membres ont plus de 20 ans et travaillent donc peu de temps libre) et nous concentrerons sur des **films** (nous terminerons bien évidemment nos séries en cours).

Nos projets sont disponibles sur notre site en DL, Torrent, Streaming, Hardsub, Softsub, et ce librement (pas d'inscription, pas de nombre de messages requis, pas de mots de passe). Mais pensez à nous laisser des petits commentaires pour nous dire ce que vous avez pensé des projets, ça nous ferait plaisir :)

Nous essaierons de ressortir quelques **DJ/OS** bientôt.

On cherche aussi un petite équipe pour traduire des _Visual Novels_ :)

PS: Les fans de Johnny's sont accueillis bras ouverts, nous sommes deux grandes fans dans la team et ne cherchons qu'à faire plus de karaokes/émissions sur eux !

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>


<div class="row">
{% for name, feed in twig_feeds if name == 'ELECTRIC BLACKNESS' %}
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
</div
