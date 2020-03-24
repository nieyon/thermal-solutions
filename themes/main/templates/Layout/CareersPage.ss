<section class="fixed-header car-frame car-frame--1 bg--white mobile">
	<div class="frm-title">
		<h1>$MenuTitle</h1>
	</div>
	<%-- tabs --%>
	<div class="frm-tabs-cntnr width--100">
		<div class="frm-tab width--90">
			<ul class="tab-list">
				<li class="tab-item align-c drpDwnTab">
					<a  class="tab-link" >click</a>
				</li>
				<% loop $CareersTab %>
				    <li class="tab-item align-c">
						<%-- <a class="tab-link">$TabTitle</a> --%>
						<a id="defaultOpenCareer" class="tab-link" onclick="openTabCareer('$TabTitle', this)">$TabTitle</a>
					</li>
				<% end_loop %>
			</ul>
		</div>
	</div>
	<% loop $CareersTab %>
	    <div id="$TabTitle" class="tab-content frm-cntnr width--50 with-tabs align-c">
			<div class="frm-sub-title">
				<h3>CAREER</h3>
			</div>
			<div class="frm-title">
				<h2>$TabTitle</h2>
				<div class="line bg--indigo"></div>
			</div>
			<div class="list-items align-l">
				<div class="list-title">
					<h3>Qualifications</h3>
				</div>
					$Qualifications
			</div>
		</div>
	<% end_loop %>
</section>
<section class="car-frame car-frame--2 bg--white">
	<div class="frm-cntnr width--100 aling-l frm-padding">
		<div class="frm-holder width--60">
			<div class="form-title">
				<h3>Apply for a job</h3>
			</div>
			<form class="frm-form__holder width--100" id="applyForm">
				<input type="" name="jobtitle" value="$CareerTitle" hidden="">
				<div class="frm-form__col">
					<div class="frm-form__row">
						<input type="text" name="name" class="frm-form__input" placeholder=" " required="">
						<span class="floating-label">Full Name</span>
					</div>
					<div class="frm-form__row">
						<input type="email" name="email" class="frm-form__input" placeholder=" " required="">
						<span class="floating-label">E-mail Address</span>
					</div>
					<div class="frm-form__row">
						<input type="text" name="contactNumber" class="frm-form__input" placeholder=" " required="">
						<span class="floating-label">Contact Number</span>
					</div>
					<div class="frm-form__row">
						<div class="frm-select">
							<select>
								<option>Highest Educational Attainment</option>
							</select>
						</div>
					</div>
				</div>
				<div class="frm-form__col">
					<div class="frm-form__row frm-form__file">
						<div class="frm-form__input">
							<label id="file-selected" for="fileupload" class="custom-file-upload">Upload here</label>
						</div>
						<input type="file" id="fileupload" class="fileuploadBtn" name="file" required hidden>
						<input type="hidden" id="file-image" name="resume" value="" required="" />
			 		</div>
					<%-- <div class="frm-form__row">

						<input type="file" name="file" class="frm-form__input file" placeholder=" " required="">
					</div> --%>
					<div class="frm-form__row cntctfrm__animate-info-right">
						<textarea name="message" class="frm-form__input textarea" placeholder=" "></textarea>
						<span class="floating-label">Message</span>
					</div>

					<%-- <div class="recaptcha-hldr m-margin-b">
						<div class="g-recaptcha" data-sitekey="6Le9iOMUAAAAAMMC7YppddnxmM_BOsCGRljP8ZPp"></div>
					</div> --%>

				</div>
				<div class="frm-form__row">
				 	<input type="hidden" name="postFlag" value="1">
					<input id="applyBtn" type="submit" name="submit" class="submit btn" value="SUBMIT RESUME">
				</div>
			</form>
		</div>
	</div>
</section>
<script>
function openTabCareer(pageName,elmnt) {
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
document.getElementById("defaultOpenCareer").click();
</script>