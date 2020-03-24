<section class="fixed-header abt-frame abt-frame--1 bg--alabaster mobile">
	<div class="frm-title mb-0">
		<h1>$MenuTitle</h1>
	</div>
	<%-- tabs --%>
	<div class="frm-tabs-cntnr width--100">
		<div class="frm-tab width--90">
			<ul class="tab-list">
				<li class="tab-item align-c tabBtn">
					<a  class="tab-link" >click<i class="fas fa-angle-down drpdwnBtn"></i></a>
				</li>
				<% loop $AboutTab %>
				    <li class="tab-item align-c">
						<a id="defaultOpenAbout" class="tab-link" onclick="openTabAbout('$TabTitle', this)">$TabTitle</a>
					</li>
				<% end_loop %>
			</ul>
		</div>
	</div>
	<div class="frm-cntnr width--90 with-tabs">
		<div class="frm-tab__holder width--100">
		<%-- tab content --%>
			<% loop $AboutTab %>
			    <div id="$TabTitle" class="tab-content width--60 align-c frm-padding">
					<div class="frm-sub-title animate-up1">
						<h3>ABOUT US</h3>
					</div>
					<div class="frm-title animate-up">
						<h2>$TabTitle</h2>
						<div class="line bg--indigo animate-right"></div>
					</div>
					    <div class="frm-desc align-l animate-up1">
							$Description
						</div>
				</div>
			<% end_loop %>
				<div class="accomplishments align-l animate-up1">
					<% loop $HeaderFooter %>
						<% loop $Accomplishments %>
						    <div class="accom-item">
								<div class="picture animate-right">
									<img src="$Photo.URL" alt="">
								</div>
								<div class="year">
									<h4>$AccomplishmentYear</h4>
								</div>
								<div class="frm-desc">
									<p>$AccomplishmentDescription</p>
								</div>
							</div>
						<% end_loop %>
					<% end_loop %>
				</div>
		</div>
	</div>
</section>

<script>
function openTabAbout(pageName,elmnt) {
  let tabcontent = document.getElementsByClassName("tab-content");
  for (let i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  document.getElementById(pageName).style.display = "block";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpenAbout").click();
</script>