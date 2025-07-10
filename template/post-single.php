<article class="single box-border">
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
		<span class="tags">{foreach $article.Tags as $tag}<a href="{$tag.Url}">#{$tag.Name}</a>{/foreach}</span>
	</div>
</article>
<!-- <a href="../thanks/index.php">
	<div class="thanks box-border">赞赏博主</div>
</a> -->
<div class="single-navigation box-border">
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
<!-- get-dollars -->
<div class="get-dollars box-border" style="margin-bottom:15px;padding: 20px 25px">
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-0188145692330625"
     crossorigin="anonymous"></script>
<!-- 文章下方 -->
<ins class="adsbygoogle"
     style="display:block"
     data-ad-client="ca-pub-0188145692330625"
     data-ad-slot="1366446568"
     data-ad-format="auto"
     data-full-width-responsive="true"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
</div>

<div class="relates box-border">
	<div class="title"><h3>相关文章</h3></div>
	{$array=GetList($zbp->option['ZC_RELATEDLIST_COUNT'],null,null,null,null,null,array('is_related'=>$article->ID));}
	<ul id="related">
	{foreach $array as $related}
		<li><span class="title"><a href="{$related.Url}" title="{$related.Title}">{$related.Title}</a></span>&nbsp;&nbsp;<span class="time">{$related.Time('Y-m-d')}</span></li>
	{/foreach}
	</ul>
</div>
{if !$article.IsLock}
<div class="comments box-border">
	{template:comments}
	{template:commentpost}
</div>
{/if}