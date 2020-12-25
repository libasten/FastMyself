{template:header}
<div class="main">
	<div class="content">
		<article class="single box-border">
			<h1 class="single-header">{$article.Title}</h1>
			<div class="single-text sinlge-page">
				<!-- get random tags -->
				{php}
				global $zbp,$str;
				$str = '';
				$array = $zbp->GetTagList('','',array('rand()'=>' '),array(99999),'');
				foreach ($array as $tag) {
				$str .= "<a href=\"{$tag->Url}\" title=\"{$tag->Name}\" class=\"tag-item\">{$tag->Name}</a>" . "&nbsp;&nbsp;&nbsp;&nbsp;";
				}
				echo ($str);
				{/php}
			</div>
		</article>
	</div>
	<div class="sider">
		{template:sidebar}
	</div>
	<div class="sider2">
		{template:sidebar2}
	</div>
	<div class="clear"></div>
	<div class="rollbar" style="display: none;">
		<ul>
			<li><a href="javascript:(scrollTo({top:0,behavior:'smooth'}));">^</a>
				<h6>去顶部<i></i></h6>
			</li>
		</ul>
	</div>
</div>
{template:footer}