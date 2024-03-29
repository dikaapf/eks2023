<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<title>Aplikasi Ujian Edukarir</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<meta name="description" content="Aplikasi Ujian Edukarir berbasis web. Lebih Mudah dan Hemat, kayak AlfaMart">
<meta name="apple-mobile-web-app-capable" content="yes">
<link href="<?php echo base_url(); ?>___/css/bootstrap.css" rel="stylesheet">
<link href="<?php echo base_url(); ?>___/css/style.css" rel="stylesheet">
<!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=G-3ZKK9JPXS9"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-3ZKK9JPXS9');
</script>
</head>
<body>

<div class="container">
	<div class="col-md-4"></div>
	<div class="col-md-4">
	<form action="" method="post" name="fl" id="f_login" onsubmit="return login();">
		
		<div class="panel panel-default top150">
		<center><img src="https://edukarircenter.com/wp-content/uploads/2024/01/cropped-4.png" alt="Edu Karir Center" width="300" height="70"></center>
			<div class="panel-heading"><h4 style="margin: 5px"><i class="glyphicon glyphicon-user"></i> Login Aplikasi</h4></div>
			<div class="panel-body">
				<div id="konfirmasi"></div>
				<div class="input-group">
					<span class="input-group-addon">@</span>
					<input type="text" id="username" name="username" autofocus value="" placeholder="Username" class="form-control" />
				</div> <!-- /field -->
				
				<div class="input-group top15">
					<span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
					<input type="password" id="password" name="password" value="" placeholder="Password" class="form-control"/>
				</div> <!-- /password -->
				<div class="login-actions">
					<button class="button btn btn-dafault btn-large col-lg-12 top15">Login</button>
				</div> <!-- .actions -->
			</div>
		</div> <!-- /login-fields -->
		
		
	</form>
	</div>
	<div class="col-md-4"></div>
</div> 

<div class="ctr"> 
	<a href="<?php echo base_url(); ?>adm"><?php echo $this->config->item('nama_aplikasi')." ".$this->config->item('versi'); ?></a>
	<br><center><p>Powered by <a href='https://edukarircenter.com/' title='edukarircenter.com' target='_blank'>edukarircenter.com</a></p></center>
	
</div>

<script src="<?php echo base_url(); ?>___/js/jquery-1.11.3.min.js"></script> 
<script src="<?php echo base_url(); ?>___/js/bootstrap.js"></script>
<script type="text/javascript">
	base_url = "<?php echo base_url(); ?>";
	uri_js = "<?php echo $this->config->item('uri_js'); ?>";
</script>
<script src="<?php echo base_url(); ?>___/js/aplikasi.js"></script> 
</body>
</html>
