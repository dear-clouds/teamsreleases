---
title: 'Ajouter une Team'
date: '00:08 03-02-2018'
form:
    name: my-nice-form
    fields:
        -
            name: name
            label: Pseudo
            placeholder: 'Votre pseudo'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: email
            label: Email
            placeholder: 'Votre mail'
            type: text
            validate:
                rule: email
                required: true
        -
            name: nom
            label: 'Nom de la team'
            placeholder: 'Nom de la team'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: site
            label: 'Site de la team'
            placeholder: 'Lien du site de la team/personne'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: type
            label: 'Type de projets'
            placeholder: 'Dramas, Films, Animes etc.'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: Origine
            label: 'Origines des projets'
            placeholder: 'Des projets de quels pays ?'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: tags
            label: Tags
            placeholder: 'Les tags que vous souhaitez associés à cette Team. Obligatoire : Hardsub ou Softsub ou les 2'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: true
        -
            name: genres
            label: Genres
            placeholder: 'Uniquement si la Team a un genre principal très précis (exemple: horreur, yaoi etc.)'
            autofocus: 'on'
            autocomplete: 'on'
            type: text
            validate:
                required: false
        -
            name: message
            label: Message
            size: long
            placeholder: 'Merci de me donner toute information susceptible de me facilité la tâche, le mot de passe pour la partie VIP etc.'
            type: textarea
            validate:
                required: true
    buttons:
        -
            type: submit
            value: Envoyer
            classes: 'waves-effect waves-light btn light-green'
    process:
        -
            email:
                from: '{{ config.plugins.email.from }}'
                to: ['{{ config.plugins.email.from }}', '{{ form.value.email }}']
                subject: '[Ajouter une Team] {{ form.value.name|e }}'
                body: '{% include ''forms/data.html.twig'' %}'
        -
            save:
                fileprefix: ajout-team-
                dateformat: Ymd-His-u
                extension: txt
                body: '{% include ''forms/data.txt.twig'' %}'
        -
            message: 'Merci pour votre message !'
        -
            display: merci
---

<div class="card red lighten-4">
  <div class="card-content" style="line-height: 18px;">
 <b> Merci de bien suivre ces règles avant de soumettre une Team.</b>
<ul>
   <li> - Vérifiez bien qu'elle n'est pas déjà présente sur ma liste !</li>
   <li> - La Team doit être encore en vie.</li>
   <li> - La Team n'est pas obligé de faire uniquement des projets Asiatiques.</li>
   <li> - Actuellement seules les Teams de Dramas peuvent être ajoutées au Flux des Sorties.</li>
</ul>

  <br><p>Merci aussi de me donner toute information susceptible de me faciliter la tâche. </p>   
<p>  <u>Exemple :</u> le mot de passe pour la partie VIP pour que je puisse voir tous les projets, ou un accès temporaire à un forum privé ou encore la liste complète de vos projets avec l'origine de chaque projet.</p>

<br><p><b>ATTENTION -</b> Ajouter une Team ne signifie pas qu'elle paraîtra dans le flux des sorties. Pour cela il faut que la team ai un <u>Flux RSS</u> qui annonce <b>uniquement</b> ses sorties ! Si elle n'en a pas, alors seule une fiche sera créée. Si la Team que vous souhaitez ajouter n'a pas de RSS, elle ne peut pas être ajoutée. Pourquoi ne pas essayer de leur demander de mettre en place un Flux RSS ? 
    
</p>
  </div>