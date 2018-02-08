---
title: 'Haneul Sora'
date: '17:29 02-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Libre Accès'
        - Hardsub
        - Softsub
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
site: 'http://haneulsora.eklablog.com/'
---

**Qui sommes-nous  ?**

Nous sommes une petite team de traductions de drama, films, SP. Nous avons commencé en 2012 mais j’ai officiellement repris les rennes depuis la rentrée 2015 suite au départ de la créatrice de la team.


**Que faisons-nous ?**

Coté projets nous n’avons pas de préférences, ils peuvent être anciens, récents, longs, courts, et de toutes nationalités. Le mot d’ordre étant « le coup de cœur ». Nous avons aussi décidé de prendre certains dramas jamais terminés par des teams pour X raison et de les finir nous même : nos fonds de tiroirs.
Nous aimons garder un rythme de sorties plutôt régulier donc il se peut que certaines projets mettent du temps à démarrer mais quand un drama est commencé il est normalement mené à terme.

Nous préférons éviter les doublons, même si au début nous en avons eu mais par contre nous adorons les coprods grâce auxquelles nous avons de très belles rencontres.

Nos releases sont proposées en DDL soit en hardsub soit en softsub.


<h3>Dernières sorties de la team</h3>


<div class="gap"></div>
<div class="row">
{% for name, feed in twig_feeds if name == 'Haneul Sora' %}
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