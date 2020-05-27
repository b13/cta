# EXT:cta

## About this extension

This extension adds dedicated fields for creating cta elements and optionally adds a new stand alone cta element to your 
TYPO3 project with a simple Fluid template for frontend rendering.
It is intended as a basis to add link and cta functionality to your custom content elements like teasers, text elements,


Three fields are being added to table `tt_content`: `link`, `linklabel` and `linkconfig`; `linkconfig` is rendered 
as a dropdown by default.

To add CTA fields to other content elements you can make use of two different palettes:

* `linklabel` renders a link field and a corresponding link label field,
* `linklabelconfig` adds a third field for additional configuration options per link.

## Installing

Use composer to add this content element to your project

`composer require b13/cta`

and install the extension using the Extension Manager in your TYPO3 backend.

### Use the example cta element

If you want to make use of the basic cta element included as an example, add the TypoScript setup to your site-Extension
setup:

`@import 'EXT:cta/Configuration/TypoScript/setup.typoscript'`

To add the element to the new content element wizard, also include the PageTSConfig in your templates:

`@import 'EXT:cta/Configuration/PageTs/PageTs.tsconfig'`

This will add the CTA element to the "common" tab (you can change this within your PageTSConfig of course).

### Customizing

To make use of your own Fluid template add your template within your site-Extension using the template name "cta.html".

By default the content element will show four fields:
- Layout
- Link
- Link label
- Link configuration

To remove fields you don't need, use PageTSConfig within your template configuration, like this:

`TCEFORM.tt_content.layout.types.ce_cta.disabled = 1`

or better yet, use `columnsOverride` configuration in your TCA.

To add options to the dropdown for either one of the dropdown fields, use PageTSConfig like this:

`TCEFORM.tt_content.b13_linkconfig.types.ce_cta.addItems.inverted = Inverted Button`

or, again, use `columnsOverrides` in your TCA configuration.


## License

As TYPO3 Core, _cta_ is licensed under GPL2 or later. See the LICENSE file for more details.

## Background, Authors & Further Maintenance

TYPO3 is highly configurable and it is easy to add custom content types or fields to the system using a few lines of TCA 
configuration, a simple PageTS configuration to add the type to the list of elements in the New Content Element Wizard,
and a few lines of TypoScript and a Fluid Template. 
This extension adds a content type in the same way we create custom content types for our TYPO3 projects at 
[b13](https://b13.com).

`EXT:cta` was initially created by David Steeb in 2017 for [b13, Stuttgart](https://b13.com). We use this as a basis to add 
cta fields to `tt_content`, render buttons and cta links, add cta elements to other content types (like adding a call to 
action to a textmedia element) and as a general purpose "read more"-type of link field for teasers, sliders and lots of 
different content types in general.

[Find more TYPO3 extensions we have developed](https://b13.com/useful-typo3-extensions-from-b13-to-you) that help us deliver value in client projects. As part of the way we work, we focus on testing and best practices to ensure long-term performance, reliability, and results in all our code. 
