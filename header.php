<?php

namespace Fiesta;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
		<?php wp_head(); ?>
		<script>
			var app={queue:[],ready:function(a){this.isReady?a():this.queue.push(a)}};
		</script>
	</head>
	<body <?php body_class(); ?>>

		<?php
			wp_body_open();
		?>

		<header class="c-header" id="header">
			<div class="skip-link"><a href="#main-content"><?= __('Skip to content'); ?></a></div>
			<div class="inner">
				<a href="/" class="logo" aria-label="<?= __('To home page'); ?>">
					<svg width="93" height="29" viewBox="0 0 93 29" xmlns="http://www.w3.org/2000/svg"><path d="M7.403 28V12.8h3.648V9.342H7.403V7.328c0-2.166.836-3.154 2.356-3.154.646 0 1.368.152 2.052.456l.836-3.268c-.836-.342-2.09-.646-3.42-.646-4.408 0-6.194 2.812-6.194 6.688v1.938l-2.508.19V12.8h2.508V28h4.37zM17.58 6.074c1.558 0 2.698-1.026 2.698-2.47 0-1.482-1.14-2.508-2.698-2.508S14.88 2.122 14.88 3.604c0 1.444 1.14 2.47 2.698 2.47zM19.745 28V9.342h-4.37V28h4.37zm14.621.456c2.356 0 4.598-.836 6.384-2.014l-1.482-2.736c-1.368.874-2.736 1.368-4.332 1.368-3.002 0-5.13-1.9-5.51-5.282h11.856c.114-.456.19-1.216.19-2.052 0-5.206-2.66-8.854-7.714-8.854-4.37 0-8.588 3.724-8.588 9.804 0 6.156 4.028 9.766 9.196 9.766zm3.306-11.438h-8.284c.38-3.116 2.28-4.75 4.484-4.75 2.546 0 3.8 1.786 3.8 4.75zm14.242 11.438c4.712 0 7.258-2.584 7.258-5.776 0-3.496-2.812-4.712-5.358-5.662-2.014-.722-3.876-1.33-3.876-2.774 0-1.178.874-2.052 2.736-2.052 1.482 0 2.812.646 4.104 1.596l2.014-2.66c-1.52-1.178-3.61-2.242-6.194-2.242-4.18 0-6.802 2.318-6.802 5.586 0 3.116 2.774 4.522 5.244 5.434 1.976.76 3.99 1.444 3.99 3.002 0 1.292-.95 2.242-2.964 2.242-1.9 0-3.496-.798-5.168-2.09l-2.052 2.812c1.824 1.482 4.522 2.584 7.068 2.584zm18.802 0c1.482 0 2.774-.342 3.8-.684l-.76-3.23c-.532.228-1.292.418-1.938.418-1.786 0-2.622-1.064-2.622-3.268V12.8h4.75V9.342h-4.75V4.25h-3.648l-.532 5.092-2.888.19V12.8h2.66v8.892c0 4.028 1.596 6.764 5.928 6.764zm12.38 0c2.203 0 4.103-1.102 5.775-2.508h.114L89.327 28H92.9V16.942c0-5.206-2.28-8.056-6.954-8.056-2.964 0-5.586 1.14-7.638 2.432l1.596 2.926c1.634-.988 3.382-1.824 5.244-1.824 2.508 0 3.344 1.672 3.382 3.648-7.638.836-10.982 2.926-10.982 6.916 0 3.268 2.28 5.472 5.548 5.472zm1.367-3.42c-1.558 0-2.66-.722-2.66-2.394 0-1.862 1.672-3.192 6.726-3.838v4.18c-1.368 1.292-2.546 2.052-4.066 2.052z" fill="#FFF" fill-rule="nonzero"/></svg>
				</a>
				<nav class="c-navigation" id="navigation">
					<button class="nav-button" id="nav-button" aria-expanded="false" aria-haspopup="true" aria-controls="navigation" aria-label="<?= __('Open main navigation') ?>">
						<span class="line"></span>
						<span class="line"></span>
						<span class="line"></span>
					</button>
					<div>
						<?php
							wp_nav_menu([
								'theme_location' => 'primary',
								'container' => '',
								'container_class' => '',
								'menu_class' => '',
								'link_before' => '<span>',
		  						'link_after' => '</span>'
							]);
						?>
						<div class="social">
							<a href="https://github.com/jsaarine/fiesta-wordpress-starter" target="_blank" rel="noopener noreferrer" aria-label="GitHub">
								<svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg"><g fill="#FFF" fill-rule="evenodd"><path d="M19.963.33C8.939.33 0 9.268 0 20.293c0 8.82 5.72 16.303 13.652 18.943.998.185 1.364-.433 1.364-.96 0-.476-.019-2.049-.027-3.717-5.554 1.207-6.726-2.355-6.726-2.355-.908-2.308-2.216-2.921-2.216-2.921-1.812-1.24.136-1.214.136-1.214 2.005.14 3.06 2.057 3.06 2.057 1.78 3.052 4.67 2.17 5.81 1.66.179-1.29.696-2.171 1.267-2.67-4.434-.504-9.095-2.216-9.095-9.866 0-2.179.78-3.96 2.057-5.358-.208-.503-.891-2.533.193-5.283 0 0 1.677-.536 5.491 2.047 1.593-.443 3.3-.664 4.997-.672 1.696.008 3.406.23 5 .672 3.811-2.583 5.485-2.047 5.485-2.047 1.087 2.75.404 4.78.196 5.283 1.28 1.398 2.054 3.18 2.054 5.358 0 7.668-4.67 9.356-9.115 9.85.716.62 1.354 1.835 1.354 3.697 0 2.671-.023 4.821-.023 5.479 0 .531.36 1.153 1.371.958 7.928-2.643 13.64-10.123 13.64-18.94C39.926 9.267 30.989.33 19.964.33"/><path d="M7.561 28.993c-.044.1-.2.129-.342.06-.145-.065-.226-.2-.18-.3.044-.101.2-.13.345-.062.144.066.227.202.177.302M8.37 29.895c-.095.088-.282.047-.408-.093-.13-.139-.155-.325-.058-.414.098-.089.278-.047.409.092.13.14.156.325.057.415M9.157 31.044c-.123.086-.323.006-.446-.172s-.123-.39.002-.476c.124-.085.321-.008.447.168.122.18.122.393-.003.48M10.235 32.155c-.11.12-.342.088-.513-.076-.175-.161-.223-.39-.114-.51.111-.121.346-.087.518.076.173.16.226.39.109.51M11.723 32.8c-.049.156-.273.227-.5.16-.225-.068-.373-.25-.327-.408.047-.158.272-.232.5-.16.225.067.374.25.327.408M13.356 32.92c.006.164-.186.3-.423.304-.239.005-.432-.128-.435-.29 0-.166.188-.301.426-.306.238-.004.432.128.432.292M14.877 32.661c.028.16-.137.325-.373.37-.231.042-.446-.058-.475-.217-.029-.164.139-.33.37-.372.236-.04.448.056.478.219"/></g></svg>
							</a>
						</div>
					</div>
				</nav>
			</div>
		</header>
