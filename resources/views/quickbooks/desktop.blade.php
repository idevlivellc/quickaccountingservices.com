@extends("templates.quickbooks")

@section("title", "QuickBooks Desktop Pro Support for Existing Users")
@section("description", "Support services for existing QuickBooks Desktop Pro users. Help with errors, setup, upgrades & migration. Independent third-party service. No software sales.")
@section("keywords", "quickbooks desktop pro support, quickbooks desktop help, quickbooks pro troubleshooting, quickbooks desktop error help, quickbooks desktop migration support, quickbooks desktop upgrade assistance")

@section("content")
<!-- Header (start) -->
<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6 center-on-small-only">
				<h1 class="header-font">QuickBooks Desktop Pro Support for Existing Users</h1>
				{{-- <h1 class="header-font">QuickBooks Desktop Pro Help by Independent Experts</h1> --}}
				<p class="grey-text text-darken-2">Support, troubleshooting, migration & setup services for existing QuickBooks Desktop users</p>

				<p class="header-points" style="margin-top: 2rem;">
					<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">error</i>
					Help for existing QuickBooks Desktop & Pro users
				</p>
				<p class="header-points">
					<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">contact_support</i>
					Fix errors, crashes & performance issues
				</p>
				<p class="header-points">
					<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">sync_saved_locally</i>
					Assistance with upgrades & data migration
				</p>
				<p class="header-points">
					<i class="material-symbols-rounded left hide-on-small-only" style="color: #1f7a6b">steppers</i>
					Services focused on troubleshooting & setup
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
					<p class="header-font">Discuss Your QuickBooks Desktop Issue</p>
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
							<button class="btn-large full-width header-font text-base" name="submit-btn" style="background-color: #1f7a6b; color: white !important; line-height: 0;">Request Support Assistance</button>
						</div>
					</form>
				</div>
				<p class="center-align text-xs" style="letter-spacing: 0">No software sales. Support services only for existing users. We respect your privacy. Your information is used only to respond to your request.</p>
			</div>
		</div>
	</div>
</section>
<!-- Header (end) -->


<section>
	<div class="container">
		<div class="divider"></div>
	</div>
</section>

{{-- <section>
	<div class="container"></div>
</section> --}}

