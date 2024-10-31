=== SEO Slugs ===
Contributors: `Stephan Muller
Tags: seo, slug, wordpress, plugin, url, file name, search engine, dutch
Requires at least: 2.0.2
Tested up to: 3.3.1
Stable tag: trunk 

Removes common words like 'de', 'het', 'bij' from post slugs to improve SEO.

== Description ==

The SEO Slugs Wordpress plugin removes common words like 'de', 'het', 'bij' from post slugs to improve search engine optimization.

For example, when you publish a post with a title like this: 

"Vijf Tips Om Hoger In Google Te Scoren",

Wordpress automatically assigns a long filename to your post, called a post slug:

/vijf-tips-om-hoger-in-google-te-scoren

SEO Slugs plugin strips common words like "om", "in" or "te" out of your post slug to make it more search engine friendly. With SEO Slugs plugin activated, the slug for our example blog post would look like this:

/vijf-tips-hoger-google-scoren

The slug is generated on saving a post (so you get a chance to look at it before publishing, and change it), or on publish. It won't overwrite an existing slug. You can force a new slug generation by deleting the existing one.


== Installation ==

1. Upload 'seo-slugs-dutch.php' to the '/wp-content/plugins/' directory.
2. Activate the plugin through the 'Plugins' menu in WordPress

Now, when editing a post, give it a title and press Save and Continue Editing. The SEO Slugs plugin will generate a slug. If you edit it, the plugin will honor your slug and won't change it.

