MDD1303
=======

Project for Mobile Device Deployment 03/13

Project Name: BeThere

Root Directory:  http://localhost:8888/MDD1303/

SQL Dump Files located in SQL_Dump folder

Visual Framework is JQuery Mobile

PHP Framework is Codeigniter

----------------
NOTES:

Behind on development, after completing API proof of concept decided to move on to view as 
coding is difficult using frameworks that I am new to and have not had enough experience 
with JQuery mobile to know the complete design capabilities, after views are complete I 
will return to the styles.  Currently just implementing the JQuery mobile default view
in place of final design.  Want to verify everything is up and running before finalizing 
the look, this will also give the opportunity to verify that I have all the pages/features
the app will require hammered out. Adjusted Pivotal to reflect this change in process.

NEED TO KNOW:



Set config.php session key to THEKEY (required to use sessions in CI)

Set base_url to http://localhost:8888/MDD1303/

Config files for CI, added url helper and session lib to autoload

Map button on start page is for map test API

Disabled Ajax forms and links for JQuery Mobile


-----------------------------------------------------------------------------------------

Script and CSS Links:
External CDN Hosted:
<link rel="stylesheet" href="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.css" />
<script src="http://code.jquery.com/jquery-1.8.2.min.js"></script>
<script src="http://code.jquery.com/mobile/1.3.0/jquery.mobile-1.3.0.min.js"></script>

Internal/Local Hosted: currently not used
<link rel="stylesheet" href="application/jquery/jquery.mobile-1.3.0/jquery.mobile-1.3.0.min.css" />
<script src="application/jquery/jquery/jquery-1.9.1.js"></script>
<script src="application/jquery/jquery.mobile-1.3.0/jquery.mobile-1.3.0.min.js"></script>

-----------------------------------------------------------------------------------------

Database Info:

Name: be_there_db
Username: root
Password: root
Table List: user_info, location_info, there
Row List by Table:
	
	user_info: uid, username, password, firstname, lastname --> should add a zip column
	location_info: id, name, street, city, zip, phone
	there: id, uid, lid, arrive, leave

-----------------------------------------------------------------------------------------