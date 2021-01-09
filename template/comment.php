<li class="msg" id="cmt{$comment.ID}">
	<div class="msgname">
		<span class="commentName">
			<a href="{$comment.Author.HomePage}" rel="nofollow" target="_blank">{$comment.Author.StaticName}</a>
		</span>
		<span class="commentTime">@ {$comment.Time()}</span>
		<span class="revertcomment"><a href="#comment" onclick="zbp.comment.reply('{$comment.ID}')">回复</a></span>
	</div>
	<div class="msgarticle">
		{$comment.Content}
		{if count($comment.Comments)>0}
		<ol class="children-comment-list">
			{foreach $comment.Comments as $comment}
			{template:comment}
			{/foreach}
		</ol>
		{/if}
	</div>
</li>