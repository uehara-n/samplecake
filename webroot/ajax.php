<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- ***<link rel="manifest" href="site.webmanifest"> -->
  <link rel="apple-touch-icon" href="icon.png">
  <!-- Place favicon.ico in the root directory -->

  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
  <link rel="stylesheet" href="css/style.css">

  <!-- jquery/ajax -->
  <script type="text/javascript" src="//code.jquery.com/jquery-3.1.1.min.js"></script>
  <script type="text/javascript" src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
  <script>
    $(document).ready( function () {
      $('#myTable').DataTable();
    } );
  </script>

  <script type="text/javascript" src="../js/ajax.js"></script>
</head>

<body>

  <header id="masthead" class="" role="banner">
		<div class="wrap header-wrap">
			<div class="site-branding">
					<h1 class="site-title"><a href="<?php echo url; ?>" rel="home">sitetitle</a></h1>
			</div>

			<form role="search" method="get" class="searchform" id="searchform" action="<?php echo url; ?>">
        <div>
          <label class="screen-reader-text" for="s">Search for:</label>
            <input type="text" value="" name="s" id="s">
            <input type="submit" id="searchsubmit" value="Search">
        </div>
      </form>

      <nav id="site-navigation" class="main-navigation" role="navigation">
				<div class="menu-top-nav-container">
          <ul id="menu-top-nav" class="ddnav">
            <li id="menu_head_dd01" class="menu-item">
              <a href="#">Categories</a>
              <ul class="sub-menu">
              	<li id="" class="menu-item"><a href="">taxnomyMenu</a></li>
              	<li id="" class="menu-item"><a href="">taxnomyMenu</a></li>
              </ul>
            </li><!--.menu_head_dd01 -->
            <li id="menu_head02" class="menu-item"><a href=""></a></li>
          </ul><!--#menu-top-nav -->
        </div><!-- .menu-top-nav-container -->
      </nav>
		</div><!-- .header-wrap -->
	</header>


  <div id="content">

    <form id="form_1" method="post" accept-charset="utf-8" return false>
        <p>名前 <input type="text" name = "userid" id ="userid"> </p>
        <p>パスワード <input type="text" name = "passward" id="passward"> </p>
    </form>

    <button id="ajax">ajax</button>
    <div class="result"></div>

    <script type="text/javascript">

        $(function(){
            // Ajax button click
            $('#ajax').on('click',function(){
                $.ajax({
                    url:'./request.php',
                    type:'POST',
                    data:{
                        'userid':$('#userid').val(),
                        'passward':$('#passward').val()
                    }
                })
                // Ajaxリクエストが成功した時発動
                .done( (data) => {
                    $('.result').html(data);
                    console.log(data);
                })
                // Ajaxリクエストが失敗した時発動
                .fail( (data) => {
                    $('.result').html(data);
                    console.log(data);
                })
                // Ajaxリクエストが成功・失敗どちらでも発動
                .always( (data) => {

                });
            });
        });

    </script>

  <table id="myTable" class="table table-bordered clearfix">
    <thead>
            <tr><th>No</th><th>都道府県</th></tr>
        </thead>
        <tbody>
            <tr><td>1</td><td>北海道</td></tr>
            <tr><td>2</td><td>青森県</td></tr>
            <tr><td>3</td><td>岩手県</td></tr>
            <tr><td>4</td><td>宮城県</td></tr>
            <tr><td>5</td><td>秋田県</td></tr>
            <tr><td>6</td><td>山形県</td></tr>
            <tr><td>7</td><td>福島県</td></tr>
            <tr><td>8</td><td>茨城県</td></tr>
            <tr><td>9</td><td>栃木県</td></tr>
            <tr><td>10</td><td>群馬県</td></tr>
            <tr><td>47</td><td>沖縄県</td></tr>
        </tbody>
  </table>

  </div><!-- id="content" -->


  <footer id="footer" class="">
    <div class="wrap footer-wrap">
  			<div class="site-info">

  				<span class="footer-list">
  					<a href="<?php echo path; ?>/" class=""></a>
  					<a href="<?php echo path; ?>/" class=""></a>
  					<a href="<?php echo path; ?>/" class=""></a>
  					<a href="<?php echo path; ?>/" class=""></a>
  					<a href="<?php echo path; ?>/" class=""></a>
  				</span>

  				<span class="copywrite">
  					© 2018 sitename, Inc. All rights reserved.&nbsp;<a href="<?php echo url; ?>">sitename</a>
          </span>
  			</div><!-- .site-info -->
  		</div>
  </footer>

  <!--[if lte IE 9]>
    <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
  <![endif]-->
  <script src="js/vendor/modernizr-3.6.0.min.js"></script>
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-3.3.1.min.js"><\/script>')</script>
  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
    ga('create', 'UA-XXXXX-Y', 'auto'); ga('send', 'pageview')
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async defer></script>

</body>

</html>
