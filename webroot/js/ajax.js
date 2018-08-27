$('#btnsend').on('click', function(){
  $('#result').text('通信中...');
  // Ajax通信を開始
  $.ajax({
    url: 'helloAjax.php',
    type: 'GET',
    dataType: 'json',
    // フォーム要素の内容をハッシュ形式に変換
    data: $('form').serializeArray(),
    timeout: 5000,
  })
  .done(function(data) {
      // 通信成功時の処理を記述
  })
  .fail(function() {
      // 通信失敗時の処理を記述
  });
})
