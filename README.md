# instaconsult
On Demand Business/Finance Consultancy
Work in Progress

@netham91 Check the dump file to get an idea of the schema. All the logic and everything resides in Slim/index.php
 So the first login request will be like http://www.example.com/Slim/index.php/login

 Use a chrome plugin to send rest api requests



Finished API Endpoints.
1)/login. Send username and password.   (Uses PHP Sessions) POST request
2)/profile. Simply send a get request.. I will display the data for the correct user who has logged in. If not logged in he will be redirected to /login. You have to change frontend also accordingly.
3)/open_project. GET Give project details of all the open projects available.




The code quality now is very poor since being a novice I am experimenting with various methods. I dont want to waste time on write beautiful/easy to read code as of now.Once atleast a few modules are neatly working, I will organise stuff into libs, use redbeans, make function. Please bear with this for sometime. Any doubt in the code, please PM me.
