<article class="single fd-border">
	<h1 class="single-header">{$article.Title}</h1>
	<div class="single-meta meta-top">
		<span class="category">类别：<a href="{$article.Category.Url}">{$article.Category.Name}</a></span>
		<span class="date">日期：{$article.Time('Y-m-d')}</span>
		<span class="comment">评论：{$article.CommNums}</span>
	</div>
	<div class="single-text">
		{$article.Content}
	</div>
	<div class="single-meta meta-bottom clear">
		<span class="tags">{foreach $article.Tags as $tag}<a href="{$tag.Url}">{$tag.Name}</a>{/foreach}</span>
	</div>
</article>
<a href="../thanks/index.php">
	<div class="thanks fd-border">赞赏博主</div>
</a>
<div class="single-navigation fd-border">
	<div class="single-previous">
		{if $article.Prev}
		<a href="{$article.Prev.Url}" rel="prev"><span class="title-prefix">上一篇：</span><span>{$article.Prev.Title}</span></a>
		{else}
		<span span class="title-prefix">上一篇</span><span>已是第一篇</span>
		{/if}
	</div>
	<div class="single-next">
		{if $article.Next}
		<a href="{$article.Next.Url}" rel="next"><span class="title-prefix">下一篇</span><span>{$article.Next.Title}</span></a>
		{else}
		<span class="title-prefix">下一篇</span><span>已是最后一篇</span>
		{/if}
	</div>
</div>
<div class="relates fd-border">
	<div class="title"><h3>相关博文</h3></div>
	{$array=GetList($zbp->option['ZC_RELATEDLIST_COUNT'],null,null,null,null,null,array('is_related'=>$article->ID));}
	<ul id="related">
	{foreach $array as $related}
		<li><span class="title"><a href="{$related.Url}" title="{$related.Title}">{$related.Title}</a></span>&nbsp;&nbsp;<span class="time">{$related.Time('Y-m-d')}</span></li>
	{/foreach}
	</ul>
</div>
{if !$article.IsLock}
<div class="comments fd-border">
	{template:comments}
	{template:commentpost}
</div>
{/if}