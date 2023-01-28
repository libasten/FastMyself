<article class="article-list-item box-border">
    {if trim($article.Metas.fdsImage)!==''}
    <figure class="post-img">
        <a href="{$article.Url}"><img src="{$article.Metas.fdsImage}" alt="{$article.Title}"></a>
    </figure>
    <div class="post-text">
    {else}
    <div class="post-text no-figure">
    {/if}
        <a href="{$article.Url}"><h2 class="post-header">{$article.Title}</h2></a>
        <div class="post-meta meta-top">
            <span class="date">{$article.Time('Y-m-d')}</span>
        </div>
        <div class="post-intro">{$article.Intro}</div>
        <div class="post-meta meta-bottom clear">
            <span class="tags">{foreach $article.Tags as $tag}<a href="{$tag.Url}">#{$tag.Name}</a>{/foreach}</span>
            <span class="read-more"><a href="{$article.Url}">阅读全文...</a></span>
        </div>
    </div>
</article>