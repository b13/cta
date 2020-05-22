# EXT:cta

## About this extension

This extension adds a new element to your TYPO3 project and includes a simple Fluid template for frontend rendering.
It is intended as a basis to add link and cta functionality to your custom content elements like teasers, text elements,


Three fields are being added to table `tt_content`: `link`, `linklabel` and `linkconfig`; `linkconfig` is rendered 
as a dropdown by default.

To add CTA fields to other content elements you can make use of two different palettes:

`linklabel` renders a link field and a corresponding link label field,

`linklabelconfig` adds a third field for additional configuration options per link.

## Installing

Use composer to add this content element to your project

`composer require b13/cta`

and install the extension using the Extension Manager in your TYPO3 backend.

Add the TypoScript setup to your site-Extension setup:

`@import 'EXT:cta/Configuration/TypoScript/setup.typoscript'`

To add the element to the new content element wizard, include the PageTSConfig in your templates:

`@import 'EXT:cta/Configuration/PageTs/PageTs.tsconfig'`

This will add the CTA element to the "common" tab (you can change this within your PageTSConfig of course).

## Customizing

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