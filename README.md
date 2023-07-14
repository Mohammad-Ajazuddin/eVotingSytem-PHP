# eVotingSytem-PHP
Simple evoting system using php.
Admin page is yet to complete.
As of now I didn't hash the passwords and I used the sql queries directly, you can create the prepared statments.

To use it extract this folder in htdocs folder.
start the XAMPP server and MySQL.
Go to MySQL Admin (localhost/phpmyadmin)
Create a database named "evotingsystem"
And tables
Table name : candidates
Fields 
candidate_id (primary key auto increment)
name
vote_count
Fill these with some data as of now as these will be filled by admin which is yet to create.
Table name : loginusers
Fields
id (primary key auto increment)
username (unique)
password

Table name : voters
Fields
id (primary key autoincrement)
firstname
lastname
username
status (set default as NOTVOTED)
voted-to (set default as null)

Table name: admin
Fields
id (primary key autoincrement)
admin_name
password

run in browser by
localhost/evotingsystem/index.php
You can register, login, submit a vote, view your profile and change your password.
