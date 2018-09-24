# Clash-royal-community

This project was carried out as part of the web development course at the university in Hainaut 

This website allows users to add their best game decks, they can of course consult them, other users can also view them to find their suitable game styles and their favorite decks. These decks are therefore classified into categories to better sort them and help users.
The decks can also be modified by the user and the administrator (Fabio).
Users have a profile and the information can be modified. 

The website is of course completely secure.


Here is the interface of the website: 
![alt text](https://github.com/l-Legacy-l/Clash-royal-community/blob/master/images/clashroyalcommunity.PNG)


# Usage
#### Site administrator account 
 login: fabio
 password: Test123*

#### User account already created
 login: test
 password: test

 login: test2
 password: test2

### On Windows
Wamp server must be installed and started
1. Download or clone the project.
2. Place the files or the folder containing the file in the wamp directory i.e. C:/wamp/www
3. Import the clashroyal.sql database into localhost/phpmyadmin/
4. You must change the root password to access the database. The root password is Test123*

### For the mail sending
For email sending to work in the "contact" section you must: 
1. Place the sendmail folder in C:/wamp 
	The folder contains the sendmail.ini configuration file already configured with gmail. You can change this information if you want.

2. Then just retrieve the php.ini file and replace it or modify the sendmail_path field like this: ```
sendmail_path ="C:\wamp\sendmail\sendmail\sendmail.exe" ```

# Improvements
The web site can obviously be improved. 
* Improved front-end to match the game design

* Redesigning the backend using object-oriented programming 

* Fully respect the MVC design pattern


For more information on the implementation of the web site and database, you can consult the report (in french).

