<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?=wCMS::get('config','siteTitle')?> - <?=wCMS::page('title')?></title>
	<meta name="description" content="<?=wCMS::page('description')?>">
	<meta name="keywords" content="<?=wCMS::page('keywords')?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<link rel="stylesheet" href="<?=wCMS::asset('css/style.css')?>">
	<?=wCMS::css()?>
</head>
<body>
	<?=wCMS::alerts()?>
	<?=wCMS::settings()?>

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"/>
<style>
.social-bar{position:absolute;background-color:#121427;height:35px;width:100%;z-index:99}.social-icons{margin-top:-3px;color:white;float:right}.social-icons li{display:inline-block;margin-right:15px;margin-top:10px;font-size:18px;transition:all 1s}.social-icons li:last-child{margin-right:100px}.social-icons li:hover{color:#efefef;cursor:pointer}.spacer-custom{height:34px}a{border-bottom:none;color:white}.social-icons a:hover{color:#efefef;cursor:pointer}a:hover{border-bottom:none}
</style>

	<div class="row social-bar">
        <ul class="social-icons">
		<?=newEditableArea()?>
          
        </ul>
    </div>

	<div class="spacer-custom"></div>

	<nav class="navbar navbar-default">
		<div class="container">
			<div class="col-sm-5 text-center">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navMobile">&#9776;</button>
					<a href="./"><h1><?=wCMS::get('config','siteTitle')?></h1></a>
				</div>
			</div>
			<div class="col-sm-7 text-center">
				<div class="collapse navbar-collapse" id="navMobile">
					<ul class="nav navbar-nav navbar-right">
						<?=wCMS::menu()?>
					</ul>
				</div>
			</div>
		</div>
	</nav>
 
	<div class="container">
		<div class="col-xs-12 col-sm-8">
			<div class="whiteBackground grayFont padding20 rounded5">
				<?=wCMS::page('content')?>
			</div>
		</div>
		<div class="col-xs-12 col-sm-4">
			<div class="visible-xs spacer20"></div>
			<div class="darkBlueBackground padding20 rounded5">
				<?=wCMS::block('subside')?>
			</div>
		</div>
	</div>

	<footer class="container-fluid">
		<div class="padding20 text-right">
			<?=wCMS::footer()?>
		</div>
	</footer>

	<script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
	<?=wCMS::js()?>
</body>
</html>