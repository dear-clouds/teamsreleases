---
title: 'SakuraCream Fansub'
date: '15:53 02-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Accès Privé'
    type:
        - Dramas
        - Films
        - Butai
    pays:
        - Japon
        - Thaïlande
        - Chine
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://sakuracreamfansub.eklablog.com'
---

Bonjour, nous sommes ravie de t'accueillir sur notre Fansub!

Crée le 26 avril, la SakuraCream est une fansub indépendante, simplement des fans qui traduisent pour des fans. (♥)

**La team :**
Blue_Sky, Bol de Riz,KonoAnahy & Yushipumba

Nous aimons aussi papoter et rire, donc hésite pas à utiliser le tchat (Bla Bla ☼) cool
Le site traitera n'importe quel drama ou film, clips, butai, émissions & des karaokés...

Aussi ! Un petit commentaire de remerciement fait toujours plaisir.

On espère que tu passeras un bon moment en notre compagnie et nos traductions. ^-^

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'SakuraCream Fansub' %}
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