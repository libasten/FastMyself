<div class="comment-area">
    <h3>留言评论</h3>
    <label id="AjaxCommentBegin"></label>
    <ol class="comment-list">
        {foreach $comments as $key => $comment}
        {template:comment}
        {/foreach}
    </ol>
    <div class="pagebar commentpagebar">{template:pagebar}</div>
    <label id="AjaxCommentEnd"></label>
</div>