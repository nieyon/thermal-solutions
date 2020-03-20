<% if ClassName != 'Page' %>
<div class="hdr-frame width--100 nav-srolled">
	<div class="hdr-cntnr width--100">
		<nav>
			<div class="hdr-frm__logo">
				<% loop $HeaderFooter %>
				    <div class="img-logo">
						<a href="
						$BaseHref"><img src="$HeaderLogo.URL" alt=""></a>
					</div>
				<% end_loop %>
			</div>
			<div class="menu-btn">
				<div class="menu-bar width--100 bg--indigo"></div>
			</div>
			<ul class="nav-list">
				<% loop $Menu(1) %>
					<li class="nav-item"><a class="$LinkingMode nav-link cuurent" href="$Link" title="Go to the $Title page">$MenuTitle</a>
					</li>

					<ul class="nav-list--tab">
						<% loop $AboutTab %>
							<li class="nav-item--tab">
								<a href="$Link" class="nav-link--tab">$TabTitle</a>
							</li>
						<% end_loop %>
					</ul>

					<ul class="nav-list--tab">
						<% loop $CareersTab %>
							<li class="nav-item--tab">
								<a href="$Link" class="nav-link--tab">$TabTitle</a>
							</li>
						<% end_loop %>
					</ul>
				<% end_loop %>
			</ul>
		</nav>
	</div>
</div>
<% end_if %>
<% if ClassName == 'Page' %>
<header class="admin-nav">
	<a href="$BaseHref">
		<% loop HeaderFooter %>
		<div class="hdr-frame__logo">
			<img src="$HeaderLogo.URL" class="img-fit">
		</div>
		<% end_loop %>
	</a>
</header>
<% end_if %>