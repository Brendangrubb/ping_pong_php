# **PHP Ping Pong**
#### Stella Huayhuaca, Brendan Grubb, 2/13/2017

&nbsp;
## Description

Ping Pong is a number game created to display my understanding of arrays, looping and Behavior Driven Development in PHP. To play, enter a number into the input field and click submit. A list of numbers starting with 1 and ending with the user's chosen number will appear below. There are three exceptions: any number in the list divisible by 3 will be replaced with the word 'ping', any number in the list divisible by 5 will return the word 'pong' and any number divisible by 15 will return the word 'pingpong'. It ignores all numbers with decimal points, all numbers less than 1 and all non numerical characters.


&nbsp;
## Specifications

|Behavior|Input|Output|
|--------|-----|------|
| Program will list numbers from 1 to number inputted by user | 2 | [1, 2] |   
| Program will replace all numbers divisible by 3 with the word 'ping' | 4 | [1, 2, ping, 4] |
| Program will replace all numbers divisible by 5 with the word 'pong' | 10 | [1, 2, ping, 4, pong, ping, 7, 8, ping, pong] |
| Program will replace all numbers divisible by 15 with the word 'pingpong' | 15 | [1, 2, ping, 4, pong, ping, 7, 8, ping, pong, 11, ping, 13, 14, pingpong] |



&nbsp;
## Setup/Installation Requirements
##### _To view and use this application:_
* You will need the dependency manager Composer installed on your computer to use this application. Go to [getcomposer.org] (https://getcomposer.org/) to download Composer for free.
* Go to my [Github repository] (https://github.com/Brendangrubb/address_book)
* Download the zip file via the green button
* Unzip the file and open the **_ping_pong-master_** folder
* Open Terminal, navigate to **_ping_pong-master_** project folder, type **_composer install_** and hit enter
* Navagate Terminal to the **_ping_pong-master/web_** folder and set up a server by typing **_php -S localhost:8000_**
* Type **_localhost:8000_** into your web browser
* The application will load and be ready to use!

&nbsp;
## Known Bugs
* No known bugs

&nbsp;
## Technologies Used
* PHP
* Silex
* Twig
* Composer
* Bootstrap
* CSS
* HTML

&nbsp;
_If you have any questions or comments about this program, you can contact me at [brendangrubb@gmail.com](mailto:brendangrubb@gmail.com)._

Copyright (c) 2017 Brendan Grubb

This software is licensed under the GPL license
