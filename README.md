# eVotingSytem-PHP
Simple evoting system using php.<br>
Admin page is yet to complete.<br>
As of now I didn't hash the passwords and I used the sql queries directly, you can create the prepared statments.<br>

<h2>To use it extract this folder in htdocs folder.<br>
start the XAMPP server and MySQL.<br>
Go to MySQL Admin (localhost/phpmyadmin)<br>
Create a database named "evotingsystem"<br></h2>
And tables<br>
<h3>Table name :candidates</h3>
<h4>Fields:</h4>
candidate_id (primary key auto increment)<br>
name<br>
vote_count<br>
Fill these with some data as of now as these will be filled by admin which is yet to create.<br>
<h3>Table name :loginusers</h3>
<h4>Fields:</h4>
id (primary key auto increment)<br>
username (unique)<br>
password<br>

<h3>Table name :voters</h3>
<h4>Fields:</h4>
id (primary key autoincrement)<br>
firstname<br>
lastname<br>
username<br>
status (set default as NOTVOTED)<br>
voted-to (set default as null)<br>

<h3>Table name : admin</h3>
<h4>Fields:</h4>
id (primary key autoincrement)<br>
admin_name<br>
password<br>

<h2>run in browser by</h2>
localhost/evotingsystem/index.php<br>
You can register, login, submit a vote, view your profile and change your password.<br>
