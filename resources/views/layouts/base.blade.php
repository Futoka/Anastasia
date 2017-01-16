<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>@yield('title')</title>
	
		
	@section('styles')
		<link href="{{asset('/media/css/mainstyle.css')}}" type="text/css" rel="stylesheet">
		
	@show
	<meta name="keywords" content="социальная,сеть, соц, вк, фейсбук, social, network">
	<meta name="description" content="Новая социальная сеть">
	    <link rel="stylesheet" href="{{asset('media/bootstrap/css/bootstrap.min.css')}}">
			<script src='/media/js/jquery.js'></script>

	
</head>
<body>


  
  
  
  <div class="body" id="site-window">
	<div class="main" id="top">
	
	<div class="fix_bg_change" title="Выбор фона">  
  <span class="bg_set1" ></span>
  <span class="bg_set2"></span> 
  <span class="bg_set3"></span> 
  </div> 
		
	</div>
	<div class="center" id="center">
		<div class="main" id="menu">
			<a href="{{url('/')}}" class="choise m_main" "id="profile-menu">
				<p>Главная</p>
			</a>
			<a href="{{url('/profile')}}" class="choise m_profile" "id="profile-menu">
				<p>Профиль</p>
			</a>
			<a href="{{url('rooms')}}" class="choise m_rooms" "id="room-menu">
				<p>Комнаты</p>
			</a>
			<a href="" class="choise m_users" "id="search-menu">
				<p>Пользователи</p>
			</a>
			<a href="" class="choise m_options" "id="room-menu">
				<p>Настройки</p>
			<a href="{{url('logout')}}" class="choise m_exit" "id="exit-menu">
			
				<p>Выход</p>
			</a>
		</div>
		<div class="main" id="main">
			@yield('content')
		</div>
	</div>
	<div class="main" id="foot">
	<div class="foot_r" >
	<a href="https://belarusbank.by/ru/fizicheskim_licam/cards/bankomaty" target="_blank"><img src="/media/img/ad1.png"></a>
	<a href="https://www.pringles.com/ru/home.html" target="_blank"><img src="/media/img/ad2.png"></a>
	
	</div>
	
		<p>Kulikovskaya</p>
	</div>
  </div>
  

  
  
  <script type="text/javascript">
		var block=document.getElementById("chat");
		block.scrollTop = block.scrollHeight;
   </script>
   <script type="text/javascript">
		function Press(your_text, your_event){
			if (your_text != "" && your_event.keyCode == 13)
				document.getElementById("enter").submit.click();
		}
    </script>
	
	
	  
  <script>
  		
		  

 document.cookie = "cookie_bg";  
 
		  function getCookie(name) {
  var regexp = new RegExp("(?:^" + name + "|;\s*"+ name + ")=(.*?)(?:;|$)", "g");
  var result = regexp.exec(document.cookie);
  return (result === null) ? null : result[1];
}


  
    
  $('.bg_set1').click(function() {  
 document.cookie = "cookie_bg=bg1";  
  $('.body').css('background', 'black');  
  $('.bg_set1').css('border', '2px solid #3cce3a');   
  $('.bg_set2').css('border', '2px solid #fff');   
  $('.bg_set3').css('border', '2px solid #fff');   
  });  
  $('.bg_set2').click(function() {  
	document.cookie = "cookie_bg=bg2";
  $('.body').css('background', 'SteelBlue'); 
  $('.bg_set2').css('border', '2px solid #3cce3a');   
  $('.bg_set1').css('border', '2px solid #fff');    
  $('.bg_set3').css('border', '2px solid #fff');    
  });
  $('.bg_set3').click(function() {  
	document.cookie = "cookie_bg=bg3";
  $('.body').css('background', 'GhostWhite'); 
  $('.bg_set3').css('border', '2px solid #3cce3a');   
  $('.bg_set2').css('border', '2px solid #fff');    
  $('.bg_set1').css('border', '2px solid #fff');    
  }); 
  

  if(getCookie("cookie_bg") === "bg1") {  
  $('.body').css('background', 'black');  
  $('.bg_set1').css('border', '2px solid #3cce3a');   
  $('.bg_set2').css('border', '2px solid #fff'); 
  $('.bg_set3').css('border', '2px solid #fff'); 
  };  
  if(getCookie("cookie_bg") === "bg2") {  
  $('.body').css('background', 'SteelBlue');
  $('.bg_set2').css('border', '2px solid #3cce3a');   
  $('.bg_set1').css('border', '2px solid #fff');     
  $('.bg_set3').css('border', '2px solid #fff');     
  };  

  if(getCookie("cookie_bg") === "bg3" || getCookie("cookie_bg") === null) {  
  $('.body').css('background', 'GhostWhite');
  $('.bg_set3').css('border', '2px solid #3cce3a');   
  $('.bg_set1').css('border', '2px solid #fff');     
  $('.bg_set2').css('border', '2px solid #fff');     
  }; 

  
    </script>
  

  
    </script>
</body>
</html>