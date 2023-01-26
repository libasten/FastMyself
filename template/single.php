{template:header}
<div class="main">
	<div class="content">
		{if $type=='article'}
		{template:post-single}
		{else}
		{template:post-page}
		{/if}
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
				<h6>回到顶部<i></i></h6>
			</li>
		</ul>
	</div>
</div>
{template:footer}