---
title: Sky@sia
date: '16:02 02-02-2018'
taxonomy:
    category:
        - Indépendant
    tag:
        - 'Libre Accès'
        - Hardsub
    type:
        - Dramas
        - Films
    pays:
        - Corée
        - Thaïlande
        - Chine
        - Taïwan
process:
    markdown: true
    twig: true
header_image: '1'
site: 'http://skyasia.ek.la/'
---

Bonjour, bonjour !!

Tout d’abord, bienvenue sur la Sky@sia. Il s'agit d'une petite team fondée par moi-même le 1er décembre 2015 et ayant pour objectif de mettre à disposition des dramas et des films asiatiques en vostfr. Pour le moment, vous y trouverez surtout des projets coréens, taïwanais ou thaïlandais mais il n’est pas dit que le champs s’élargisse étant donné que ce n’est pas l’origine qui détermine la prise d’un projet mais ce qu’il m’inspire.

Mon pseudo à moi c’est Chii77 et je suis tombée dans le monde des dramas en 2013. On peut dire que c’est assez récent mais j’ai depuis dévoré pas loin de 150 dramas et je ne m’arrête plus. En fait, je crois que je devrais remercier ma rupture du tendon d’Achille car sans elle, je n’aurais peut-être jamais découvert l’univers du fansub et des dramas. Si, si, je vous assure. À l’époque j’étais plutôt films et j’ai eu envie d’intégrer une team de fansub pour donner un coup de main et occuper mes longues journées d’arrêt. C'est là que j'ai rejoins la Electric Blackness en tant que traductrice et que j'ai visionné mon premier drama. Je tiens au passage à remercier cette team pour tout ce qu’elle m’a apporté et tous les moments extra passés ensemble.

Mon expérience dans le fansub a donc débuté en novemvre 2012. J’ai commencé par la traduction mais étant du genre à aimer maîtriser un sujet dans sa globalité, je me suis tout de suite lancée pour objectif de savoir gérer chaque étape d’un projet. Je fais donc depuis un moment maintenant de la traduction comme du check, du time, de l’édition, du qcheck ou de l’encodage. Tout se passait bien mais voilà, j’ai commencé à ressentir le besoin de voler de mes propres ailes. J’ai donc décidé de me lancer dans cette nouvelle aventure et de créer la Sky@sia.

<div class="gap"></div>
<h3>Dernières sorties de la team</h3>



<div class="row">
{% for name, feed in twig_feeds if name == 'Sky@sia' %}
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