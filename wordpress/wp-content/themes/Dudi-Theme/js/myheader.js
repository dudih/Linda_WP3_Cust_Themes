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


//Ajax load of twitters
var twitter_max_id = 0; //since what id to bring from twitter by ajax in the next call.
var startTweets = 0;      //starting <a> tag to show on page
/*
*getting responseText as json string and creating (returning)
*/
function buildTwittersList(responseText){
  var jsonObject = JSON.parse(responseText);
  var ans = '';
  for(var i in jsonObject) {
    ans += '<a href="#">' + jsonObject[i]["text"] + '</a>';
    twitter_max_id = jsonObject[i]["id"];
  }
  return ans;
}

/*
*This function using ajax in order to load the 5 most recent twittes from twitter
*argument: isFirstCall - true/false whether this is the first call to ajax, or that 'more-tweets' button was clicked (isFirstCall=false)
*/
function showTwitters(isFirstCall)
{
  var xmlhttp;
  if (window.XMLHttpRequest)
  {// code for IE7+, Firefox, Chrome, Opera, Safari
   xmlhttp=new XMLHttpRequest();
  }
 else
  {// code for IE6, IE5
   xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
  }
 xmlhttp.onreadystatechange=function()
 {
  if (xmlhttp.readyState==4 && xmlhttp.status==200)
  {
    $("#twitter-list").append( buildTwittersList( xmlhttp.responseText ) );
    if( isFirstCall==false ){
      for (var i = (startTweets*5)+1; i<=(startTweets+1)*5; i++)
        $("#twitter-list a:nth-child("+i+")").slideUp('slow');
      startTweets++;
    }
  }
 }
 xmlhttp.open("GET","wp-content/themes/Dudi-Theme/ajax-twitter-call.php?twitter_max_id=" +twitter_max_id);
 xmlhttp.send();
}

$("#more-tweets").click( function(){
  showTwitters(false);
});
$(document).ready( showTwitters );