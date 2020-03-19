<section class="fixed-header car-frame car-frame--1 bg--white mobile">
	<div class="frm-title">
		<h1>$MenuTitle</h1>
	</div>
	<%-- tabs --%>
	<div class="frm-tabs-cntnr width--100">
		<div class="frm-tab width--90">
			<ul class="tab-list">
				<% loop $CareersTab %>
				    <li class="tab-item align-c">
						<a class="tab-link">$TabTitle</a>
					</li>
				<% end_loop %>
			</ul>
		</div>
	</div>
	<% loop $CareersTab %>
	    <div class="frm-cntnr width--50 with-tabs align-c">
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
			<form class="frm-form__holder width--100">
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
					<div class="frm-form__row">
						<input type="file" name="file" class="frm-form__input file" placeholder=" " required="">
					</div>
					<div class="frm-form__row cntctfrm__animate-info-right">
						<textarea name="message" class="frm-form__input textarea" placeholder=" "></textarea>
						<span class="floating-label">Message</span>
					</div>
				</div>
				<div class="frm-form__row">
					<input type="submit" name="submit" class="submit btn" value="SUBMIT RESUME">
				</div>
			</form>
		</div>
	</div>
</section>