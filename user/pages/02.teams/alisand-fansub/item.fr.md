---
title: 'AliSand Fansub'
date: '16:06 02-02-2018'
taxonomy:
    category:
        - Team
    tag:
        - 'Accès Privé'
        - 'Libre Accès'
    type:
        - Dramas
        - Films
        - Animes
    pays:
        - Japon
        - Chine
        - Taïwan
        - Corée
        - Thaïlande
        - Philippines
jscomments:
    active: true
    provider: disqus
process:
    markdown: true
    twig: true
twig_first: false
header_image: '1'
site: 'http://alisandfansub.eklablog.com'
---

**Qu'est ce qu'est la AliSand Fansub ?**

 
Team crée en mai 2013, notre première sortis à était faite le 29 Mai 2013. Nous sommes 7 filles âgées de 20 à 24 ans. Avec un travail ou en étant étudiant. Pour connaître un peu plus les membres de la team : [Allez ici](http://alisandfansub.eklablog.com/presentation-de-la-team-a112744604)

 
**Dramas et films que nous ferons**

 
Pour parler des dramas ou des films que nous ferons, on feras surtout des dramas abandonnés par d'autres teams de fansub ou des dramas/films qui sont sortis il y a quelques années, déjà. On ne pense pas prendre de drama récent, car il existe déjà, plusieurs teams de fansub qui les prennent. On ne prendra aussi aucun drama coréen licencié ou récent car ils risquent d'être licencié plusieurs mois après leur sortis. Vous pouvez aussi nous proposer des drama et films sur cet article "Proposer des dramas et des films".
Chaque membre de la team prend le projet qui lui plait. Et le traduit entièrement et si besoin d'aide, des personnes peuvent nous aider.

 
**Ddl ou streaming ???**

 
Et pour finir, nous mettrons releases en ddl et en streaming (merci de ne pas mettre nos releases en streaming, vu que nous le ferrons nous mêmes. Il seront soit mis sur daily ou sur wat, sur les comptes de Sandie, ou sur le compte Youtube de la team pour les films principalement.


<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'AliSand Fansub' %}
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