  /**
  * scrolling the page in the home section to the next/previeus post.
  * each scroll moves the margin-top position in 470px.
  * varskey: "+", scrolling to the next post.
  * varskey: "-", scrolling to the previeus post.
  */
	function scroller(operator){
		if(operator=="-" || operator=="+"){
      if( !(parseInt($(".left-side").css("margin-top"))>=0 && operator=="+") &&
              !(parseInt($(".left-side").css("margin-top"))<=-1000 && operator=="-") ){
          // console.log(1);
      		$(".header-widget-contnet .left-side").animate({"marginTop": operator+ "=521px"}, "500");
      		$(".header-widget-contnet .right-side").animate({"marginTop": operator+ "=521px"}, "500");
      }
    }
	}

  $("a.scroll-up").click( function(){
  	scroller("-");
  });
  $("a.scroll-down").click( function(){
  	scroller("+");
  });
