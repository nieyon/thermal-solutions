<%-- frame 1 --%>
<section class="home-header hm-frame hm-frame--1">
	<div class="frm-cntnr width--90">
		<div class="frm-content width--40">
			    <div class="frm-title clr--indigo">
					<h1>$F1FrmTitle</h1>
					<div class="line bg--indigo align-l"></div>
				</div>
			<div class="frm-desc">
				$F1FrmDesc
			</div>
			<div class="frm-btn">
				<button class="btn">$F1BtnText</button>
			</div>
		</div>
		<div class="frm-header-img">
			<div class="header-img width--100">
				<img src="$F1FrmPicture.URL" alt="">

				<div class="img-dividers">
				<div class="divider--1"></div>
				<div class="divider--2 animate-up"></div>
				<div class="divider--3"></div>
			</div>
			</div>
		</div>
	</div>
	<div class="pattern--1">
		<img src="$ThemeDir/images/home-page/frame1/pattern--1.png" alt="">
	</div>
	<div class="pattern--2">
		<img src="$ThemeDir/images/home-page/frame1/pattern--2.png" alt="">
	</div>
</section>
<%-- frame 2 --%>
<section class="hm-frame hm-frame--2 frm-padding bg--alabaster">
	<div class="frm-cntnr width--90 align-c">
		<div class="frm-sub-title">
			<h3>$F2FrmSubTitle</h3>
		</div>
		<div class="frm-title">
			<h2>$F2FrmTitle</h2>
			<div class="line bg--indigo"></div>
		</div>
		<div class="frm-desc">
			$F2FrmDesc
		</div>
		<div class="accomplishments align-l">
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
		</div>
		<div class="frm-btn">
			<button class="btn align-c">$F2BtnText</button>
		</div>
	</div>
	<div class="pattern--1">
		<img src="$ThemeDir/images/home-page/frame2/pattern--1.png" alt="">
	</div>
	<div class="pattern--2">
		<img src="$ThemeDir/images/home-page/frame2/pattern--2.png" alt="">
	</div>
</section>
<%-- frame 3 --%>
<section class="hm-frame hm-frame--3">
	<div class="frm-cntnr width--100">
		<div class="project-slider width--50 slider">
			<% loop $Slide %>
			    <div class="item-slider">
					<img src="$Photo.URL" alt="">
					<div class="slider-title">
						<h3>$SlideTitle</h3>
						<div class="line bg--apple"></div>
					</div>
				</div>
			<% end_loop %>
		</div>
		<div class="project-content width--50 frm-padding bg--indigo">
			<div class="content-item width--80">
				<div class="frm-sub-title">
					<h3>$F3FrmSubTitle</h3>
				</div>
				<div class="frm-title">
					<h2>$F3FrmTitle</h2>
					<div class="line bg--white"></div>
				</div>
				<div class="frm-desc">
					$F3FrmDesc
				</div>
				<div class="frm-btn">
					<a href="" class="btn">$F3BtnText</a>
				</div>
			</div>
		</div>
	</div>
</section>
<%-- frame 4 --%>
<section class="hm-frame hm-frame--4 bg--alabaster">
	<div class="frm-cntnr width--100">
		<div class="frm-bckgrnds size-cover bring-back width--100" style="background-image: url('$Themedir/images/home-page/frame4/bg.png')"></div>
		<div class="frm-content width--50 align-c">
			<div class="frm-sub-title">
				<h3>$F4FrmSubTitle</h3>
			</div>
			<div class="frm-title">
				<h2>$F4FrmTitle</h2>
				<div class="line bg--indigo"></div>
			</div>
			<div class="frm-desc">
				$F4FrmDesc
			</div>
			<div class="frm-btn">
				<a href="" class="btn">$F4BtnText</a>
			</div>
		</div>
		<div class="services width--70 align-c">
			<% loop $ProductsAndServicesHome %>
			   <div class="service-item">
					<div class="service-img">
						<img src="$Photo.URL" alt="">
						<div class="content-item">
							<div class="frm-sub-title">
								<h3>$ItemTitle</h3>
								<div class="line bg--white"></div>
							</div>
							<div class="frm-desc">
								<p>$Description</p>
							</div>
						</div>
					</div>
					<div class="service-title">
						<h4>$ItemTitle</h4>
					</div>
				</div>
			<% end_loop %>
		</div>
	</div>
</section>
<%-- frame 5 --%>
<section class="hm-frame hm-frame--5 bg--alabaster">
	<div class="frm-cntnr width--100">
		<div class="image-container">
			<div class="item">
				<div class="box"></div>
					<img src="$ThemeDir/images/home-page/frame5/01.png" alt="">
				<div class="line"></div>
			</div>
		</div>
		<div class="frm-content bg--indigo">
			<div class="content-item width--50">
				<div class="frm-sub-title">
					<h3>$F4frmSubTitle</h3>
				</div>
				<div class="frm-title">
					<h2>$F5FrmTitle</h2>
					<div class="line bg--white"></div>
				</div>
				<div class="frm-desc">
					$F5FrmDesc
				</div>
				<div class="frm-btn">
					<a href="" class="btn">$F5BtnText</a>
				</div>
			</div>
		</div>
	</div>
	<div class="pattern--1">
		<img src="$ThemeDir/images/home-page/frame5/pattern--1.png" alt="">
	</div>
</section>
<%-- frame 6 --%>
<section class="hm-frame hm-frame--6">
	<div class="frm-cntnr width--100">
		<div class="frm-sub-title">
			<h3>$F6FrmSubTitle</h3>
		</div>
		<div class="frm-title">
			<h2>$F6FrmTitle</h2>
		</div>
		<div class="frm-holder">
			<form id="cntctForm" method="post" class="frm-form__holder width--100">
				<div class="frm-form__row">
					<input type="text" name="fname" class="frm-form__input" required="" placeholder=" ">
					<span class="floating-label">Full Name</span>
				</div>
				<div class="frm-form__row">
					<input type="email" name="email" class="frm-form__input" required="" placeholder=" ">
					<span class="floating-label">E-mail Address</span>
				</div>
				<div class="frm-form__row">
					<input type="text" name="phonenumber" class="frm-form__input" required="" placeholder=" ">
					<span class="floating-label">Phone Number (Optional)</span>
				</div>
				<div class="frm-form__row cntctfrm__animate-info-right">
					<textarea name="message" class="frm-form__input textarea" placeholder=" " ></textarea>
					<span class="floating-label">Message</span>
				</div>
				<div class="frm-form__row">
					<input type="hidden" name="postFlag" value="1">
			    	<p class="btn" id="cntctBtn">Send</p>
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