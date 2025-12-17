<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>QuickBooks Enterprise Issue Resolution for Businesses | Quick Accounting Services</title>

	<meta name="description" content="We help businesses diagnose and resolve QuickBooks Enterprise issues through structured troubleshooting and best-practice fixes. Independent third-party QuickBooks consultants." />
	<meta name="keywords" content="QuickBooks Enterprise issues, QuickBooks Enterprise troubleshooting, QuickBooks Enterprise consulting, QuickBooks Enterprise problems, QuickBooks Enterprise error resolution" />

	<link rel="canonical" href="https://quickaccountingservices.com/quickbooks/enterprise-issue-resolution" />

	<meta name="robots" content="index, follow" />

	<!-- Favicon -->
	<link rel="icon" id="favicon" href="{{ asset('images/q.ico') }}" type="image/x-icon">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="{{ asset("app.css") }}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<style>
		/* @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap'); */
		/* @import url('https://fonts.googleapis.com/css2?family=Barlow+Condensed:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap'); */
		@import url('https://fonts.googleapis.com/css2?family=Outfit:wght@100..900&display=swap');

		body {
			font-family: "Outfit", sans-serif;
		}

		h1 {
			font-size: 3.1rem;
		}

		p {
			font-weight: 500;
			color: #616161 !important;
			font-size: 15px;
		}

		ul > li,
		ul > li > span {
			font-weight: 500;
			color: #616161 !important;
			font-size: 15px;
		}

		ul > li > span {
			margin-left: 8px;
		}

		p.header-font {
			color: #212121 !important;
		}

		.card-panel.step-card {
			box-shadow: none;
			position: relative;
			border-radius: 8px;
			cursor: pointer;
			margin-bottom: 2rem;
		}

		.card-panel.step-card:hover {
			background-color: #eeeeee;
		}

		.step-card::before {
			position: absolute;
			content: "\F4B6";
			font-family: "Material Symbols Rounded";
			font-size: 1.5rem;
			left: 50%;
			bottom: -32px;
			transform: translateX(-50%);
			color: #1f7a6b;
		}

		.step-wrapper .step-card:last-child:before {
			display: none;
			margin-bottom: 0;
		}

		input[type="text"]:focus,
		input[type="email"]:focus {
			border-bottom-color: #1f7a6b !important;
			box-shadow: 0 1px 0 0 #1f7a6b !important;
		}

		.input-field > label {
			letter-spacing: normal;
		}

		input[type="text"] ~ label.active,
		input[type="email"] ~ label.active {
			color: #1f7a6b !important;
		}

		p.header-points {
			min-height: 45px;
		}

		@media screen and (max-width: 480px) {
			h1.header-font {
				font-size: 2.5rem;
			}

			p.header-points {
				font-size: 13px;
			}

			.modal#contact-us {
				width: 95% !important;
				height: fit-content !important;
				max-height: 100vh !important;
				/* bottom: 0 !important; */
			}
		}
	</style>
