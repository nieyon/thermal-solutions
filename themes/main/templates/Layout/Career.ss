<section class="fixed-header car-frame car-frame--1 bg--white mobile">
	<%-- <div class="frm-title">
		<h1>$MenuTitle</h1>
	</div> --%>
	<%-- tabs --%>
	<div class="frm-tabs-cntnr width--100">
		<div class="frm-tab width--90">
			<ul class="tab-list">
				<%-- <li class="tab-item align-c tabBtn">
					<a  class="tab-link" >click<i class="fas fa-angle-down drpdwnBtn"></i></a>
				</li> --%>
				<% loop $Parent.Children %>
				    <li class="tab-item align-c">
						<%-- <a class="tab-link">$TabTitle</a> --%>
						<%-- <a id="defaultOpenCareer" class="tab-link" onclick="openTabCareer('$TabTitle', this)">$TabTitle</a> --%>
						<a class="tab-link <% if isCurrent %>active<% end_if %>" href="$Link">$MenuTitle</a>
					</li>
				<% end_loop %>
			</ul>
		</div>
	</div>
	    <div id="$TabTitle" class="tab-content frm-cntnr width--50 with-tabs align-c">
			<div class="frm-sub-title animate-up1">
				<h3>$Parent.MenuTitle</h3>
			</div>
			<div class="frm-title animate-up1">
				<h2>$TabTitle</h2>
				<div class="line bg--indigo animate-right"></div>
			</div>
			<div class="list-items align-l animate-up1">
				<div class="list-title">
					<h3>Qualifications</h3>
				</div>
					$Qualifications
			</div>
		</div>
</section>
<section class="car-frame car-frame--2 bg--white">
	<div class="frm-cntnr width--100 aling-l frm-padding">
		<div class="frm-holder width--60 animate-up1">
			<div class="form-title">
				<h3>Apply for a job</h3>
			</div>
			<form id="QuotationForm" method="post" class="frm-form__holder width--100">
				<div class="frm-form__row">
					<% loop $CareersTab %>
					    <input type="hidden" name="jobtitle" class="frm-form__input" placeholder=" " required="" value="$TabTitle">
					<% end_loop %>
					</div>
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
						<input type="text" name="mobile" class="frm-form__input" placeholder=" " required="">
						<span class="floating-label">Contact Number</span>
					</div>
					<div class="frm-form__row">
						<div class="frm-select">
							<select name="attaintment" required="">
								<option value="">Highest Educational Attainment</option>
								<option value="College Graduate">College Graduate</option>
								<option value="High School Graduate">High School Graduate</option>
							</select>
						</div>
					</div>
				</div>
				<div class="frm-form__col">
					<div class="frm-form__row">
						<input id="file-selected" type="file" name="resume" class="frm-form__input file" placeholder=" " required="">
						<label for="resume">Choose File</label>
					</div>
					<div class="frm-form__row cntctfrm__animate-info-right">
						<textarea name="intent" class="frm-form__input textarea" placeholder=" " required=""></textarea>
						<span class="floating-label">Message</span>
					</div>

					<%-- <div class="recaptcha-hldr m-margin-b">
						<div class="g-recaptcha" data-sitekey="6Le9iOMUAAAAAMMC7YppddnxmM_BOsCGRljP8ZPp"></div>
					</div> --%>

				</div>
				<div class="frm-form__row">
					<input type="hidden" name="postFlag" value="1">
			    	<p class="btn" id="QuotationBtn">Submit Resume</p>
				</div>
			</form>
		</div>
	</div>
</section>