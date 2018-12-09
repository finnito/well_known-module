# PyroCMS 3: Well Known Module
*__Author:__ Finn LeSueur*

## What is */.well-known/*?
[A draft standard (RFC5875) that "defines a path prefix for “well-known locations”, “/.well-known/”, in selected Uniform Resource Identifier (URI) schemes."".](https://tools.ietf.org/html/rfc5785)

The idea behind this is to standardise a set of URLs which link to useful resources inside a website. The most common example being:

`/.well-known/change-password` => `/users/change-password`

This module implements the common redirects defined by the draft standard, and allows for this customistion in the case that your URLs are not standard to a PyroCMS 3 installation.

Each redirect can also be disabled if it is not applicable to your website.

## Installing finnito/well_known-module
Add this Github repository to your `composer.json` and require `finnito/well_known-module`.

```
"repositories": [
	{
		"type": "vcs",
		"url": "https://gitlab.com/finnito/well_known-module"
	}
]
```

Alternatively, if you are installing multiple of my PyroCMS 3 packages, you may wish to add my Composer repository to your `composer.json` instead.

```
"repositories": [
	{
		"type": "composer",
		"url": "https://packages.finnito.nz"
	}
]
```

### Bugs & Feature Requests
If you run into a bug or have a feature you'd like to request, [open an issue](https://gitlab.com/Finnito/well_known-module/issues) or [file a pull request](https://gitlab.com/Finnito/well_known-module/merge_requests).
