<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>QBCFMonitorService Not Running in QuickBooks Desktop - Common Causes & Steps | Quick Accounting Services</title>

	<meta name="description" content="Learn why QBCFMonitorService stops running in QuickBooks Desktop and explore common symptoms, causes, and recommended steps to resolve the issue safely." />
	<meta name="keywords" content="qbcfmonitorservice not running, qbcf monitor service error, quickbooks database service issue, qbcfmonitorservice stopped, quickbooks multi user mode issue, quickbooks database server manager" />

	<link rel="canonical" href="https://quickaccountingservices.com/qbcf-monitor-service-not-running" />

	<meta name="robots" content="index, follow" />

	<!-- Favicon -->
	<link rel="icon" id="favicon" href="{{ asset('images/q.ico') }}" type="image/x-icon">

	<!-- Compiled and minified CSS -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/1.0.0/css/materialize.min.css">
	<link rel="stylesheet" href="{{ asset("app.css") }}">

	<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

	<!-- Google tag (gtag.js) -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=AW-17721883777"></script>
	<script>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'AW-17721883777');
	</script>

	<script>
		gtag('config', 'AW-17721883777/qLaXCMHz5b8bEIH5uYJC', {
			'phone_conversion_number': '1-888-849-2341'
		});
	</script>

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
						Talk to a Independent QuickBooks Professional
					</a>
				</li>
			</ul>
		</div>
	</nav>

	<!-- Modal (start) -->
	<div class="modal" id="contact-us" style="width: 500px">
		<div class="modal-content center-align white">
			<h5 class="header-font" style="margin-top: 0">Contact a QuickBooks Consultant</h5>
			<p>If you'd like to speak with someone about a QuickBooks Enterprise issue, you can call us directly or request a callback using the form on this page.</p>

			<img src="{{ url("images/image.png") }}" alt="" class="responsive-img">

			<p>
				<a href="tel:{{ env("PHONE") }}" class="btn-large full-width" style="background-color: #1f7a6b; font-family: 'RadionB', sans-serif; color: white !important; line-height: 52px">{{ env("PHONE") }}</a>
			</p>

			<p class="text-sm">This connects you with a Independent QuickBooks Professional.</p>
		</div>
	</div>
	<!-- Modal (end) -->


	<!-- Header (start) -->
	<section>
		<div class="container">
			<div class="row">
				<div class="col s12 m6 l6 center-on-small-only">
					<h1 class="header-font">QBCFMonitorService Not Running in QuickBooks?</h1>
					<p class="grey-text text-darken-2">
						When the QBCF Monitor Service stops running, QuickBooks may fail to open company files or switch to multi-user mode. This page explains why this happens and the recommended steps to fix it.
					</p>

					<p class="header-points" style="margin-top: 2rem;">
						<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">error</i>
						Common causes of QBCF Monitor Service errors
					</p>
					<p class="header-points">
						<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">step_into</i>
						Step-by-step resolution methods
					</p>
					<p class="header-points">
						<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">sync_saved_locally</i>
						Compatible with most QuickBooks Desktop versions
					</p>
					<p class="header-points">
						<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">contact_support</i>
						Independent guidance - not affiliated with Intuit
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
					<h4 class="header-font">What Is QBCFMonitorService?</h4>

					<br>

					<p class="header-font">01. What Is QBCFMonitorService in QuickBooks?</p>
					<p>
						QBCFMonitorService is a Windows service installed with QuickBooks Database Server Manager. It helps manage communication between QuickBooks Desktop and company files stored on a network.
					</p>
					<p>
						When this service stops running or fails to start, QuickBooks may be unable to access the company file correctly.
					</p>
					
					<br>

					<p class="header-font">02. Common Symptoms of This Issue</p>
					<p>
						When QBCFMonitorService is not running correctly, QuickBooks may experience interruptions while accessing or managing company files. These symptoms often appear during everyday tasks such as opening a file, switching to multi-user mode, or working in a networked environment, and they can vary depending on the system setup.
					</p>

					<ul>
						<li>
							&bull;
							<span>QuickBooks cannot open the company file</span>
						</li>
						<li>
							&bull;
							<span>Multi-user mode fails to start</span>
						</li>
						<li>
							&bull;
							<span>Error messages related to database connectivity</span>
						</li>
						<li>
							&bull;
							<span>QuickBooks freezes or closes unexpectedly</span>
						</li>
						<li>
							&bull;
							<span>Network-related error codes appear</span>
						</li>
					</ul>

					<br>

					<p class="header-font">03. Why Does QBCFMonitorService Stop Running?</p>
					<p>
						This issue can occur due to system configuration problems, software restrictions, or incomplete QuickBooks components. Factors such as Windows service settings, security software, file permissions, or outdated installations can prevent QBCFMonitorService from operating as expected, leading to database communication issues.
					</p>

					<ul>
						<li>
							&bull;
							<span>Windows service not running or set incorrectly</span>
						</li>
						<li>
							&bull;
							<span>Firewall or security software blocking communication</span>
						</li>
						<li>
							&bull;
							<span>Damaged QuickBooks Database Server Manager files</span>
						</li>
						<li>
							&bull;
							<span>Incorrect folder permissions</span>
						</li>
						<li>
							&bull;
							<span>Incomplete or outdated QuickBooks installation</span>
						</li>
					</ul>

					{{-- <p class="header-font grey-text text-darken-4">01. Company file won't open or freezes</p>
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
					<p>We assist in identifying compatibility issues and supporting smoother integration workflows.</p> --}}
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
					<h4 class="header-font">Recommended Steps for QBCFMonitorService Issues</h4>
					<p>We follow a structured, business-focused approach to help identify and resolve QuickBooks Enterprise issues. Our process is designed to be clear, non-disruptive, and aligned with best practices—so you know what to expect before reaching out.</p>
				</div>

				<div class="col s12 m8 l6 offset-m2 offset-l3 step-wrapper">
					<div class="card-panel step-card">
						<p class="header-font">01. Restart</p>
						<p>Restart the QBCF Monitor Service from Windows Services</p>
					</div>

					<div class="card-panel step-card">
						<p class="header-font">02. Verify</p>
						<p>Verify the service startup type is set correctly</p>
					</div>

					<div class="card-panel step-card">
						<p class="header-font">03. Check</p>
						<p>Check firewall and security software settings</p>
					</div>

					<div class="card-panel step-card">
						<p class="header-font">04. Run</p>
						<p>Run QuickBooks Database Server Manager and rescan folders</p>
					</div>
					
					<div class="card-panel step-card">
						<p class="header-font">04. Confirmation</p>
						<p>Confirm folder permissions for company files</p>
					</div>
					
					<div class="card-panel step-card">
						<p class="header-font">04. Update</p>
						<p>Update QuickBooks Desktop to the latest release</p>
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
					<h4 class="header-font">When Should You Seek Assistance?</h4>
					<p>It may be helpful to get guided assistance to avoid data access issues.</p>
				</div>

				<div class="col s12 m6 l3">
					<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
						<h2 class="header-font">01.</h2>
						<p style="min-height: 68px">Persists after applying the steps</p>
					</div>
				</div>
				<div class="col s12 m6 l3">
					<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
						<h2 class="header-font">02.</h2>
						<p style="min-height: 68px">Affects multiple users</p>
					</div>
				</div>
				<div class="col s12 m6 l3">
					<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
						<h2 class="header-font">03.</h2>
						<p style="min-height: 68px">Occurs frequently</p>
					</div>
				</div>
				<div class="col s12 m6 l3">
					<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
						<h2 class="header-font">04.</h2>
						<p style="min-height: 68px">Involves network or server configuration</p>
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
					<h4 class="header-font" style="margin-bottom: 2rem">Why Choose Our Independent Guidance</h4>

					{{-- <p>Our services are designed for businesses using QuickBooks Enterprise that require structured, methodical assistance rather than general how-to guidance. This helps ensure our support is aligned with more complex accounting environments.</p> --}}

					<ul>
						<li>
							01. Experience with common QuickBooks Desktop issues
						</li>
						<br>
						<li>
							02. Clear, step-by-step approach
						</li>
						<br>
						<li>
							03. No misleading claims or pressure tactics
						</li>
						<br>
						<li>
							04. Focus on safe resolution methods
						</li>
						<br>
						<li>
							05. Transparent and independent service
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

					<p class="header-font">What is QBCFMonitorService used for in QuickBooks?</p>
					<p>QBCFMonitorService is a Windows service that helps QuickBooks Desktop communicate with company files, especially in multi-user or network-based setups.</p>
					<br>
					
					<p class="header-font">Can this issue affect single-user mode as well?</p>
					<p>In some cases, yes. While the issue is more common in multi-user environments, certain configurations may also impact access in single-user mode.</p>
					<br>
					
					<p class="header-font">Does this problem occur in all QuickBooks Desktop versions?</p>
					<p>This issue can occur in multiple QuickBooks Desktop versions, depending on the installation, system settings, and network configuration.</p>
					<br>
					
					<p class="header-font">Is QBCFMonitorService required for multi-user access?</p>
					<p>Yes. For company files hosted on a network, QBCFMonitorService plays an important role in enabling multi-user access and database communication.</p>
					<br>
					
					<p class="header-font">Can security software cause this issue?</p>
					<p>Yes. Firewall or security software may block required processes or ports, which can prevent the service from running correctly.</p>
					<br>
					
					<p class="header-font">Are you affiliated with Intuit or QuickBooks?</p>
					<p>No. We are an independent service provider and are not affiliated with, endorsed by, or associated with Intuit Inc. or QuickBooks.</p>
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

		const popupStatus = async () => {
			try {
				const response = await fetch("/popup/2", {
					headers: {
						Accept: "application/json"
					}
				});

				const data = await response.json();

				if (!response.ok) {
					throw data;
				}

				if (data.popup == 1) {
					const instance = M.Modal.getInstance(document.getElementById("contact-us"));
					instance.open();
				}
			} catch (error) {
				console.error(error);
			}
		}

		popupStatus();
	</script>
	<!-- Default Statcounter code for Quick Accounting Services https://quickaccountingservices.com -->
	<script type="text/javascript">
		var sc_project=13188593; 
		var sc_invisible=1; 
		var sc_security="d649b94d"; 
	</script>
	<script type="text/javascript" src="https://www.statcounter.com/counter/counter.js" async></script>
	<noscript>
		<div class="statcounter">
			<a title="Web Analytics Made Easy - Statcounter" href="https://statcounter.com/" target="_blank"><img class="statcounter" src="https://c.statcounter.com/13188593/0/d649b94d/1/" alt="Web Analytics Made Easy - Statcounter" referrerPolicy="no-referrer-when-downgrade"></a>
		</div>
	</noscript>
	<!-- End of Statcounter Code -->
</body>
</html>