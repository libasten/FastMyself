{template:header}
<div class="main">
  <div class="content">
    {if $type=='category'}
    <div class="page-header fd-border">
      <div>
        <h1>{$category.Name}</h1>
        <div class="header-info">分类归档</div>
      </div>
    </div>
    {/if}
    {if $type=='tag'}
    <div class="page-header fd-border">
      <div>
        <h1>{$tag.Name}</h1>
        <div class="header-info">标签归档</div>
      </div>
    </div>
    {/if}
    <div class="article-list">
      {foreach $articles as $article}
      {if $article.IsTop}
      {template:post-istop}
      {else}
      {template:post-multi}
      {/if}
      {/foreach}
    </div>
    <div class="pagination">
      {template:pagebar}
    </div>
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
      <li><a href="javascript:(scrollTo({top:0,behavior:'smooth'}));">&and;</a>
        <h6>去顶部</h6>
      </li>
    </ul>
  </div>
</div>
{template:footer}