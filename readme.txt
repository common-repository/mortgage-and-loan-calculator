=== Simple Mortgage Calculator ===
Contributors: wpcream,acerdream
Donate link: 
Tags: mortgage calculator, loan calculator, loan amortization report, mortgage amortization table
Requires at least: 2.9
Tested up to: 4.0
Stable tag: 1.0
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

Let your website visitors calculate their mortgage/loan payments based upon the interest rates and loan amount entered(plugin + widget)

== Description ==
### Simple Mortgage Calculator Features ###
Visitors can:<br />
- change any values without reloading the page.<br />
- select "Calculate" and wait a few seconds for the results to appear.<br />

Plugin can be used inside any article by placing the following code:<br />
[simple-mortgage-calculator]<br />
If you want to use it as a widget just slide the "Monthly Mortgage Calculator" widget to your desired sidebar.

If you want to change the currency sign you can edit the following files and lines:

mortgage-calc.php<br />
- line 53 after each <code><td></code><br />
- line 62 after each <code><td></code><br />
- line 74 before <code></td></code>

monthly-mortgage-calc.php<br />
- line 31 before <code></td></code><br />

ps: If your server is using a php version less than 5.3.x then before installing plugin delete file "mortgage-calc.php" and rename file "mortgage-calc-for-php-less-than-3x.php" to "mortgage-calc.php".

### [Demo](http://wpcream.com/demo/simple-mortgage-and-loan-calculator-demo.php)  ###
### There is also a [Premium Mortgage and Loan Calculator Plugin](http://wpcream.com/premium-plugins/mortgage-and-loan-calculator.php) that has the following additional features:  ###
- Enter "Extra Payments" details but its not required.
- Enable the "Send report to email" option in case you want to have your report sent as an email for future comparison.
- Every time your visitor enables the email report you get results saved in your Wordpress database under table `wp_a_m_c_reports`.<br />
You can use that table for exporting reports and other useful data. Plugin uninstall also removes all related tables.

== Installation ==

1. Extract zip file locally.
1. Upload folder under /wp-content/plugins/ through ftp.
1. Log into your Wordpress admin section and enable Plugin.
1. If you want to use the widget as well just visit the Widget settings under the Appearance section.

== Usage ==
Plugin can be used inside any article by placing the following code:<br />
[simple-mortgage-calculator]<br />
If you want to use it as a widget just slide the "Monthly Mortgage Calculator" widget to your desired sidebar.

== Screenshots ==
1. shortcode.png
2. widget.png
3. logo.png


== Changelog ==

= 1.0 =
* Breakthrough Version.

== Upgrade Notice ==



== Arbitrary section ==



== A brief Markdown Example ==