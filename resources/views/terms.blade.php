@extends('templates.website')

@section("title", "Terms of Service | Quick Accounting Services")
@section("description", "Read the terms and conditions governing your use of Quick Accounting Services’ website and offerings.")

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("terms-of-service"),
				"text" => "Terms of Service"
			]
		]
	])
	@slot('title')Terms of Service @endslot
	@slot('description')@endslot
@endcomponent

<section>
	<div class="container">
		<p>Please read the Terms of Service below. They cover the terms and conditions that apply to your use of this website (the "Website," or "Site"). {{env("COMPANY")}}. may change the Terms of Service from time to time. By continuing to use the Site following such modifications, you agree to be bound by such modifications to the Terms of Service.</p>

		<p>General Terms and Conditions. In consideration of use of the Site, you agree to: (a) provide true, accurate, current and complete information about yourself as prompted by the registration page and (b) to maintain and update this information to keep it true, accurate, current and complete. If any information provided by you is untrue, inaccurate, not current or incomplete, {{env("COMPANY")}} has the right to terminate your account and refuse any and all current or future use of the Site. You agree not to resell or transfer the Site or use of or access to the Site.</p>

		<p>You acknowledge and agree that you must: (a) provide for your own access to the World Wide Web and pay any service fees associated with such access, and (b) provide all equipment necessary for you to make such connection to the World Wide Web, including a computer and modem or other access device.</p>

		<p>By using the {{env("COMPANY")}} web site, including any applets, software, and content contained therein, you agree that use of the site is entirely at your own risk. the site is provided "as is," without warranty of any kind, either express or implied, including without limitation, any warranty for information, data, services, uninterrupted access, or products provided through or in connection with the site. specifically, {{env("COMPANY")}} disclaims any and all warranties, including, but not limited to: (1) any warranties concerning the availability, accuracy, usefulness, or content of information, products or services and (2) any warranties of title, warranty of non-infringement, warranties of merchantability or fitness for a particular purpose. this disclaimer of liability applies to any damages or injury caused by any failure of performance, error, omission, interruption, deletion, defect, delay in operation or transmission, computer virus, communication line failure, theft or destruction or unauthorized access to, alteration of, or use of record, whether for breach of contract, tortuous behavior, negligence, or under any other cause of action.</p>

		<p>Neither nor any of its employees, agents, successors, assigns, affiliates, website co-branding providers or content or service providers shall be liable to you or other third party for any direct, indirect, incidental, special or consequential damages arising out of use of service or inability to gain access to or use the service or out of any breach of any warranty. because some states do not allow the exclusion or limitation of liability for consequential or incidental damages, the above limitation may not apply to you. in such states, the respective liability of , its employees, agents, successors, assigns, affiliates, website co-branding providers and content or service providers respective liability is limited to the greatest extent permitted by such state law.</p>

		<p>{{env("COMPANY")}} is the owner and/or authorized user of any trademark, registered trademark and/or service mark appearing at this Web Site, and is the copyright owner or licensee of the content and/or information on this Website including but not limited to any screens appearing at the Site. You may not download and/or save a copy of any of the screens except as otherwise provided in these Terms of Service, for any purpose. However, you may print a copy of the information on this Site for your personal use or records. If you make other use of this Site, except as otherwise provided above, you may violate copyright and other laws of the United States, other countries, as well as applicable state laws and may be subject to penalties. {{env("COMPANY")}} does not grant any license or other authorization to any user of its trademarks, registered trademarks, service marks, or other copyrightable material or other intellectual property, by placing them on this Website.</p>

		<p>{{env("COMPANY")}} reserves the right to change any information on this Website including but not limited to revising and/or deleting features or other information without prior notice. Clicking on certain links within this Website might take you to other web sites for which {{env("COMPANY")}} assumes no responsibility of any kind for the content, availability or otherwise. (See "Links from and to this Website" below.) The content presented at this Site may vary depending upon your browser limitations.</p>

		<p>User Conduct On the Site.</p>

		<p>While using the Site, you may not:</p>

		<p>restrict or inhibit any other user from using and enjoying the Site;
		<br>
		or
		<br>
		post or transmit any unlawful, fraudulent, libelous, defamatory, obscene, pornographic, profane, threatening, abusive, hateful, offensive, or otherwise objectionable information of any kind, including without limitation any transmissions constituting or encouraging conduct that would constitute a criminal offense, give rise to civil liability, or otherwise violate any local, state, national or foreign law, including without limitation the U.S. export control laws and regulations;
		<br>
		or
		<br>
		post or transmit any advertisements, solicitations, chain letters, pyramid schemes, investment opportunities or schemes or other unsolicited commercial communication (except as otherwise expressly permitted by {{env("COMPANY")}}) or engage in spamming or flooding;
		<br>
		or
		<br>
		post or transmit any information or software which contains a virus, trojan horse, worm or other harmful component;
		<br>
		or
		<br>
		post, publish, transmit, reproduce, distribute or in any way exploit any information, software or other material obtained through the Site for commercial purposes (other than as expressly permitted by the provider of such information, software or other material);
		<br>
		or
		<br>
		upload, post, publish, transmit, reproduce, or distribute in any way, information, software or other material obtained through the Site which is protected by copyright, or other proprietary right, or derivative works with respect thereto, without obtaining permission of the copyright owner or rightholder;
		<br>
		or
		<br>
		upload, post, publish, reproduce, transmit or distribute in any way any component of the Site itself or derivative works with respect thereto, as the Site is copyrighted as a collective work under U.S. copyright laws.</p>

		<p>{{env("COMPANY")}} has no obligation to monitor the Site. However, you acknowledge and agree that {{env("COMPANY")}} has the right to monitor the Site electronically from time to time and to disclose any information as necessary or appropriate to satisfy any law, regulation or other governmental request, to operate the Site properly, or to protect itself or its customers. {{env("COMPANY")}} will not intentionally monitor or disclose any private electronic-mail message unless required by law. {{env("COMPANY")}} reserves the right to refuse to post or to remove any information or materials, in whole or in part, that, in its sole discretion, are unacceptable, undesirable, inappropriate or in violation of these Terms of Service.</p>

		<p>Unless otherwise indicated for a particular communication, any communications or material of any kind that you e-mail, post or otherwise transmit through this Website, including data, questions, comments or suggestions ("your Communications") will be treated as non-confidential and nonproprietary. In addition, {{env("COMPANY")}} is free to use any ideas, concepts, know-how or techniques contained in your Communications for any purpose including, but not limited to, developing and marketing products using such information without compensation to you.</p>

		<p>Failure to Comply With Terms and Conditions and Termination. You acknowledge and agree that {{env("COMPANY")}} may terminate your password or account or deny you access to all or part of the Site without prior notice if you engage in any conduct or activities that {{env("COMPANY")}} in its sole discretion believes violate any of the terms and conditions, violate the rights of {{env("COMPANY")}}, or is otherwise inappropriate for continued access.</p>

		<p>You acknowledge and agree that {{env("COMPANY")}} may in its sole discretion deny you access through {{env("COMPANY")}} to any materials stored on the Internet, or to access third party services, merchandise or information on the Internet through {{env("COMPANY")}}, and {{env("COMPANY")}} shall have no responsibility to notify any third-party providers of services, merchandise or information nor any responsibility for any consequences resulting from lack of notification.</p>

		<p>You agree to defend, indemnify and hold {{env("COMPANY")}} and its affiliates harmless from any and all claims, liabilities, costs and expenses, including reasonable attorneys' fees, arising in any way from your use of the Site or the placement or transmission of any message, information, software or other materials through the Site by you or users of your account or related to any violation of these Terms of Service by you or users of your account.</p>

		<p>Links from and to this Website. You acknowledge and agree that {{env("COMPANY")}} and any of its website co-branding providers have no responsibility for the accuracy or availability of information provided by linked sites. Links to external web sites do not constitute an endorsement by {{env("COMPANY")}} or its website co-branding providers of the sponsors of such sites or the content, products, advertising or other materials presented on such sites.</p>

		<p>Information in the many web pages that are linked to {{env("COMPANY")}}'s Website comes from a variety of sources. Some of this information comes from official {{env("COMPANY")}} licensees, but much of it comes from unofficial or unaffiliated organizations and individuals, both internal and external to {{env("COMPANY")}}. {{env("COMPANY")}} does not author, edit, or monitor these unofficial pages or links. You acknowledge and agree that {{env("COMPANY")}} and its Website Co-branding Providers shall not be responsible or liable, directly or indirectly, for any damage or loss caused or alleged to be caused by or in connection with use of or reliance on any such content, goods or services available on such external sites or resources.</p>

		<p>Other Information. {{env("COMPANY")}} is taking reasonable and appropriate measures, including encryption, to ensure that your personal information is disclosed only to those specified by you. However, the Internet is an open system and we cannot and do not guarantee that the personal information you have entered will not be intercepted by others and decrypted.</p>

		<p>If you wish to make purchases through the Site, you may be asked by the merchant or information or service provider from whom you are making the purchase to supply certain information, including credit card or other payment mechanism information. You agree not to hold {{env("COMPANY")}} liable for any loss or damage of any sort incurred as a result of any such dealings with any merchant or information or service provider through the Site. You agree that all information you provide any merchant or information or service provider through the Site for purposes of making purchases will be accurate, complete and current. The merchants and information and service providers offering merchandise, information and services through the Site set their own prices and may change prices or institute new prices at any time. You agree to pay all charges incurred by users of your account and credit card or other payment mechanism at the prices in effect when such charges are incurred. You also will be responsible for paying any applicable taxes relating to purchases through the Site.</p>

		<p>Miscellaneous. The Terms of Service and the relationship between you and {{env("COMPANY")}} shall be governed by the laws of the State of Georgia without regard to its conflict of law provisions. You and {{env("COMPANY")}} agree to submit to the personal and exclusive jurisdiction of the courts located within the state of Virginia.</p>

		<p>The failure of {{env("COMPANY")}} to exercise or enforce any right or provision of the Terms of Service shall not constitute a waiver of such right or provision. If any provision of the Terms of Service is found by a court of competent jurisdiction to be invalid, the parties nevertheless agree that the court should endeavor to give effect to the parties' intentions as reflected in the provision, and the other provisions of the Terms of Service remain in full force and effect.</p>

		<p>Pricing. By using this site you acknowledge and agree that {{env("COMPANY")}} provides listing prices only as a guide. Pricing is determined at the time or print/e-file and is subject to change at any time without prior notice.</p>
	</div>
</section>

@endsection