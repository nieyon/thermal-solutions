<section class="fixed-header cnt-frame cnt-frame--1 bg--alabaster mobile">
	<div class="frm-title  mb-0">
		<h1>$MenuTitle</h1>
	</div>
	<div class="frm-cntnr width--100 without-tabs">
		<div class="frm-sub-title">
			<h3>$F6FrmSubTitle</h3>
		</div>
		<div class="frm-title">
			<h2>$F6FrmTitle</h2>
		</div>
		<div class="frm-holder">
			<form class="frm-form__holder width--100">
				<div class="frm-form__row">
					<input type="text" name="name" class="frm-form__input" required="" placeholder=" ">
					<span class="floating-label">Full Name</span>
				</div>
				<div class="frm-form__row">
					<input type="email" name="email" class="frm-form__input" required="" placeholder=" ">
					<span class="floating-label">E-mail Address</span>
				</div>
				<div class="frm-form__row">
					<input type="text" name="phoneNumber" class="frm-form__input" required="" placeholder=" ">
					<span class="floating-label">Phone Number (Optional)</span>
				</div>
				<div class="frm-form__row cntctfrm__animate-info-right">
					<textarea name="message" class="frm-form__input textarea" placeholder=" " ></textarea>
					<span class="floating-label">Message</span>
				</div>
				<div class="frm-form__row">
					<input type="submit" name="submit" class="submit btn" value="SEND">
				</div>
			</form>
			<% loop $HeaderFooter %>
			<div class="frm-details__holder width--100">
				<div class="item-col">
					<div class="detail-item">
						<div class="detail-title">
							<h3><i class="fas fa-map-marker-alt"></i>ADDRESS</h3>
						</div>
							<div class="frm-desc">
								<p>$Address</p>
							</div>
					</div>
					<div class="detail-item">
						<div class="detail-title">
							<h3><i class="fas fa-fax"></i>FAX NUMBER</h3>
						</div>
							<div class="frm-desc">
								<p>$FaxNumber</p>
							</div>
					</div>		
				</div>
				<div class="item-col">
					<div class="detail-item">
						<div class="detail-title">
							<h3><i class="fas fa-phone-alt"></i>TELEPHONE NUMBERS</h3>
						</div>
							<div class="frm-desc">
								<p>$TelephoneNumber1</p>
								<p>$TelephoneNumber2</p>
								<p>$TelephoneNumber3</p>
							</div>
					</div>
					
					<div class="detail-item">
						<div class="detail-title">
							<h3><i class="far fa-envelope"></i>E-MAIL ADDRESS</h3>
						</div>
						<div class="frm-desc">
							<p>$Email</p>
						</div>
					</div>
				</div>
			</div>			    
			<% end_loop %>
		</div>
	</div>
</section>