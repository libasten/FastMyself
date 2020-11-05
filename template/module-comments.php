{foreach $comments as $comment}
<li><a href="{$comment->Post->Url}#cmt{$comment->ID}" title="{htmlspecialchars($comment->Author->StaticName . ' @ ' . $comment->Time())}">{$comment->Author->StaticName}：{FormatString($comment->Content, '[noenter]')}</a></li>
{/foreach}