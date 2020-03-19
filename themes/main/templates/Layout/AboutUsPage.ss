<section class="fixed-header abt-frame abt-frame--1 bg--alabaster mobile">
	<div class="frm-title mb-0">
		<h1>$MenuTitle</h1>
	</div>
	<%-- tabs --%>
	<div class="frm-tabs-cntnr width--100">
		<div class="frm-tab width--90">
			<ul class="tab-list">
				<% loop $AboutTab %>
				    <li class="tab-item align-c">
						<%-- <a class="tab-link">$TabTitle</a> --%>
						<a id="defaultOpen" class="tab-link active" onclick="openPage('$TabTitle', this)">$TabTitle</a>
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
					<div class="frm-sub-title">
						<h3>$MenuTitle</h3>
					</div>
					<div class="frm-title">
						<h2>$TabTitle</h2>
						<div class="line bg--indigo"></div>
					</div>
					    <div class="frm-desc align-l">
							$Description
						</div>
				<%-- 	<div class="accomplishments align-l">
						<% loop $HeaderFooter %>
							<% loop $Accomplishments %>
							    <div class="accom-item">
									<div class="picture">
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
					</div> --%>
				</div>
			<% end_loop %>
		</div>
	</div>
</section>

<script>
function openPage(pageName,elmnt) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tab-content");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tab-link");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].style.backgroundColor = "";
  }
  document.getElementById(pageName).style.display = "block";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>