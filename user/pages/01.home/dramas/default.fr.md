---
title: Dramas
date: '15:31 09-02-2018'
---

<div class="row">
<div class="col s12 m12 l10">


{% set index = 1 %}
{% set feed_items = [] %}

{% for name, feed, type in twig_feeds %}

    {% for item in feed.items %}
        {% set index = index + 1 %}
        {% set item = item|merge({ 'retrievedTitle': feed.name }) %}
        {% set item = item|merge({ 'sortDate': item.date.date }) %}
        {% set feed_items = feed_items|merge({ (index): (item) }) %}

    {% endfor %}
{% endfor %}
{% if uri.param('page') %}
    {% set currentPage = uri.param('page') %}
{% else %}
    {% set currentPage = 1 %}
{% endif %}
{% set perPage = 32 %}
{% set totalPages = (feed_items|length / perPage)|round(0, 'ceil') %}
{% set start = currentPage * perPage - perPage %}
{% set paginationLimit = 4 %}

{% for index, item in feed_items|sort_by_key('sortDate')|reverse|slice(start, perPage) %}

<div class="col s12 m6 l4 xl3">
<div class="card">
<span class="top-icon"><i class="material-icons">terrain</i></span>
<div class="rssincl-itemdate">{{ item.date.date | date("d M Y (H:i)") }}</div><br>
<div class="item-image">{{ item.content }}</div>
 <h2 class="truncate"><i class="tiny material-icons">play_arrow</i><a href="{{ item.url }}" target="_blank">{{ item.title }}</a></h2>
<div class="rssincl-itemfeedtitle">{{ item.retrievedTitle }}</div>
</div>
</div>


{% endfor %}

<div class="gap"></div>

<center>
{% if totalPages > 1 %}
<div class="gap"></div>
    <ul class="pagination">
        <li class="page-item {% if currentPage <= 1 %}disabled{% endif %}">
            <a href="{{ base_url }}/page:{{ 1 }}">Début</a>
        </li>
        <li class="page-item {% if currentPage <= 1 %}disabled{% endif %}">
            <a href="{{ base_url }}/page:{{ currentPage - 1 }}"><i class="tiny material-icons">navigate_before</i></a>
        </li>
        {% for i in 1..totalPages %}
            {% if (currentPage - paginationLimit) - loop.index == 0 %}
                <li class="page-item">
                    <span>&hellip;</span>
                </li>
            {% elseif (currentPage + paginationLimit) - loop.index == 0 %}
                <li class="page-item">
                    <span>&hellip;</span>
                </li>

            {% elseif (currentPage - paginationLimit) - loop.index > 0 %}
            {% elseif (currentPage + paginationLimit) - loop.index < 0 %}

            {% else %}
                <li class="page-item {% if currentPage == loop.index  %} active{% endif %}">
                    <a href="{{ base_url }}/page:{{ loop.index }}">{{ loop.index }}</a>
                </li>
            {% endif %}
        {% endfor %}
        <li class="page-item {% if currentPage >= totalPages %}disabled{% endif %}">
            <a href="{{ base_url }}/page:{{ currentPage + 1 }}"> <i class="tiny material-icons">navigate_next</i> </a>
        </li>
        <li class="page-item {% if currentPage >= totalPages %}disabled{% endif %}">
            <a href="{{ base_url }}/page:{{ totalPages }}">Fin</a>
        </li>
    </ul>
{% endif %}
</center>


  </div>


				<div class="col s12 m4 l2 hide-on-med-and-down rightcolumn">

					<div class="card red lighten-2 white-text">
						<div class="card-content">
							<span class="card-title">VERSION BÊTA</span>
							<p><small>Des bugs peuvent apparaîtrent pendant la phase de transition et des changements peuvent avoir lieu aussi. Pour l'instant, il vaut mieux rester sur la <a href="http://team.eb.free.fr/SORTIES%20VOSTFR.php">version stable</a> mais vous pouvez déjà bookmarker ce site et discuter de vos dramas favoris dans les commentaires tout en bas !</small></p>
						</div>
					</div>

					<div class="card amber lighten-5">
						<div class="card-content">
							<span class="card-title">Note aux Teams</span>
							<p><small>Si vous souhaitez apparaître ici, merci de m'aider à bien tout harmoniser en postant un titre clair et que la première image de votre article représente votre sortie ! Ce sera plus joli et ça ne change pas trop vos habitudes. Si vous souhaitez aller encore plus loin, vous pouvez afficher sur votre site un de mes <a href="">logos</a> (en création).</small></p>
						</div>
					</div>

					<h3>Dramas du moment</h3>
					<div class="card">
						<div class="card-image">
							<img src="https://78.media.tumblr.com/edd0ef70cdf1429fff63a4f380368c5e/tumblr_o2dx18csTn1twd51do6_r1_250.gif">

							<a class="btn-floating halfway-fab waves-effect waves-light red" href="https://sjdkfansub.wordpress.com/2018/01/08/leh-lub-salub-rarng/" target="_blank"><i class="material-icons">insert_link</i></a>
						</div>
						<div class="card-content">
							<span class="card-title">Leh Lub Salub Rarng</span>
							<p><small>Petra Pawadee est une actrice célèbre très orgueilleuse et arrogante. Tandis que Ramin, un policier haut gradé, est égocentrique et dragueur.
								Un jour, ils permutent de corps. La seule manière pour eux de retrouver leur corps est une compréhension mutuelle.</small></p>
							</div>
						</div>

						<h3>Team à l'affiche</h3>
						<div class="card">
							<div class="card-image">
								<img src="https://teamsreleases.dearclouds.com/assets/images/team.png">

								<a class="btn-floating halfway-fab waves-effect waves-light red" href="https://dramaholixvip.wordpress.com/" target="_blank"><i class="material-icons">insert_link</i></a>
							</div>
							<div class="card-content">
								<span class="card-title">DramaHolix</span>
							</div>
						</div>

</div>
</div>

<section id="communaute" class="scrollspy">

				<h2>Communauté</h2>

        <div id="disqus_thread"></div>
				<script>

				/**
				*  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
				*  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
				/*
				var disqus_config = function () {
				this.page.url = PAGE_URL;  // Replace PAGE_URL with your page's canonical URL variable
				this.page.identifier = PAGE_IDENTIFIER; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
			};
			*/
			(function() { // DON'T EDIT BELOW THIS LINE
			var d = document, s = d.createElement('script');
			s.src = 'https://teams-releases.disqus.com/embed.js';
			s.setAttribute('data-timestamp', +new Date());
			(d.head || d.body).appendChild(s);
		})();
	</script>
	<noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>

</section>


	<div class="fixed-action-btn hide-on-small-only">
		<a class="btn-floating btn-large red">
			<i class="large material-icons">star</i>
		</a>
		<ul>
			<li><a class="btn-floating grey steam" href="http://steamcommunity.com/id/mio__" target="_blank"><i class="material-icons socicon socicon-steam"></i></a></li>
			<li><a class="btn-floating red accent-4" href="https://trakt.tv/users/mio_" target="_blank"><i class="material-icons">live_tv</i></a></li>
			<li><a class="btn-floating green" href="https://ask.fm/DEAR_CLOUDS" target="_blank"><i class="material-icons">email</i></a></li>
			<li><a class="btn-floating blue twitter" href="https://twitter.com/DEAR_CLOUDS" target="_blank"><i class="material-icons socicon socicon-twitter"></i></a></li>
		</ul>
	</div>
