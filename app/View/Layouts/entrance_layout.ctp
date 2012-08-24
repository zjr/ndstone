<!doctype html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $title_for_layout; ?></title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->fetch('meta');

		echo $this->Html->css('main');

		echo $this->fetch('css');
	?>
</head>
<body>
	<header>
		<nav class="clearfix">
			<a class="linkset" href="/">Home</a>
			<a class="linkset" href="/contact">Contact</a>
			<a class="linkset" href="/work">Work</a>
			<a class="linkset" href="/team">Team</a>
			<a class="linkset" href="/about">About</a>
		</nav>
		<div class="eye"></div>
		<img class="logo" src="/img/headLogo.png" width="150" height="150" alt="Grindstone Productions LLC.">
		<h2 class="respHmed">Grindstone Productions Llc.</h2>
	</header>
	<?php echo $this->Session->flash(); ?>
	<div class="main">
		<?php echo $this->fetch('content'); ?>
	</div>
</body>
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script>window.jQuery || document.write('<script src="/js/lib/jquery-1.7.2.min.js"><\/script>')</script>
<?php 

echo $this->Html->script('main');

echo $this->fetch('script');

?>
<script>
  $(".respHsmaller").fitText(0.7);
  $(".respHbigger").fitText(0.2);
  $(".respHmed").fitText(2.3);
  $(".linkset").fitText(0.7)
</script>
</html>