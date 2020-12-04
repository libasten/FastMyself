<!DOCTYPE html>
<html lang="zh-CN">

<head>
  <script>
    if (document.domain !== 'www.feidaoboke.com') {
      document.location = 'https://www.feidaoboke.com';
    }
  </script>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  {if $type=='index'}
  <title>{$name} - {$subname}{if $page>'1'} - 第{$pagebar.PageNow}页{/if}</title>
  <meta name="description" content="{$zbp->Config('FastMyself')->description}">
  <meta name="keywords" content="{$zbp->Config('FastMyself')->keywords}">
  {/if}
  {if $type=='category'}
  <title>{$title} - {$name}</title>
  <meta name="description" content="{$name}网站中{$title}分类文章。">
  <meta name="keywords" content="{$name},{$title}">
  {/if}
  {if $type=='date'}
  <title>{$title} - {$name}</title>
  <meta name="description" content="{$name}网站中{$title}的文章。">
  <meta name="keywords" content="{$name},{$title}">
  {/if}
  {if $type=='article'}
  <title>{$title} - {$name}</title>
  <meta name="description" content="{php}echo preg_replace('/[\r\n\s]+/', '', trim(SubStrUTF8(FormatString($article->Intro,'[nohtml]'),100)).'...');{/php}" />
  <meta name="keywords" content="{foreach $article.Tags as $tag}{$tag.Name},{/foreach}{$name}" />
  {/if}
  {if $type=='page'}
  <title>{$title} - {$name}</title>
  <meta name="description" content="{$title},{$name}">
  <meta name="keywords" content="{$title},{$name}">
  {/if}
  {if $type=='tag'}
  <title>{$title} - {$name}</title>
  <meta name="description" content="{$name}网站中包含{$title}标签的文章。">
  <meta name="keywords" content="{$title},{$name}">
  {/if}
  <link href="{$host}zb_users/theme/{$theme}/style/{$style}.css" rel="stylesheet">
  <link rel="icon" type="images/x-icon" href="{$zbp->Config('FastMyself')->favicon}">
  <link rel="shortcut icon" href="{$zbp->Config('FastMyself')->favicon}">
</head>

<body>
  <div class="header">
    <div class="header-container clear">
      <div class="brand">
        {if $zbp->Config('FastMyself')->isImgLogo > 0 }
        <a href="{$host}" title="{$name}"><img src="{$zbp->Config('FastMyself')->logo}" alt="{$name}"></a>
        {else}
        <a href="{$host}" class="title-text">{$name}</a>
        {/if}
      </div>
      <div class="menu-btn" type="button">
        <span class="navicon"></span>
      </div>
      <nav class="nav-menu">
        <ul>
          {module:navbar}
        </ul>
      </nav>
    </div>
  </div>