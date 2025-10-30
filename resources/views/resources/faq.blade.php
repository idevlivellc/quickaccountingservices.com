@extends('templates.website')

@section("title", "")

@section('content')

@component('Components.PageHeader', [
		"breadcrumb" => [
			[
				"url" => url(""),
				"text" => "Home"
			],
			[
				"url" => url("resources"),
				"text" => "Resources"
			],
			[
				"url" => url("resources/faq"),
				"text" => "FAQs"
			]
		]
	])
	@slot('title')Frequently Asked Questions @endslot
	@slot('description')Get answers to the most common questions about our firm & services.@endslot
@endcomponent

@php
	$faqs = [
		[
			"question" => "What type of businesses do you work with?",
			"answer" => "We serve small to mid-sized businesses across various industries — including retail, construction, professional services, and eCommerce. Whether you're a startup or an established firm, we customize our services to fit your business model and growth stage."
		],
		[
			"question" => "Do you only work with QuickBooks?",
			"answer" => "While we specialize in QuickBooks bookkeeping and setup, our team also works with other major accounting platforms. Our goal is to help you manage your finances efficiently — using whichever accounting software best fits your business needs."
		],
		[
			"question" => "Are you affiliated with Intuit or QuickBooks?",
			"answer" => "No, Quick Accounting Services is an independent accounting and bookkeeping firm. We are not affiliated, endorsed, or associated with Intuit Inc. or QuickBooks. All trademarks are property of their respective owners and are used only for descriptive purposes."
		],
		[
			"question" => "How does your pricing work?",
			"answer" => "We offer transparent, flexible pricing based on the complexity and volume of your bookkeeping or accounting needs. Each plan can be customized or bundled — ensuring you only pay for what you need. You can view our pricing details or request a personalized quote."
		],
		[
			"question" => "What's included in your bookkeeping services?",
			"answer" => "Our bookkeeping packages typically include transaction categorization, bank reconciliation, accounts payable and receivable management, and monthly financial statements. We also provide periodic performance reports to help you stay on top of your finances."
		],
		[
			"question" => "Can you help me set up QuickBooks for my business?",
			"answer" => "Yes, our team can assist with full QuickBooks setup — including company profile creation, chart of accounts setup, and bank feed integration. We also offer personalized consultation to help you understand how to use QuickBooks effectively for your day-to-day accounting tasks."
		],
		[
			"question" => "Do you offer one-time services or only monthly plans?",
			"answer" => "We provide both options. You can choose a one-time QuickBooks setup or data cleanup, or subscribe to a recurring monthly bookkeeping or accounting plan. Each package is flexible and designed to fit your ongoing needs."
		],
		[
			"question" => "How secure is my financial data with you?",
			"answer" => "We follow strict data protection standards and use encrypted communication to ensure the privacy and safety of your financial information. Your data is handled confidentially and never shared with third parties without your consent."
		],
		[
			"question" => "What's the process for getting started?",
			"answer" => "You can get started by filling out our contact form or requesting a consultation. We'll schedule a quick discussion to understand your business requirements, recommend the right plan, and provide a customized quote based on your needs."
		],
		[
			"question" => "Can I upgrade or change my service plan later?",
			"answer" => "Absolutely. You can modify, upgrade, or combine services at any time. Our flexible structure allows you to scale your plan as your business grows or your accounting needs evolve."
		]
	];
@endphp

<section>
	<div class="container">
		@component('Components.Faq', ["faqs" => $faqs])@endcomponent
		{{-- <ul class="collapsible">
			<li>
				<div class="collapsible-header">
					<p>{{ $question }}</p>
				</div>
				<div class="collapsible-body">
					<p>{{ $answer }}</p>
				</div>
			</li>
		</ul> --}}
	</div>
</section>

@endsection

@section('script')
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "FAQPage",
  "mainEntity": [
    {
      "@type": "Question",
      "name": "What type of businesses do you work with?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We serve small to mid-sized businesses across various industries — including retail, construction, professional services, and eCommerce. Whether you're a startup or an established firm, we customize our services to fit your business model and growth stage."
      }
    },
    {
      "@type": "Question",
      "name": "Do you only work with QuickBooks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "While we specialize in QuickBooks bookkeeping and setup, our team also works with other major accounting platforms. Our goal is to help you manage your finances efficiently — using whichever accounting software best fits your business needs."
      }
    },
    {
      "@type": "Question",
      "name": "Are you affiliated with Intuit or QuickBooks?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "No, Quick Accounting Services is an independent accounting and bookkeeping firm. We are not affiliated, endorsed, or associated with Intuit Inc. or QuickBooks. All trademarks are property of their respective owners and are used only for descriptive purposes."
      }
    },
    {
      "@type": "Question",
      "name": "How does your pricing work?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We offer transparent, flexible pricing based on the complexity and volume of your bookkeeping or accounting needs. Each plan can be customized or bundled — ensuring you only pay for what you need. You can view our pricing details or request a personalized quote."
      }
    },
    {
      "@type": "Question",
      "name": "What's included in your bookkeeping services?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Our bookkeeping packages typically include transaction categorization, bank reconciliation, accounts payable and receivable management, and monthly financial statements. We also provide periodic performance reports to help you stay on top of your finances."
      }
    },
    {
      "@type": "Question",
      "name": "Can you help me set up QuickBooks for my business?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Yes, our team can assist with full QuickBooks setup — including company profile creation, chart of accounts setup, and bank feed integration. We also offer personalized consultation to help you understand how to use QuickBooks effectively for your day-to-day accounting tasks."
      }
    },
    {
      "@type": "Question",
      "name": "Do you offer one-time services or only monthly plans?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We provide both options. You can choose a one-time QuickBooks setup or data cleanup, or subscribe to a recurring monthly bookkeeping or accounting plan. Each package is flexible and designed to fit your ongoing needs."
      }
    },
    {
      "@type": "Question",
      "name": "How secure is my financial data with you?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "We follow strict data protection standards and use encrypted communication to ensure the privacy and safety of your financial information. Your data is handled confidentially and never shared with third parties without your consent."
      }
    },
    {
      "@type": "Question",
      "name": "What's the process for getting started?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "You can get started by filling out our contact form or requesting a consultation. We'll schedule a quick discussion to understand your business requirements, recommend the right plan, and provide a customized quote based on your needs."
      }
    },
    {
      "@type": "Question",
      "name": "Can I upgrade or change my service plan later?",
      "acceptedAnswer": {
        "@type": "Answer",
        "text": "Absolutely. You can modify, upgrade, or combine services at any time. Our flexible structure allows you to scale your plan as your business grows or your accounting needs evolve."
      }
    }
  ]
}
</script>
@endsection