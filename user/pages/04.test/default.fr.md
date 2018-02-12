---
title: Test
published: true
date: '14:07 12-02-2018'
process:
    twig: true
    markdown: false
twig_first: true
visible: false
---

{% set index = 1 %}
{% set feed_items = [] %}
{% for name, feed in twig_feeds %}
    {% for item in feed.items %}
        {% set index = index + 1 %}
        {% set item = item|merge({ 'retrievedTitle': feed.title }) %}
        {% set item = item|merge({ 'sortDate': item.date.date }) %}
        {% set feed_items = feed_items|merge({ (index): (item) }) %}
    {% endfor %}
{% endfor %}
{% if uri.param('page') %}
    {% set currentPage = uri.param('page') %}
{% else %}
    {% set currentPage = 1 %}
{% endif %}
{% set perPage = 5 %}
{% set totalPages = (feed_items|length / perPage)|round(0, 'ceil') %}
{% set start = currentPage * perPage - perPage %}
{% set paginationLimit = 4 %}

{% for index, item in feed_items|sort_by_key('sortDate')|reverse|slice(start, perPage) %}
    <h5>
        <a href="{{ item.url }}">{{ item.retrievedTitle }} - {{ item.title }}</a>
    </h5>
    <time>{{ item.date.date }}</time>
{% endfor %}

{% if totalPages > 1 %}
    <ul class="pagination">
        <li class="page-item {% if currentPage <= 1 %}disabled{% endif %}">
            <a href="{{ page.url }}/page:{{ 1 }}">First</a>
        </li>
        <li class="page-item {% if currentPage <= 1 %}disabled{% endif %}">
            <a href="{{ page.url }}/page:{{ currentPage - 1 }}">Previous</a>
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
                    <a href="{{ page.url }}/page:{{ loop.index }}">{{ loop.index }}</a>
                </li>
            {% endif %}
        {% endfor %}
        <li class="page-item {% if currentPage >= totalPages %}disabled{% endif %}">
            <a href="{{ page.url }}/page:{{ currentPage + 1 }}">Next</a>
        </li>
        <li class="page-item {% if currentPage >= totalPages %}disabled{% endif %}">
            <a href="{{ page.url }}/page:{{ totalPages }}">Last</a>
        </li>
    </ul>
{% endif %}