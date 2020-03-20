<section class="fixed-header subprd-frame subprd-frame--1 bg--alabaster mobile">
	<div class="frm-title mb-0">
		<h1>$MenuTitle</h1>
	</div>
	<%-- tabs --%>
	<div class="frm-tabs-cntnr width--100">
		<div class="frm-tab width--90">
			<ul class="tab-list">
			<% loop $Menu(2) %>
				<li class="tab-item align-c">
					<a href="$Link" class="tab-link currentTab">$Title</a>
				</li>
			<% end_loop %>
			</ul>
		</div>
	</div>
	<div class="frm-cntnr width--90">
		<%-- tab 1 Who we are --%>
		<div id="energySolutions" class="frm-tab__holder width--100">
			<div class="tab-content width--50 align-c frm-padding">
				<div class="frm-sub-title">
					<h3>$Title</h3>
				</div>
				<div class="frm-title">
					<h2>$ContentTitle</h2>
					<div class="sub-title">
						<h2>$ContentSubTitle</h2>
					</div>
					<div class="line bg--indigo"></div>
				</div>
				<div class="content-list align-l">
					<div class="list-items">
						<div class="list-title">
							<h3>$ContentItemTitle1</h3>
						</div>
						$ContentItemDesc1
					</div>
					<div class="list-items">
						<div class="list-title">
							<h3>$ContentItemTitle2</h3>
						</div>
						$ContentItemDesc2
					</div>
				</div>
				<div class="frm-desc align-l">
					<p>$ProSerDesc</p>
				</div>
			</div>
		</div>
	</div>
</section>