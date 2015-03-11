=== Donate With Robokassa ===
Contributors: Malgin
Donate link: http://vertdider.com/pomoshh-proektu/
Tags: donation, robokassa
Requires at least: 3.6.1
Tested up to: 3.6.1
Stable tag: 1.0.3
License: MIT
License URI: http://opensource.org/licenses/MIT

'Donate With Robokassa' WordPress plugin helps you accept donations on your WP website with Robokassa (http://robokassa.ru/)!

== Description ==

* Author: [Malgin](https://github.com/Malgin)
* Project URL: <https://github.com/Malgin/dwr-wp-plugin>

Описание на русском языке доступно на [официальной Github странице плагина](https://github.com/Malgin/dwr-wp-plugin "Donate With Robokassa").

Robokassa is a payment aggregator, which helps you accept payment via a wide variety of methods, including QIWI, WebMoney, Yandex.Money, Money@Mail.ru, with different Mobile Operators (Megafon, MTC), via terminals, and others!

With this plugin, you will be able to add a robokassa widget with a field for arbitrary amount of donation, or you can add a compact button to your pages/sidebars which will lead to the robokassa payment page with default donation value, which could be set on plugin settings page!

= Donations =
I do not accept donations, but I would be very gratitude if you will donate to [science popularization project](http://vertdider.com/pomoshh-proektu/ "Vert Dider") I work on as a volunteer.

= Bugs & Feature requests =
If you like my plugin, but find a bug in it, please create a bugreport on it's [official Github repository page](https://github.com/Malgin/dwr-wp-plugin/issues)
Also, if you have an idea how to improve the project further, please create feature requests [there, too](https://github.com/Malgin/dwr-wp-plugin/issues).

= Prerequisites =

* In order to use this plugin, you should be familiar with Robokassa system. You can read about it on [Robokassa official website](http://robokassa.ru/) (ru).
* This plugin _currently_ works only if Permalink Settings changed from Default.

= Shortcodes =
This plugin supports one shortcode: **[dwr_payment_widget]**. Inserting just this shortcode in an article, or on a page, will result in a widget with a field for arbitrary donation to appear on the page.

In order to insert **compact widget button**, you should add an empty 'compact' parameter to the shortcode, like this: **[dwr_payment_widget compact]**.

**Warning!** If required (which are all) options are not set in the plugin settings page, a warning message will be displayed instead of a widget.

== Installation ==
You need to follow these FIVE (*one of two* at the end is optional) simple steps:

1. Download a plugin and copy it to 'site-root-dir/wp-content/plugins/donate-with-robokassa' folder (or install it from "Plugins -> Add new" menu in the admin panel. You can find it using plugin search.).
2. In admin panel of the site, activate the plugin (You can do it under "Plugins -> Installed Plugins" menu).
3. Go to Settings -> Donate With Robokassa (DWR) page and fill in all the required fields (more details on this here).
4. Add [dwr_payment_widget] shortcode anywhere on the website where you would like to see robokassa donation widget.
5. (Optional) Create two pages, one of which will inform your users about the success of the operation, and probably, thank them for the donation, and other will inform them that operation has failed. Make their URLs nice and informative (you will pass these URLs in Robokassa admin panel as Success URL and Fail URL, both with GET method).
6. (Optional) Instead of creating separate pages, you could just set Success URL anf Fail URL to point to your websire homepage. But this is bit rude.

That's it! You're all set up.

== Plugin Settings ==
There's two settings sections for the plugin:

* Settings -> Donate With Robokassa (DWR)
* Settings -> DWR Statistics

= Donate With Robokassa (DWR) Settings page =
On this page, there's a list of options, required to be set before a plugin could operate.

* Robokassa Result URL.
This option describes a part of Robokassa Result URL (a parameter in Robokassa shop settings), which will be attached to your website hostname.
It is recommended to leave this option with a default value. Change it only if you understand what are you doing.
_Example_: Your website is http://myonlineblog.com/. If 'Robokassa Result URL' setting will be default (i.e. 'robokassa_result'), then you should
set Result URL on Robokassa shop settings page to **http://myonlineblog.com/robokassa_result**.

* Robokassa Result URL Method
This should be the same, as on Robokassa shop settings page for Result URL.

* Merchant Login
This is a so called **shop identifier**. You can find it on the settings page of your shop in Robokassa shop admin panel.

* Merchant Password #1 & Merchant Password #2
Should be the same as the values you set in shop settings.

* Default donation amount
The default amount set to the widget with a field for specifying donation, and default amount which will be used for a compact button.

* Robokassa transaction description
The description of a Robokassa shop transaction. Will be displayed in the list of operations in admin panel of the shop.

* Force delete tables
If this checkbox is set, on deactivation of a plugin a table with all transactions will be deleted.
**Warning!** A table holds all transaction history, and if lost, all statistics will be lost too! (Though transaction history could be
viewed in the admin panel of the shop)

= DWR Statistics =
Currently, this page only displays a list of last 100 donations with a very basic statistics. I *plan* to work on this part more, and make statistics more representative.

== Localization ==
The plugin is localized for **Russian** and **English** languages.

== Once Again ==
The plugin will not delete it's DataBase table ('dwr_donations') on deactivation, due the possibility of loosing all donations history.
This mean that you can deactivate a plugin, and then re-activate it, and all previous statistics will be available.
There's a checkbox on the parameters page of the plugin to force delete the table on deactivation.

== Screenshots ==

1. Robokassa widget with a field for arbitrary amount of donation.
2. Compact button.

== Changelog ==

= 1.0.3 =
* Fix issue with screenshots don't display on the Screenshots section of the plugin page in WP plugin repository.

= 1.0.2 =
* Fix issue with wrong version displaying on the WP plugin repository page.
* Fix few misspellings in readme files

= 1.0.1 =
* Update README.md file
* Add readme.txt file for WP Plugin Repository

= 1.0.0 =
* First public release of the plugin
