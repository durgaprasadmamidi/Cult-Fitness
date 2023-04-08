# CultFitness


[:red_circle: Live ](http://esp.durgaprasad.live:4000/)



This project is part of my CMPE 272 Assignment.


You have to setup your own web prorgramming environment. The general goal is that we want you to setup an environment where you can reuse after school (say when you start your own company). Everything you learn from all the setups should be skills that will help you in and outside of school setting. Here are the requirements:

You must have your own domain name.
Your hosting environment must support Php programming.
Your hosting environment must support MySQL database.
Your hosting environment must be available publicly (on the Internet). 



Using your newly obtained web hosting solution. Perform the following:

Create / Makeup a company name
Create a company web site
The web site must contain the following sections:
Home (the main page)
About (Description about the company)
Products/Services (The products/services that you are going to sell)
News (Latest news about the company, products, etc.)
Contacts (Company contacts)


Based on the company web site you created in the last lab. Perform the following:

Add a secure section in the web site.
The secure section holds a document listing the current users of your web site. (You can make it up for now. Mary Smith, John Wang, Alex Bington, etc.)
The secure section requires login by an administrator. You can use the id "admin".
Use the userid and password authentication method discussed in class to implement the login process.


Based on the company web site you created. Perform the following:

Create a mySQL database for your company web site
Create a user table that contains at least first name, last name, email, home address, home phone and cell phone.
Create a User section/tab in your web site.
The User section should link to two forms:
User creation form with all the fields above.
User search form allowing search by names, email or phone numbers.
Create at least 20 users for your company.


Based on the company web site you created in the last two lab. Perform the following:

Modify the Products/Services section and add ten products/services in your company web site.
Each product/service should have their own page with descriptions and pictures.
Use web cookies technologies (as described in the class) to track the last five previously visited products.
Add a link in the Products/Services section to show the last five previously visited products.
 

Can you use web cookies to keep track of the five most visited products?
Add a link to show five most visited products to get credit.

Use CURL to implement the following:

For each company web site, create a php web app/link that shows a list of users from your own company.
Assume we have a group of 3 (Company A, Company B and Company C). Thus, we have
list_of_users_A that is stored in a database A in Company A host system
list_of_users_B that is stored in a database B in Company B host system
list_of_users_C that is stored in a database C in Company C host system
Each company web site needs to create a web link that shows list_of_users from all companies. You can access your local list_of_user via normal php database call, but you need to access remote company's database via CURL calls.
