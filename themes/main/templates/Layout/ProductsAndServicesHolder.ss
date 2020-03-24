<section class=" fixed-header prd-frame prd-frame--1 bg--alabaster mobile">
	<div class="frm-title mb-0">
		<h1>$MenuTitle</h1>
	</div>
	<div class="frm-cntnr width--55 frm-padding without-tabs">
		<% if $ProSerDesc %>
		    <div class="frm-desc">
				$ProSerDesc
			</div>
		<% end_if %>
		<div class="service-items">
			<% loop $Children %>
				<a href="$Link">
					<div class="service-item">
						<div class="service-image">
							<img src="$ProPhoto.URL" alt="">
						</div>
						<div class="service-title">
							<h3>$Title</h3>
						</div>
					</div>
				</a>
			<% end_loop %>
		</div>
	</div>
</section>