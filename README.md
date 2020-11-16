# weather_info


<h3>Project Description:</h3></br>
Created a Project to display the temperature of various cities on particular dates.</br>

We have multiple options to select from:</br>
Country</br>
State</br>
city</br>
Date</br>

<h3>Requirements</h3>
1. Please make sure php is installed and running in your system</br>
2. Open browser and goto localhost/phpmyadmin</br>
   and create 1 databse named assignment. Now create four tables inside this database.</br>
   <b>Table 1:</b></br>
   CREATE TABLE country (</br>
   country_id int AUTO_INCREMENT PRIMARY KEY,</br>
   country_name varchar(25)</br>
   );</br>
   
   <b>Table 2:</b></br>
   CREATE TABLE state ( </br>
   state_id int AUTO_INCREMENT PRIMARY KEY, </br>
   state_name varchar(25),</br>
   country_id int</br>
   );</br>
   
   <b>Table 3:</b></br>
   CREATE TABLE city ( </br>
   city_id int AUTO_INCREMENT PRIMARY KEY, </br>
   city_name varchar(25),</br>
   state_id int</br>
   );</br>
   
   <b>Table 4:</b></br>
   CREATE TABLE temperature ( </br>
   id int AUTO_INCREMENT PRIMARY KEY, </br>
   date date,</br>
   city_id int,</br>
   temp int </br>
   );</br>   


<h3>Running the project </h3>
The easiest way to run the project is:</br>
1. Get this repository to your local system</br>
2. Goto the php installed files location and find htdocs</br>
3. paste this project inside the htdocs </br>
4. Open browser and goto localhost:/['folder_name']</br>

example: My folder is htdocs>weather_info</br>
         so url will be:  localhost/weather_info/</br>
        
