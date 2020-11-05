<article class="single fd-border">
	<h1 class="single-header">{$article.Title}</h1>
	<div class="single-text sinlge-page">
		{$article.Content}
	</div>
</article>
{if !$article.IsLock}
<div class="comments fd-border">
	{template:comments}
	{template:commentpost}
</div>
{/if}