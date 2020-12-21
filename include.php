<?php
	  	    	 			  	
RegisterPlugin("FastMyself","ActivePlugin_FastMyself");    		  				    				   	
    	  	  		    				 			
function ActivePlugin_FastMyself() {    				 			     			  		
    Add_Filter_Plugin('Filter_Plugin_Admin_TopMenu','FastMyself_AddMenu');    		 	  		    		    		
    Add_Filter_Plugin('Filter_Plugin_Edit_Response5','FastMyself_Filter_Plugin_Edit_Response5');    		     	    			   		
}       	        							 

// 在顶部添加菜单    	    	 	    	 	     
function FastMyself_AddMenu(&$m){    				        	 		 	  
    global $zbp;       	 	       	  	 	 
    $m[] = MakeTopMenu("root", 'FastMyself主题设置', $zbp->host . "zb_users/theme/FastMyself/editor.php", "", "topmenu_FastMyself");    			         			 	   
}

function FastMyself_Filter_Plugin_Edit_Response5(){     		  		       	   		
    global $article;    			  		     				 	  
	echo '<div style="width:100%; margin-bottom:15px;">
    <label for="edtTitle" class="editinputname">封面图URL</label>
    <input name="meta_fdsImage" id="edtTitle" type="text" class="uplod_img" maxwidth="100" value="'.$article->Metas->fdsImage.'" />
    </div>';
}
    		 	      			 			 
function InstallPlugin_FastMyself() {     	 	 		       	    	
    global $zbp;
    if(!$zbp->HasConfig('FastMyself')){
		$zbp->Config('FastMyself')->description = '飞刀博客（feidaoboke.com）， 是包括读书笔记、随笔日志、信息技术、足球评价和新闻资讯相关的博客，作者为河边的飞刀。';
        $zbp->Config('FastMyself')->keywords = '飞刀博客,博客,个人博客,读书,新闻,足球,程序,Z-Blog,C#,HTML,JavaScript,CSS,PHP';
        $zbp->Config('FastMyself')->isImgLogo = 1;
        $zbp->Config('FastMyself')->logo = $zbp->host . 'zb_users/theme/FastMyself/style/img/logo.png';
        $zbp->Config('FastMyself')->favicon = $zbp->host . 'zb_users/theme/FastMyself/style/img/favicon.ico';
        $zbp->Config('FastMyself')->thumbnail = $zbp->host . 'zb_users/theme/FastMyself/style/img/default.jpg';
		$zbp->SaveConfig('FastMyself');
    }
}    	 	 	 		      	  			

function UninstallPlugin_FastMyself() {}