<!-- Services we provide on QuickBooks Desktop (start) -->
<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="header-font" style="margin-bottom: 3rem">Services We Provide</h4>

				<p class="header-font" style="margin-top: 3rem">01. QuickBooks Pro Troubleshooting & Error Resolution</p>
				<p>We assist existing users facing issues while working with QuickBooks Desktop Pro and Desktop versions. Our support focuses on identifying the root cause of common software errors, application crashes, and workflow interruptions that affect daily accounting operations.</p>
				<p>Our team reviews error messages, configuration settings, and usage patterns to determine the most appropriate resolution steps. This may include fixing configuration conflicts, addressing data-related issues, or guiding users through safe corrective actions to restore normal functionality.</p>
				<p>This service is designed for troubleshooting and guidance only and does not include the sale or distribution of QuickBooks software.</p>

				<p class="header-font" style="margin-top: 3rem">02. QuickBooks Desktop Installation & Setup (Existing Licenses)</p>
				<p>This service is intended for users who already own a valid QuickBooks Desktop license and need help with installation or initial setup. We assist with installing the software on supported systems and ensuring it is configured correctly for business use.</p>
				<p>Our setup assistance includes guidance on company file creation, basic preferences, and user access settings. We focus on helping users get started smoothly without altering licensing terms or providing new software access.</p>
				<p>We do not sell licenses or provide software downloads as part of this service.</p>

				<p class="header-font" style="margin-top: 3rem">03. Performance & Data File Issues</p>
				<p>QuickBooks Desktop performance issues can often be linked to large company files, system limitations, or configuration problems. We help identify factors that may be slowing down the software or causing delays during everyday tasks.</p>
				<p>Our support includes reviewing file-related issues, checking system compatibility, and providing guidance to improve stability and performance. Where appropriate, we also advise on safe maintenance steps to reduce future disruptions.</p>
				<p>All assistance is provided for existing QuickBooks Desktop environments.</p>

				<p class="header-font" style="margin-top: 3rem">04. Multi-User & Company File Errors</p>
				<p>For businesses using QuickBooks Desktop in a shared or multi-user setup, configuration issues can prevent users from accessing company files properly. We help diagnose and resolve common multi-user mode and file access problems.</p>
				<p>Our service focuses on reviewing network settings, user permissions, and file hosting configurations to ensure smoother collaboration. We provide step-by-step assistance tailored to your existing setup.</p>
				<p>This service does not involve hosting QuickBooks software or acting as an official service provider.</p>

				<p class="header-font" style="margin-top: 3rem">05. Version Upgrade Assistance</p>
				<p>We assist users who are upgrading between supported QuickBooks Desktop versions they already own. This includes helping users prepare their data, understand upgrade requirements, and reduce the risk of data-related issues during the process.</p>
				<p>Our role is to guide users through the upgrade process and answer questions related to compatibility and data handling. We do not sell upgrades or licenses as part of this service.</p>
				<p>Upgrade assistance is offered strictly as a support and consultation service.</p>

				<p class="header-font" style="margin-top: 3rem">06. Migration to QuickBooks Enterprise or Online</p>
				<p>For businesses considering a transition from QuickBooks Desktop, we provide migration assistance to QuickBooks Enterprise or QuickBooks Online based on their operational needs.</p>
				<p>This service focuses on planning, data preparation, and migration guidance to help minimize disruption. We explain the process, highlight considerations, and assist during the transition phase where applicable.</p>
				<p>We do not sell subscriptions or represent Intuit and provide migration support as an independent third-party service provider.</p>
			</div>
			
			<div class="col m6 l5 offset-l1" style="position: sticky; top: 128px">
				<div class="card-panel z-depth-0 center-align header-font" style="background-color: #1f7a6b">
					<p class="white-text">If you're experiencing a QuickBooks Desktop issue and need assistance, our team can help review the situation and guide you on the next steps.</p>
					<p class="white-text" style="font-size: 26px">{{ env("PHONE")}}</p>
					<p class="white-text">Talk to a QuickBooks Desktop Specialist</p>
					<p class="text-xs white-text">Independent third-party QuickBooks service. Not affiliated with Intuit.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Services we provide on QuickBooks Desktop (end) -->

<!-- How do we work on the issue (start) -->
<section class="center-align">
	<div class="container">
		<div class="row">
			<div class="col s12" style="margin-bottom: 5rem">
				<h4 class="header-font">How Our Support Works</h4>
				<p>We follow a structured, business-focused approach to help identify and resolve QuickBooks Desktop issues. Our process is designed to be clear, non-disruptive, and aligned with best practices—so you know what to expect before reaching out.</p>
			</div>

			<div class="col s12 m8 l6 offset-m2 offset-l3 step-wrapper">
				<div class="card-panel step-card">
					<p class="header-font">Step 1</p>
					<p>Submit your issue.</p>
				</div>

				<div class="card-panel step-card">
					<p class="header-font">Step 2</p>
					<p>Our expert reviews your request.</p>
				</div>

				<div class="card-panel step-card">
					<p class="header-font">Step 3</p>
					<p>We connect with you over call or chat.</p>
				</div>

				<div class="card-panel step-card">
					<p class="header-font">Step 4</p>
					<p>We discuss the possible resolution scenarios.</p>
				</div>
				
				<div class="card-panel step-card">
					<p class="header-font">Step 5</p>
					<p>Once confirmed, we start our work.</p>
				</div>
				
				<div class="card-panel step-card">
					<p class="header-font">Step 6</p>
					<p>Issue resolved or migration completed.</p>
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
					<p style="min-height: 68px">QuickBooks application not opening.</p>
				</div>
			</div>
			<div class="col s12 m6 l3">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<h2 class="header-font">02.</h2>
					<p style="min-height: 68px">QuickBooks application opens but shows errors.</p>
				</div>
			</div>
			<div class="col s12 m6 l3">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<h2 class="header-font">03.</h2>
					<p style="min-height: 68px">When there are issues with your company files.</p>
				</div>
			</div>
			<div class="col s12 m6 l3">
				<div class="card-panel z-depth-0" style="border: 1px solid #e0e0e0">
					<h2 class="header-font">04.</h2>
					<p style="min-height: 68px">When you need help in migrating or upgrading.</p>
				</div>
			</div>
		</div>
	</div>
