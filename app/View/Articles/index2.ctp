<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">

	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimum-scale=1, user-scalable=no">
	<meta name="mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">

	<link rel="apple-touch-icon" href="apple-touch-icon.png">

	<title>HackerNews7</title>

	<link rel="stylesheet" href="css/framework7.css">
	<link rel="stylesheet" href="css/hn7.css">
</head>

<body>
	<!-- Status bar overlay for fullscreen mode -->
	<div class="statusbar-overlay"></div>

	<!-- views -->
	<div class="views">
		<!-- Put panels-overlay and left-panel with view inside of views-->
		<!-- Panels overlay-->
		<div class="panel-overlay"></div>
		<!-- Left panel with reveal effect-->
		<div class="panel panel-left panel-cover">
			<!-- Left view-->
			<div class="view view-left navbar-through">
				<div class="navbar theme-white">
					<div class="navbar-inner">
						<div class="left"><a href="#" class="link icon-only refresh-link refresh-home"><i class="icon icon-refresh"></i></a>
						</div>
						<div class="center sliding">
							<span class="mobile-title">HackerNews7</span>
							<span class="tablet-title">Top Stories</span>
						</div>
					</div>
				</div>
				<div class="pages">
					<div class="page" data-page="index">
						<!-- Search bar -->
						<form class="searchbar" data-search-list=".list-block-search" data-search-in=".item-title" data-searchbar-found=".searchbar-found" data-searchbar-not-found=".searchbar-not-found">
							<div class="searchbar-input">
								<input type="search" placeholder="Search">
								<a href="#" class="searchbar-clear"></a>
							</div>
							<a href="#" class="searchbar-cancel">Cancel</a>
						</form>
						<div class="page-content pull-to-refresh-content">
							<div class="pull-to-refresh-layer">
								<div class="preloader"></div>
								<div class="pull-to-refresh-arrow"></div>
							</div>

							<!-- Search bar overlay-->
							<div class="searchbar-overlay"></div>

							<!-- no result -->
							<div class="content-block searchbar-not-found">
								Nothing found
							</div>

							<div class="list-block media-list stories-list list-block-search searchbar-found"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- main view -->
		<div class="view view-main navbar-through">
			<div class="navbar theme-white">
				<div class="navbar-inner">
					<div class="left">
						<a href="#" class="link open-panel icon-only">
							<i class="icon icon-bars"></i>
						</a>
					</div>
					<div class="center">HackerNews7</div>
				</div>
			</div>
			<div class="pages">
				<div class="page" data-page="main">
					<div class="choose-story">
						<a href="#" class="open-panel">Choose Story</a>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- template7 templates -->
	<script type="text/template7" id="storiesTemplate">
		<ul>
		{{#each this}}
			<li class="swipeout">
				<div class="swipeout-content">
					<a href="item.html?id={{id}}" data-contextName="stories.{{@index}}" class="item-content item-link">
						<div class="item-inner">
							<div class="item-title-row">
								<div class="item-title">{{title}}</div>
								<div class="item-after"><span class="badge">{{array_length kids}}</span></div>
                        	</div>
							<div class="item-subtitle">{{domain}}</div>
				        	<div class="item-text">{{score}} points by {{by}} {{time_ago time}}</div>
						</div>
					</a>
				</div>
				<div class="swipeout-actions-left">
		        	<a href="{{url}}" target="_blank" class="external"><i class="icon icon-watch"></i></a>
		      	</div >
			</li>
		{{/each}}
		</ul>
	</script>
	<script type="text/template7" id="commentsTemplate">
		{{#each this}}
			<div class="message message-received message-with-tail message-last">
				<div class="message-name"><span class="comment-name">{{by}}</span>, <span class="comment-time">{{time_ago time}}</span></div>
				<div class="message-text">{{text}}</div>
			</div>
			{{#if kids}}
			<div class="message-kids">
				<a href="#" data-context="{{kids}}"><i></i> show {{pluralize kids single="reply" multiple="replies"}}</a>
			</div>
			{{/if}}
		{{/each}}
	</script>
	<script type="text/template7" id="repliesTemplate">
		{{#each this}}
			<div class="message message-received message-with-tail message-last">
				<div class="message-name"><span class="comment-name">{{by}}</span>, <span class="comment-time">{{time_ago time}}</span></div>
				<div class="message-text">{{text}}</div>
			</div>
			{{#if kids}}
				<div class="message-kids">
					<a href="#" data-context="{{kids}}"><i></i> show {{pluralize kids single="reply" multiple="replies"}}</a>
				</div>
			{{/if}}
		{{/each}}
	</script>

	<!-- libraries -->
	<script src="lib/moment.js"></script>
	<script>
		window.moment = (typeof moment !== 'undefined') ? moment : require('moment');
	</script>
	<script src="lib/framework7.js"></script>
	<script src="js/hnapi.js"></script>
	<script src="js/hn7.js"></script>
</body>

</html>