</head>
<body>
	<nav class="service-nav">
		<div class="nav-wrapper container">
			<a href="{{ url("") }}" class="brand-logo">
				<img src="{{ asset("images/logo/logo-q.png") }}" alt="{{ env("COMPANY") }}">
				<span class="hide-on-small-only header-font">{{ env("COMPANY") }}</span>
				<span class="hide-on-med-and-up header-font">QAS</span>
			</a>

			<a href="#contact-us" class="modal-trigger right btn hide-on-large-only" style="background-color: #1f7a6b; margin-top: 10px">
				<i class="material-symbols-rounded white-text" style="height: 36px; line-height: 36px">phone</i>
			</a>
			<ul class="right hide-on-med-and-down">
				<li>
					<a href="#contact-us" class="btn modal-trigger" style="background-color: #00254a !important; color: white !important; letter-spacing: 1px">
						<i class="material-symbols-rounded left white-text" style="height: 36px; line-height: 36px">phone</i>
						Talk to a QuickBooks Enterprise consultant
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Modal (start) -->
	<div class="modal" id="contact-us" style="width: 500px">
		<div class="modal-content center-align white">
			<h5 class="header-font">Contact a QuickBooks Enterprise Consultant</h5>
			<p>If you'd like to speak with someone about a QuickBooks Enterprise issue, you can call us directly or request a callback using the form on this page.</p>

			<img src="{{ url("images/image.png") }}" alt="" class="responsive-img">

			<p>
				<a href="tel:{{ env("PHONE") }}" class="btn-large full-width" style="background-color: #1f7a6b; font-family: 'RadionB', sans-serif; color: white !important; line-height: 52px">{{ env("PHONE") }}</a>
			</p>

			<p class="text-sm">This connects you with a QuickBooks Enterprise consultant.</p>
		</div>
	</div>
	<!-- Modal (end) -->


	<!-- Header (start) -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l6 center-on-small-only">
					<h1 class="header-font">QuickBooks Enterprise Issue Resolution for Businesses</h1>
					<p class="grey-text text-darken-2">We help businesses diagnose and resolve QuickBooks Enterprise problems through structured troubleshooting and best-practice fixes.</p>

					<p class="header-points" style="margin-top: 2rem;">
						<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">hard_drive_2</i>
						Experience with large QuickBooks Enterprise files
					</p>
					<p class="header-points">
						<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">supervisor_account</i>
						Multi-user & server-based environments
					</p>
					<p class="header-points">
						<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">sync_saved_locally</i>
						Data-safe troubleshooting approach
					</p>
					<p class="header-points">
						<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">contact_support</i>
						Third-party QuickBooks consultants
					</p>

					<h5 class="header-font grey-text text-darken-4 hide-on-small-only">
						Prefer to speak to someone?
						<br>
						Call {{ env("PHONE") }}
					</h5>

					<br>

					<a href="tel:{{ env("PHONE") }}" class="btn-large full-width hide-on-med-and-up header-font" style="background-color: #1f7a6b; color: white !important; line-height: 52px;">Talk to a Consultant</a>

					<p class="text-xs">Independent third-party QuickBooks service. Not affiliated with Intuit.</p>
				</div>

				<div class="col m6 l5 offset-l1 hide-on-small-only">
					<div class="card-panel" style="border: 1px solid #e0e0e0">
						<p class="header-font">Discuss Your QuickBooks Enterprise Issue</p>
						<form action="{{ url("contact-us/quickbooks-callback") }}" method="POST" class="row" autocomplete="off" onsubmit="submitForm(event)">
							@csrf
							<div class="input-field col s12" style="min-height: 40px">
								<div class="error-card hide" id="error-container">
									<i class="material-symbols-rounded">error</i>
									<span class="text-base"></span>
								</div>

								<div class="success-card hide" id="success-container">
									<i class="material-symbols-rounded">check_circle</i>
									<span class="text-base"></span>
								</div>
							</div>
							<div class="input-field col s12">
								<input type="text" name="name" id="name" class="capitalize">
								<label for="name">First & last name</label>
							</div>

							<div class="input-field col s12">
								<input type="email" name="email" id="email" class="lowercase">
								<label for="email">Email address</label>
							</div>

							<div class="input-field col s12">
								<input type="text" name="phone" id="phone">
								<label for="phone">Call back number (Optional)</label>
							</div>

							<div class="input-field col s12">
								<input type="text" name="issue" id="issue">
								<label for="issue">Brief description of the issue</label>
							</div>

							<div class="input-field col s12">
								<button class="btn-large full-width header-font text-base" name="submit-btn" style="background-color: #1f7a6b; color: white !important; line-height: 0;">Request a Callback</button>
							</div>
						</form>
					</div>
					<p class="center-align text-xs" style="letter-spacing: 0">We respect your privacy. Your information is used only to respond to your request.</p>
				</div>
			</div>
		</div>
	</section>
	<!-- Header (end) -->
	

	<div class="container">
		<div class="divider"></div>
	</div>

	<section>
		<div class="container"></div>
	</section>

	<!-- Common Issues With QuickBooks Enterprise (start) -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l6">
					<h4 class="header-font">Common QuickBooks Enterprise Issues We Help Resolve</h4>
					<br>
					<p class="header-font grey-text text-darken-4">01. Company file won't open or freezes</p>
					<p>When a QuickBooks Enterprise company file fails to open or becomes unresponsive, it often points to file-level or environment-related issues rather than a single error. This can occur after updates, system interruptions, or as the file grows over time.</p>
					<p>Common situations include:</p>
					<ul>
						<li>
							&bull; 
							<span>Freezing during the loading screen</span>
						</li>
						<li>
							&bull; 
							<span>File opening very slowly or not at all</span>
						</li>
						<li>
							&bull; 
							<span>QuickBooks closing when accessing the file</span>
						</li>
					</ul>
					<p>Our team helps review the company file structure, identify underlying causes, and apply safe troubleshooting steps to restore stable access.</p>

					<div class="divider" style="margin-block: 2rem"></div>

					<p class="header-font grey-text text-darken-4">02. Multi-User Mode Issues (H-Series Errors)</p>
					<p>QuickBooks Enterprise is frequently used in multi-user environments, and configuration issues can prevent users from accessing the company file simultaneously. Errors such as H202 or H505 typically indicate connectivity or hosting problems.</p>
					<p>Common symptoms include:</p>
					<ul>
						<li>
							&bull; 
							<span>Unable to switch to multi-user mode</span>
						</li>
						<li>
							&bull; 
							<span>Other users losing connection to the file</span>
						</li>
						<li>
							&bull; 
							<span>Access issues when working across systems</span>
						</li>
					</ul>
					<p>We assist with reviewing hosting setup, network configuration, and QuickBooks settings to help stabilize multi-user access.</p>

					<div class="divider" style="margin-block: 2rem"></div>

					<p class="header-font grey-text text-darken-4">03. Performance Slowness With Large Files</p>
					<p>As transaction volume increases, QuickBooks Enterprise files can become slower if they are not properly optimized. This can impact daily workflows and reporting efficiency.</p>
					<p>Businesses often notice:</p>
					<ul>
						<li>
							&bull;
							<span>Delays when opening reports</span>
						</li>
						<li>
							&bull;
							<span>Slow transaction entry</span>
						</li>
						<li>
							&bull;
							<span>Freezing during routine tasks</span>
						</li>
					</ul>
					<p>We help evaluate file size, list management, and system setup to improve overall performance and usability.</p>

					<div class="divider" style="margin-block: 2rem"></div>

					<p class="header-font grey-text text-darken-4">04. Frequent Crashes or Unexpected Shutdowns</p>
					<p>Unexpected crashes can interrupt important accounting tasks and may indicate installation, system, or compatibility issues.</p>
					<p>This may appear as:</p>
					<ul>
						<li>
							&bull;
							<span>QuickBooks closing without warning</span>
						</li>
						<li>
							&bull;
							<span>Freezing during payroll or reporting</span>
						</li>
						<li>
							&bull;
							<span>Repeated crashes during specific actions</span>
						</li>
					</ul>
					<p>Our approach focuses on identifying contributing factors and applying structured fixes to improve stability.</p>

					<div class="divider" style="margin-block: 2rem"></div>

					<p class="header-font grey-text text-darken-4">05. Error Codes (6000 Series, 3371, Update Errors)</p>
					<p>QuickBooks Enterprise error codes often relate to company file access, licensing components, or update processes. While the message may look specific, the root cause can vary.</p>
					<p>Common examples include:</p>
					<ul>
						<li>
							&bull;
							<span>6000-series company file errors</span>
						</li>
						<li>
							&bull;
							<span>Error 3371 related to licensing components</span>
						</li>
						<li>
							&bull;
							<span>Update or maintenance release failures</span>
						</li>
					</ul>
					<p>We assist in diagnosing the cause behind these errors and applying safe, non-destructive resolution steps.</p>

					<div class="divider" style="margin-block: 2rem"></div>

					<p class="header-font grey-text text-darken-4">06. Data Balance Discrepancies & Report Mismatches</p>
					<p>When reports don't align or balances appear incorrect, it can create confusion and affect financial decision-making.</p>
					<p>Businesses may notice:</p>
					<ul>
						<li>
							&bull;
							<span>Balance sheet and profit & loss mismatches</span>
						</li>
						<li>
							&bull;
							<span>Reports not reflecting recent entries</span>
						</li>
						<li>
							&bull;
							<span>Unexpected totals or missing data</span>
						</li>
					</ul>
					<p>We help review data integrity, identify inconsistencies, and support corrective actions to restore reporting accuracy.</p>

					<div class="divider" style="margin-block: 2rem"></div>

					<p class="header-font grey-text text-darken-4">07. Update & Payroll Issues</p>
					<p>Keeping QuickBooks Enterprise up to date is important, but update failures can disrupt normal operations—especially when payroll is involved.</p>
					<p>Common challenges include:</p>
					<ul>
						<li>
							&bull;
							<span>Maintenance releases not installing properly</span>
						</li>
						<li>
							&bull;
							<span>Payroll updates failing or looping</span>
						</li>
						<li>
							&bull;
							<span>Version mismatches in multi-user environments</span>
						</li>
					</ul>
					<p>We assist with troubleshooting update issues and helping ensure system consistency.</p>

					<div class="divider" style="margin-block: 2rem"></div>

					<p class="header-font grey-text text-darken-4">08. User Access & Permission Problems</p>
					<p>QuickBooks Enterprise relies on role-based access, and incorrect configurations can limit user functionality.</p>
					<p>This often includes:</p>
					<ul>
						<li>
							&bull;
							<span>Users unable to access certain features</span>
						</li>
						<li>
							&bull;
							<span>Permission settings not applying correctly</span>
						</li>
						<li>
							&bull;
							<span>Login or role-related errors</span>
						</li>
					</ul>
					<p>We help review user roles and permissions to ensure appropriate access while maintaining internal controls.</p>

					<div class="divider" style="margin-block: 2rem"></div>

					<p class="header-font grey-text text-darken-4">09. Third-Party Integration Conflicts</p>
					<p>Many businesses use QuickBooks Enterprise alongside other tools for inventory, CRM, or reporting. Integration conflicts can occur when settings or versions are misaligned.</p>
					<p>Signs of integration issues include:</p>
					<ul>
						<li>
							&bull;
							<span>Sync failures or incomplete data transfers</span>
						</li>
						<li>
							&bull;
							<span>Errors after connecting third-party tools</span>
						</li>
						<li>
							&bull;
							<span>Unexpected behavior after updates</span>
						</li>
					</ul>
					<p>We assist in identifying compatibility issues and supporting smoother integration workflows.</p>
				</div>
				
				<div class="col m6 l5 offset-l1" style="position: sticky; top: 128px">
					<div class="card-panel z-depth-0 center-align header-font" style="background-color: #1f7a6b">
						<p class="white-text">If you're experiencing a QuickBooks Enterprise issue and need assistance, our team can help review the situation and guide you on the next steps.</p>
						<p class="white-text" style="font-size: 26px">{{ env("PHONE")}}</p>
						<p class="white-text">Talk to a QuickBooks Enterprise Specialist</p>
						<p class="text-xs white-text">Independent third-party QuickBooks service. Not affiliated with Intuit.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- Common Issues With QuickBooks Enterprise (end) -->
	
	<!-- How do we work on the issue (start) -->
	<section class="center-align">
		<div class="container">
			<div class="row">
				<div class="col s12" style="margin-bottom: 5rem">
					<h4 class="header-font">How Our QuickBooks Enterprise Assistance Works</h4>
					<p>We follow a structured, business-focused approach to help identify and resolve QuickBooks Enterprise issues. Our process is designed to be clear, non-disruptive, and aligned with best practices—so you know what to expect before reaching out.</p>
				</div>

				<div class="col s12 m8 l6 offset-m2 offset-l3 step-wrapper">
					<div class="card-panel step-card">
						<p class="header-font">01. Issue Review</p>
						<p>We begin by understanding the issue you're experiencing and how your QuickBooks Enterprise environment is set up. This includes reviewing the type of problem, when it occurs, and how your system is currently being used.</p>
					</div>

					<div class="card-panel step-card">
						<p class="header-font">02. Diagnosis</p>
						<p>Once the issue is reviewed, we evaluate possible causes based on your setup. This may involve identifying whether the problem is related to the company file, configuration settings, network environment, system compatibility, or software components.</p>
					</div>

					<div class="card-panel step-card">
						<p class="header-font">03. Resolution</p>
						<p>After identifying the cause, we apply safe troubleshooting steps and best-practice solutions tailored to your specific QuickBooks Enterprise environment.</p>
					</div>

					<div class="card-panel step-card">
						<p class="header-font">04. Stability Check</p>
						<p>Once the issue is addressed, we help verify that QuickBooks Enterprise is functioning as expected. Where applicable, we also suggest preventive steps to reduce the likelihood of similar issues occurring again.</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- How do we work on the issue (end) -->

	<section class="center-align">
		<div class="container">
			<div class="row">
				<div class="col s12" style="margin-bottom: 5rem">
					<h4 class="header-font">Why Businesses Choose Us</h4>
				</div>

				<div class="col s12 m6 l3">
					<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
						<h2 class="header-font">01.</h2>
						<p style="min-height: 68px">Experience with complex Enterprise setups</p>
					</div>
				</div>
				<div class="col s12 m6 l3">
					<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
						<h2 class="header-font">02.</h2>
						<p style="min-height: 68px">Focus on data-safe troubleshooting</p>
					</div>
				</div>
				<div class="col s12 m6 l3">
					<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
						<h2 class="header-font">03.</h2>
						<p style="min-height: 68px">Clear communication, no pressure</p>
					</div>
				</div>
				<div class="col s12 m6 l3">
					<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
						<h2 class="header-font">04.</h2>
						<p style="min-height: 68px">Independent third-party QuickBooks consultants</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<div class="container">
		<div class="divider"></div>
	</div>

	<section>
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l6">
					<h4 class="header-font" style="margin-bottom: 2rem">Who Do We Serve</h4>

					<p>Our services are designed for businesses using QuickBooks Enterprise that require structured, methodical assistance rather than general how-to guidance. This helps ensure our support is aligned with more complex accounting environments.</p>

					<ul>
						<li>
							01. Businesses currently using QuickBooks Enterprise
						</li>
						<br>
						<li>
							02. Multi-user or server-based QuickBooks setups
						</li>
						<br>
						<li>
							03. Companies managing large volumes of transactions or data
						</li>
						<br>
						<li>
							04. Businesses experiencing recurring or complex issues that require detailed troubleshooting
						</li>
					</ul>

					<p>These environments often benefit from a systematic review and resolution approach rather than basic instructions.</p>

					<br>

					<p class="header-font">When This Service May Not Be the Right Fit</p>
					<p>This service may not be ideal for basic QuickBooks Online questions or simple how-to inquiries that can be resolved through standard documentation.</p>
				</div>

				<div class="col s12" style="margin-top: 2rem">
					<div class="card-panel z-depth-0 center-align white-text" style="background-color: #1f7a6b">
						<h5 class="header-font">Need Help With a QuickBooks Enterprise Issue?</h5>
						<p class="white-text">If you're unable to resolve a QuickBooks Enterprise issue on your own, our team can help review the problem and suggest the right next steps.</p>
						<p class="header-font" style="font-size: 22px; color: white !important">{{ env("PHONE") }}</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- FAQs (start) -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col s12">
					<h4 class="header-font" style="margin-bottom: 5rem">Frequently Asked Questions</h4>

					<p class="header-font">Are you Intuit or QuickBooks official support?</p>
					<p>No. We are an independent third-party service provider that assists businesses using QuickBooks software. We are not affiliated with, endorsed by, or sponsored by Intuit Inc.</p>
					<br>
					
					<p class="header-font">Do you work with existing QuickBooks Enterprise company files?</p>
					<p>Yes. We assist businesses with reviewing, diagnosing, and troubleshooting issues within existing QuickBooks Enterprise setups, including company file-related concerns.</p>
					<br>
					
					<p class="header-font">Can you help with multi-user issues in QuickBooks Enterprise?</p>
					<p>Yes. We help identify and address common multi-user configuration issues, including access problems, hosting setup concerns, and connectivity-related errors.</p>
					<br>
					
					<p class="header-font">What types of QuickBooks Enterprise issues do you typically handle?</p>
					<p>We commonly assist with company file access problems, performance slowness, error codes, update-related issues, reporting discrepancies, and user permission concerns in QuickBooks Enterprise environments.</p>
					<br>
					
					<p class="header-font">Do you provide assistance for QuickBooks Online?</p>
					<p>Our primary focus for this service is QuickBooks Enterprise. For basic QuickBooks Online questions or simple how-to guidance, this service may not be the best fit.</p>
					<br>
					
					<p class="header-font">How does the initial consultation work?</p>
					<p>We begin by discussing the issue you're experiencing and reviewing your QuickBooks Enterprise setup. This helps determine the nature of the problem and the most appropriate next steps.</p>
					<br>
					
					<p class="header-font">Is my data safe during troubleshooting?</p>
					<p>We follow a structured and cautious approach when assisting with QuickBooks Enterprise issues. The focus is on diagnostics and best-practice troubleshooting to avoid unnecessary changes to your data.</p>
					<br>
				</div>
			</div>
		</div>
	</section>
	<!-- FAQs (end) -->

	<footer class="page-footer teal">
		<div style="margin: 0 5%">
			<div class="row">
				<div class="col s12 left-align" style="margin-bottom: 2rem">
					<p class="underline header-font">Disclaimer:</p>
					<p class="text-sm">{{ env("COMPANY") }} is an independent accounting and bookkeeping firm and a Certified QuickBooks ProAdvisor. We are not affiliated with, sponsored by, or endorsed by Intuit Inc. QuickBooks, QuickBooks ProAdvisor, TurboTax, and all related marks and logos are registered trademarks and property of Intuit Inc., used here solely for descriptive purposes. All information provided on this website is for general informational purposes only and should not be considered professional or financial advice.</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline header-font">Services</h4>

					<p>
						<a class="text-sm" href="{{ url("services/bookkeeping-services") }}">Bookkeeping services</a>
					</p>
					<p>
						<a class="text-sm" href="{{ url("services/accounting-services") }}">Accounting services</a>
					</p>
					<p>
						<a class="text-sm" href="{{ url("services/quickbooks-setup-and-consultation") }}">QuickBooks setup & consultation</a>
					</p>
					<p>
						<a class="text-sm" href="{{ url("services/quickbooks-bookkeeping") }}">QuickBooks bookkeeping</a>
					</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline header-font">Quick Links</p>

					<p>
						<a class="text-sm" href="{{ url("about-us") }}">About us</a>
					</p>

					<p>
						<a class="text-sm" href="{{ url("pricing") }}">Pricing</a>
					</p>

					<p>
						<a class="text-sm" href="{{ url("resources/blog") }}">Our blog</a>
					</p>

					<p>
						<a class="text-sm" href="{{ url("sitemap") }}">Sitemap</a>
					</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline header-font">Legal & Policies</h4>
					<p>
						<a class="text-sm" href="{{ url("terms-of-service") }}">Terms of Service</a>
					</p>
					
					<p>
						<a class="text-sm" href="{{ url("privacy-policy") }}">Privacy policy</a>
					</p>
					
					<p>
						<a class="text-sm" href="{{ url("refund-policy") }}">Refund policy</a>
					</p>
				</div>

				<div class="col s12 m6 l3">
					<p class="underline header-font">{{ env("COMPANY") }}</p>
					<p class="text-sm">
						<span class="font-medium text-sm">Address: </span>
						{{ env("ADDRESS") }}
					</p>
					<p class="text-sm">
						<span class="font-medium text-sm">Phone: </span>
						{{ env("PHONE") }}
					</p>
					<p class="text-sm">
						<span class="font-medium text-sm">Email address: </span>
						{{ env("EMAIL") }}
					</p>
				</div>
			</div>
		</div>
		<div class="footer-copyright text-sm" style="padding: 0 5%">
			&copy; {{ date("Y") }} All Rights Reserved
		</div>
	</footer>

	<!-- Compiled and minified JavaScript -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/js/materialize.min.js"></script>
	<script>
		M.AutoInit();

		const submitForm = async (event) => {
			event.preventDefault();
			const form = event.target;

			for (const input of form) {
				input.classList.remove("invalid");
			}
			document.querySelectorAll(".error-card").forEach(card => {
				card.classList.add("hide");
			});

			form["submit-btn"].classList.add("disabled");

			try {
				const response = await fetch(form.action, {
					method: form.method,
					body: new FormData(form),
					headers: {
						Accept: "application/json"
					}
				});

				const data = await response.json();

				if (!response.ok) throw data;

				form.reset();

				document.querySelectorAll(".success-card").forEach(card => {
					card.querySelector("span").innerText = data;
					card.classList.remove("hide");
				});
			} catch (error) {
				for (const key in error.errors) {
					if (error.errors.hasOwnProperty(key)) {
						form[key].classList.add("invalid");
					}
				}

				document.querySelectorAll(".error-card").forEach(card => {
					card.querySelector("span").innerText = error.message;
					card.classList.remove("hide");
				});
			}

			form["submit-btn"].classList.remove("disabled")
		}
	</script>
</body>
</html>