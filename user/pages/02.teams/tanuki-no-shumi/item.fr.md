---
title: 'Tanuki no shumi'
date: '13:26 06-02-2018'
taxonomy:
    category:
        - Indépendant
    tag:
        - 'Libre Accès'
    type:
        - Dramas
        - Films
    pays:
        - Japon
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://tanuki31fansub.skyrock.com/'
---

Bonjour tout le monde,

Et merci à ceux qui prendront le temps de s'égarer sur ce blog...
Tout d'abord, je ne suis pas un expert de la chose...Donc si vous avez quelques conseils à me donner, ils seront les bienvenus.

Pourquoi, un blog?...Hé bien, je cède aux encouragements des personnes ayant lu mes postes sur des forums de fansub. De plus, me lançant dans la fansub, et même si je diffuse au maximum mon travail, je me suis dit qu'un blog, c'était pas mal tout compte fait.

Ma passion, mon passe temps ou shumi en Japonais...Le Japon. Ce n'est pas trop original, je sais.

Cependant, cela m'a pris sur le tard contrairement à beaucoup, après une vie à bourlinguer autour du globe en tant que géologue. Et puis, et puis...les hasards de la vie font que je me suis marié à une Dame du Pays du Soleil Levant.

L'ambition de ce blog est de vous faire partager ce que je découvre à chaque séjour là-bas, ainsi que mon modeste travail de traducteur indépendant. Il ne s'agit que de petits billets suivant mes humeurs du moment...sous la lanterne d'un couple franco-japonais, un peu de l'intérieur....

Pour les intéressés, je travail sur les sous-titres anglais une première fois, mais corrige selon mes connaissances en Japonais (sous le regard moqueur de mon épouse). Ami(e)s linguistes, n'hésitez pas à me faire tout commentaire constructif...

Bonne lecture à toutes et tous.

Tanuki (surnom affectueux que l'on ma donné là-bas) 

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Tanuki no shumi' %}
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