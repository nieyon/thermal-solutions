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
					<li id="$MenuTitle" class="nav-item nav-item__listener">
						<a class="$LinkingMode nav-link" href="$Link" title="Go to the $Title page">$MenuTitle</a> 

						<% if $AboutTab || $CareersTab %>
							<a class="$LinkingMode nav-link--mobile width--100" href="#$MenuTitle" title="Go to the $Title page">$MenuTitle<i class="fas fa-angle-down drpdwnBtn"></i></a>
						<% else %>
							<a class="$LinkingMode nav-link--mobile" href="$Link" title="Go to the $Title page">$MenuTitle</a>    
						<% end_if %>
						
						<ul class="nav-list--tab">
							<% loop $AboutTab %>
								<li class="nav-item--tab">
									<a href="#" class="nav-link--tab">$TabTitle</a>
								</li>
							<% end_loop %>
						</ul>

						<ul class="nav-list--tab">
							<% loop $CareersTab %>
								<li class="nav-item--tab">
									<a href="#" class="nav-link--tab">$TabTitle</a>
								</li>
							<% end_loop %>
						</ul>
					</li>
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