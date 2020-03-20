<section class="fixed-header exp-frame exp-frame--1 bg--alabaster mobile">
	<div class="frm-title mb-0">
	 	<h1>$MenuTitle</h1>
	 </div>
	 <%-- tabs --%>
	<div class="frm-tabs-cntnr width--100">
		<div class="frm-tab width--90">
			<ul class="tab-list">
				<% loop $Menu(2) %>
				    <li class="tab-item align-c">
						<a href="$Link" class="tab-link currentTab">$MenuTitle</a>
					</li>
				<% end_loop %>
			</ul>
		</div>
	</div>
	<div class="frm-cntnr width--90 with-tabs">
		<div id="accreditations" class="frm-tab__holder width--100 frm-padding">
			<div class="frm-content width--100">
				<% loop $ExpertiseAchievementsTab %>
				    <div class="acrdt-items align-c">
						<div class="acrdt-image">
							<img src="$Photo.URL" alt="">
						</div>
						<div class="frm-desc align-l">
							<p>$Description</p>
						</div>
					</div>
				<% end_loop %>
			</div>
		</div>
	</div>
</section>