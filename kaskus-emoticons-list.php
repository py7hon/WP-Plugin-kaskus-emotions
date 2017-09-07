<?php
$KEEUrl = get_option('siteurl') . '/wp-content/plugins/kaskus-emoticons/emoticons/';
$opt 	= get_option('kaskus_emoticons');

$KEReplace	= array(
	':)' => '<img src="'. $KEEUrl.'smile.gif.webp" style="border:none;background:none;" alt=":)" />',
	':D' => '<img src="'. $KEEUrl.'biggrin.gif.webp" style="border:none;background:none;" alt=":D" />', 
	':v' => '<img src="'. $KEEUrl.'exlaim.gif.webp" style="border:none;background:none;" alt=":v" />',
	'B-)' => '<img src="'. $KEEUrl.'cool.gif.webp" style="border:none;background:none;" alt="B-)" />',
	'^_^' => '<img src="'. $KEEUrl.'grin.gif.webp" style="border:none;background:none;" alt="^_^" />',   
	'>_<' => '<img src="'. $KEEUrl.'twisted.gif.webp" style="border:none;background:none;" alt=">_<" />',    
	':p' => '<img src="'. $KEEUrl.'razz.gif.webp" style="border:none;background:none;" alt=":p" />',    
	':3' => '<img src="'. $KEEUrl.'mrgreen.gif.webp" style="border:none;background:none;" alt=":3" />',    
	'-_-' => '<img src="'. $KEEUrl.'neutral.gif.webp" style="border:none;background:none;" alt="-_-" />',    
	';)' => '<img src="'. $KEEUrl.'wink.gif.webp" style="border:none;background:none;" alt=";)" />',    
	':cry:' => '<img src="'. $KEEUrl.'cry.gif.webp" style="border:none;background:none;" alt=":cry:" />',  
	'>:(' => '<img src="'. $KEEUrl.'ngamok.webp" style="border:none;background:none;" alt=">:(" />',  
	':aghh' => '<img src="'. $KEEUrl.'aghh.gif" style="border:none;background:none;" alt=":aghh" />',  
	':bening' => '<img src="'. $KEEUrl.'cling.gif" style="border:none;background:none;" alt=":bening" />',  
	':haha' => '<img src="'. $KEEUrl.'haha.gif" style="border:none;background:none;" alt=":haha" />',  
	':hehe' => '<img src="'. $KEEUrl.'hehe.gif" style="border:none;background:none;" alt=":hehe" />',  
	':kaget' => '<img src="'. $KEEUrl.'kaget.gif" style="border:none;background:none;" alt=":kaget" />',       
':lalala' => '<img src="'. $KEEUrl.'lalala.gif" style="border:none;background:none;" alt=":lalala" />',
':hah' => '<img src="'. $KEEUrl.'lho.gif" style="border:none;background:none;" alt=":nunggu" />',  
':listen' => '<img src="'. $KEEUrl.'listen.gif" style="border:none;background:none;" alt=":listen" />',  
':lol' => '<img src="'. $KEEUrl.'lol.gif" style="border:none;background:none;" alt=":lol" />',  
);
$KEReplace2 = $KEReplace;
if(isset($opt['stat'])){
	foreach($opt['stat'] as $k=>$v){
		$KEReplace[$k]="";
	}
}
?>
