<?php
	  	    	 			  	
RegisterPlugin("FastMyself","ActivePlugin_FastMyself");    		  				    				   	
    	  	  		    				 			
function ActivePlugin_FastMyself() {    				 			     			  		
    Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','FastMyself_AddMenu');    		 	  		    		    		
    Add_Filter_Plugin('Filter_Plugin_Edit_Response5','FastMyself_Filter_Plugin_Edit_Response5');    		     	    			   		
}       	        							 

// 在顶部添加菜单    	    	 	    	 	     
function FastMyself_AddMenu(&$m){    				        	 		 	  
    global $zbp;       	 	       	  	 	 
    $m[] = MakeTopMenu("root", 'FastMyself主题设置说明', $zbp->host . "zb_users/theme/FastMyself/editor.php", "", "topmenu_FastMyself");    			         			 	   
}

function FastMyself_Filter_Plugin_Edit_Response5(){     		  		       	   		
    global $zbp, $article;    			  		     				 	  
    echo "<script type=\"text/javascript\" src=\"{$zbp->host}zb_users/theme/FastMyself/script/lib.upload.js\"></script>";
	echo '<div class="uploadimg" style="width:80%; height:100%;float:left;border-bottom:1px solid #ddd;margin-bottom:16px;">
    <label for="editor_content" class="editinputname">封面缩略图地址</label><br>
    <input name="meta_fdsImage" id="edtTitle" type="text" class="uplod_img" maxwidth="100" value="'.$article->Metas->fdsImage.'" />
    <strong class="button" style="color: #fff; padding: 6px 18px 6px 18px;margin: 0.5em 0;
        background: #3a6ea5;border: 1px solid #3399cc;cursor: pointer;display: block; height: 32px;width: 122px;">浏览上传图片</strong>
    </div>
    <div style="width:20%;float:right;border-left:1px solid #ddd;padding-left:10px;border-bottom:1px solid #ddd;padding-left:10px;height: 102px;">
    <label for="editor_content" class="editinputname">封面缩略图</label><br>
    <a href="'.$article->Metas->fdsImage.'" target="_blank">
        <img id="preview" src="'.$article->Metas->fdsImage.'" max-width="95%" style="height:76px">
    </a></div>';
}
    		 	      			 			 
function InstallPlugin_FastMyself() {     	 	 		       	    	
    global $zbp;
    if(!$zbp->HasConfig('FastMyself')){
		$zbp->Config('FastMyself')->description = '飞刀博客（feidaoboke.com）, 是包括读书笔记、随笔日志、信息技术、足球评价和新闻资讯相关的博客，作者为河边的飞刀';
        $zbp->Config('FastMyself')->keywords = '读书,新闻,意甲,中超,足球,程序,HTML,JavaScript,CSS,C#';
        $zbp->Config('FastMyself')->isImgLogo = 1;
        $zbp->Config('FastMyself')->logo = $zbp->host . 'zb_users/theme/FastMyself/style/img/logo.png';
        $zbp->Config('FastMyself')->favicon = $zbp->host . 'zb_users/theme/FastMyself/style/img/favicon.ico';
        $zbp->Config('FastMyself')->thumbnail = $zbp->host . 'zb_users/theme/FastMyself/style/img/default.jpg';
		$zbp->SaveConfig('FastMyself');
    }
}    	 	 	 		      	  			

function UninstallPlugin_FastMyself() {}