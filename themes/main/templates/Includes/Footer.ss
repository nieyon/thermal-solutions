<% if ClassName != 'Page' %>
<div class="ftr-frame width--100 bg--indigo">
	<div class="frm-cntnr">
		<div class="nav-list__holder">
			<div class="holder-title link-btn">
				<h3>LINKS<i class="open-link fas fa-angle-down"></i><i class="close-link fas fa-angle-up"></i></h3>
			</div>
			<ul class="nav-list nav-list__ftr">
				<% loop $Menu(1) %>
					<li class="nav-item"><a class="$LinkingMode nav-link" href="$Link" title="Go to the $Title page">$MenuTitle</a></li>
				<% end_loop %>
			</ul>
		</div>
		<% loop $HeaderFooter %>
		<div class="details__holder">
			<div class="holder-title contact-btn">
				<h3>CONTACT US<i class="open-contact fas fa-angle-down"></i><i class="close-contact fas fa-angle-up"></i></h3>
			</div>
		
				<div class="details-list details-list__ftr">
					<div class="item-col col--1">						
					    <div class="frm-desc">
							<p><i class="fas fa-map-marker-alt"></i>$Address</p>
						</div>						
					</div>
					<div class="item-col col--2">						
						<div class="frm-desc">
							<p><i class="fas fa-phone-alt"></i>$TelephoneNumber1</p>
								<p>$TelephoneNumber2</p>
								<p>$TelephoneNumber3</p>
						</div>    						
					</div>
					<div class="item-col col--3">
						<div class="frm-desc">							
							<p><i class="fas fa-fax"></i>$FaxNumber</p>
							<p><i class="far fa-envelope"></i>$Email</p>
						</div>
					</div>
				</div>  
		</div>
		<% end_loop %>
	</div>
</div>
<div class="ftr-frame__copyright frm-desc bg--apple">
	<p>Copyright &copy; $SiteConfig.Title All Rights Reserved</p>
</div>
<% end_if %>