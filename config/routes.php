<?php
 use NoahBuscher\Macaw\Macaw;
 
 Macaw::get('/a',function(){
 
	echo "let us  do it";
 });
 
 Macaw::get('(:all)', function($fu) {
  echo '未匹配到路由<br>'.$fu;
});
 
 Macaw::get('/','HomeController@home');
  
 
 Macaw::dispatch();




?>