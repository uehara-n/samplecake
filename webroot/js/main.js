
var url = location.href;
var host = location.hostname;
var path = location.pathname;


// ドラッグオーバー中だけスタイルを適用する方法
var timeoutId;

element.ondragover = function () {
  clearTimeout( timeoutId );

  element.classList.add( "drug_active" );

  timeoutId = setTimeout(function(){
    element.classList.remove("drug_acrive");
  },100);
}


//指定文字を置換、削除
var sourceStr = "TobeReplaceOrDeleteCharacter";
var targetStr = "WantReplaceOrDeleteCharacter";
var replaceStr = "";
var regExp = new RegExp( targetStr,"g" );
var CpStr = sourceStr.replace( regExp , replaceStr )；

//背景色から適した文字色が白か黒かを判定
function blackOrWhite ( hexcolor ){
  var r = parseInt ( hexcolor.substr( 1,2 ), 16 );
  var g = parseInt ( hexcolor.substr( 3,2 ), 16 );
  var b = parseInt ( hexcolor.substr( 5,2 ), 16 );

  return( ( ( (r * 299) + (g * 587) + (b * 114) ) / 1000 ) < 128 ) ? "white" : "black" ;
}
var wbColor = blackOrWhite("#d36015");

// ドロップダウンメニュー
$(function(){
  var ddnav = $('.ddnav');
  $('li',ddnav)
  .mouseover(function(e){
    $('ul',this).stop().slideDown('fast');
  })
  .mouseout(function(e){
    &('ul',this).stop().slideUp('fast');
  });
});