</section>

<div class="container">
	<div class="divider"></div>
</div>

<!-- Who this service is for (start) -->
<section>
	<div class="container">
		<div class="row">
			<div class="col s12 m6 l6">
				<h4 class="header-font" style="margin-bottom: 2rem">Who This Service Is For</h4>

				<p>Our services are designed for businesses using QuickBooks Desktop that require structured, methodical assistance rather than general how-to guidance. This helps ensure our support is aligned with more complex accounting environments.</p>

				<ul>
					<li>
						01. Existing QuickBooks Pro users
					</li>
					<br>
					<li>
						02. Businesses already using QuickBooks Desktop
					</li>
					<br>
					<li>
						03. Users facing errors, crashes, or performance issues
					</li>
					<br>
					<li>
						04. Businesses planning migration or upgrades
					</li>
				</ul>

				<p>These environments often benefit from a systematic review and resolution approach rather than basic instructions.</p>

				<br>

				<p class="header-font">When This Service May Not Be the Right Fit</p>
				<p>This service may not be ideal for basic QuickBooks Online questions or simple how-to inquiries that can be resolved through standard documentation.</p>
			</div>

			<div class="col s12" style="margin-top: 2rem">
				<div class="card-panel z-depth-0 center-align white-text" style="background-color: #1f7a6b">
					<h5 class="header-font">Need Help With a QuickBooks Desktop Issue?</h5>
					<p class="white-text">If you're unable to resolve a QuickBooks Desktop issue on your own, our team can help review the problem and suggest the right next steps.</p>
					<p class="header-font" style="font-size: 22px; color: white !important">{{ env("PHONE") }}</p>
				</div>
			</div>
		</div>
	</div>
</section>
<!-- Who this service is for (end) -->

<!-- FAQs (start) -->
<section>
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h4 class="header-font" style="margin-bottom: 5rem">Frequently Asked Questions</h4>

				<p class="header-font">Do you sell QuickBooks Desktop or Pro licenses?</p>
				<p>No. We do not sell, resell, or distribute QuickBooks licenses or software. Our services are limited to support, troubleshooting, setup, and migration for existing QuickBooks Desktop users only.</p>
				<br>
				
				<p class="header-font">Are you affiliated with Intuit or official QuickBooks support?</p>
				<p>No. We are an independent third-party service provider and are not affiliated with Intuit Inc. Our services are provided separately and are not part of Intuit's official support offerings.</p>
				<br>
				
				<p class="header-font">Who can use your QuickBooks Desktop support services?</p>
				<p>Our services are intended for businesses and individuals who already use QuickBooks Desktop, including Pro and Enterprise editions, and need help with errors, setup, upgrades, or migration.</p>
				<br>
				
				<p class="header-font">Can you help if QuickBooks Pro is not opening or showing errors?</p>
				<p>Yes. We assist with common QuickBooks Pro and Desktop issues such as application errors, crashes, performance problems, and company file-related issues. Our support focuses on identifying the cause and guiding you through safe resolution steps.</p>
				<br>
				
				<p class="header-font">Do you provide remote support?</p>
				<p>Yes. Most of our services are delivered remotely, allowing us to review issues, guide troubleshooting steps, and assist with configuration without requiring onsite access.</p>
				<br>
				
				<p class="header-font">Can you help migrate from QuickBooks Desktop to another version?</p>
				<p>Yes. We provide migration assistance from QuickBooks Desktop to QuickBooks Enterprise or QuickBooks Online. This includes planning, data preparation, and guidance during the migration process.</p>
				<br>
				
				<p class="header-font">What information do I need before requesting support?</p>
				<p>To get started, it helps to know your QuickBooks version, the type of issue you're facing, and whether you already have a valid license. This allows us to provide more accurate and efficient assistance.</p>
				<br>
			</div>
		</div>
	</div>
</section>
<!-- FAQs (end) -->
@endsection