<!doctype html>

<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Requirements page</title>
	<link rel="stylesheet" href="reqStyle.css">
</head>
<body>

<h1>CMP204 Requirements Page</h1>

<p>If you have not met a requirement, do not delete it from the table.</p>

<table>
  <tr>
    <th class="reqCol">Requirement</th>
    <th class="metCol">How did you meet this requirement?</th>
    <th class="fileCol">File name(s), line no.</th>
  </tr>
  <tr>
    <td>A clear use of HTML5</td>
    <td>
		In each of my files, I make use of the <<code>!DOCTYPE html</code>> header which specifies that we are using HTML5 at the top of each file.
	</td>
    <td>	
		coursework/index.php, line no.1<br>
		coursework/Coldplay-Music.php, line no.1<br>
		coursework/Coldplay-Tours.php, line no.1<br>
		coursework/Coldplay-Login.php, line no.1<br>
		coursework/Coldplay-About.php, line no.1<br>
		coursework/Coldplay-Gallery.php, line no.1<br>
		coursework/Coldplay-Privacy.php, line no.1<br>
		
	</td>
  </tr>
  <tr>
    <td>Use of the Bootstrap framework providing a responsive layout </td>
    <td>
		I have implemented Bootstrap 3 on every web page to provide a responsive layout to the user, such as using the two types of containers and making use of the
		bootstrap grid sytem to set out my content in my web pages. In all my pages, there is a bootstrap navbar which is resizable to the page and helps the user navigate to the other web pages.
		In my music page, I made use of a carousel of albums and when clicked it would direct you to that album with its
		track listings. In addition, the music page makes use of the BS grid system which stacks nicely when resized, as well as the 'Coldplay-About' page which has the image of the band 
		members alongside their biography on the right side of the page. The gallery page also utilises the BS grid system to layout the images of the band Coldplay.
	</td>
    <td>
		coursework/index.php, line no.27-38<br>
		coursework/Coldplay-Music.php, line no.27-38<br>
		coursework/Coldplay-Tours.php, line no.21-32<br>
		coursework/Coldplay-Login.php, line no.29-40, 44-59<br>
		coursework/Coldplay-About.php, line no.21-32, 36-303<br>
		coursework/Coldplay-Gallery.php, line no.21-32, 35-153<br>
		coursework/Coldplay-Privacy.php, line no.35-74<br>
		footer.php<br>
	</td>
  </tr>
  <tr>
    <td>Use of JavaScript to manipulate the DOM based on an event</td>
    <td>
		I implemented an onclick event for a glyphicon button, that when clicked will change the color of the song 'Everyday Life' and put an alert on screen, saying they are currently playing that song.
		This will give the impression that they are playing that current song, and changing the color of the song Everyday Life on the track listing will help make this clear. I also
		fulfilled this requirement as well in order to get my countdown clock so that when the time on the clock is 0, it will then create a href attribute on the button, and change the text so that it says "Buy Tickets: Now Available", making it clear to the user that the tickets are now available and that when clicked will take them to a website to then purchase the tickets, else when the button is clicked and the time on the clock is not 0 it will pop up with an alert saying that the tickets are not available yet.
	</td>
    <td>
		first requirement:
		coursework/Coldplay-Music.php, line no.122<br>
		coursework/scripts/javascript/activeSong.js<br>
		second requirement (for clock):
		coursework/Coldplay-Tours.php, line no.39<br>
		coursework/scripts/javascript/countdownClock.js line no. 16-32<br>
	</td>
  </tr>
  <tr>
    <td>JavaScript loading of dynamically changing information</td>
    <td>
		I implemented a clock that countdowns the amount of days, hours, minutes and seconds till the next amount of tickets are sold. The clock is constantly changing while on display.
	</td>
    <td>
		coursework/Coldplay-Tours.php, line no.37<br>
		coursework/scripts/javascript/countdownClock.js line no. 1-14<br>
	</td>
  </tr>
  <tr>
    <td>Use of jQuery in conjunction with the DOM</td>
    <td>
		I implemented a sliding panel on the 'Coldplay-About' page and whenever it the user hovers over it, it collapses down to reveal background information about Coldplay.
		I also added an event that if the user is hovering over the '.infoPanel' which is where the information is, it will remain slid down so the user can read the information, rather than having it so
		the user has to have their mouse over the '.toggle' in order to read their information.
	</td>
    <td>
		coursework/Coldplay-About.php, line no. 38-61<br>
		coursework/scripts/jquery/slidingPanel.js<br>
	</td>
  </tr>
  <tr>
    <td>Use of a jQuery plugin to enhance your application</td>
    <td>
		I used a marquee plugin on my homepage with scrolling links to news relating to Coldplay just beneath my navbar. It pauses when on hover and it travels from the right of the page
		to the left page at a reasonable speed.
	</td>
    <td>
		coursework/index.php, line no. 40-55<br>
		coursework/scripts/jquery/scrollbar.js<br>
	</td>
  </tr>
  <tr>
    <td>Use of AJAX (pure JavaScript i.e. without the use of a library)</td> 
    <td>
		I fulfilled this requirement by using an onclick event and fetching a file that would send information to display about the song 'Everyday Life'.
	</td>
    <td>
		coursework/Coldplay-Music.php, line no. 125<br>
		coursework/scripts/ajaxx/fetchInfo.js line no. ALL<br>
	</td>
  </tr>
  <tr>
    <td>Use of the jQuery AJAX function</td>
    <td>
		On my 'Coldplay-Gallery' page I implemented a click event on a button that when pressed will show more information from a text file for the images in that row, basically a button 
		for each row that when clicked will show more information in the caption for each image. When I loaded the information, I had to use the DOM to modify the caption of the images in
		that row so that the text from the ajaxx fit inside the caption.
	</td>
    <td>
		coursework/Coldplay-Gallery.php, line no. 41-67, 69-95, 97-123, 125-151<br>
		coursework/scripts/ajaxx/loadInfo.js<br>
	</td>
  </tr>
  <tr>
    <td>User login functionality (PHP/MySQL)</td>
    <td>
		I implemented a login on the Coldplay-Login.php which is also able to logout as well.
		Users are able to see their profile and I used it to test echo statements with usernames and passwords to ensure it was working correctly.
		If unauthenticated users manage to gain access to the or try to authenticate themselves by knowing the correct php files, it is programmed to send them
		to the login page so they don't get to bypass the system. It connects to a database called myTable and login only requires a username and password. Once users
		are successfully authenticated via the authenticate.php it takes them to home.php where they are given options to look at their profile or logout. Sessions are 
		used to remember user data, and are used on each of the .php files except Coldplay-Login.php.
		<br>admin credentials:<br>
		Username: admin<br>
		Password: !Test123<br>
		normal user:<br>
		Username: guest<br>
		Password: test<br>
	</td>
    <td>
		coursework/Coldplay-Login.php, line no. 45-58<br>
		coursework/authenticate.php, line no. ALL<br>
		coursework/logout.php, line no. ALL<br>
		coursework/profile.php, line no. ALL<br>
	</td>
  </tr>
  <tr>
    <td>Admin section of the website (PHP/MySQL)</td>
    <td>
		I altered my table that I was storing my user data in to include an extra column called 'Admin'. This column included a single integer
		that would either hold '1' or '0'. Users who have value 1 are admins are going to be able to login and be directed to the admin part of the
		site, while other users who have 0 will not have this priviledge. I made an extra file called 'admin.php' that admins will be taken to once
		they have logged in, while normal users will be directed elsewhere. I changed my authenticate php to include it so that it pulls in the
		Admin column as well as the ID and Password for the SQL statement. I was then able to create a new session variable that would tell if users
		were admin by checking the Admin column to see if it were greater than 0, and if it was then a variable would be set to true, therefore 
		gaining them access to the admin page, vice versa for normal users who would be taken to home.php instead. if any non-authenticated users
		do try to gain access to admin.php then they will be taken to the Coldplay-Login.php where they will have to sign in, or if normal users try to do so.
		On the admin page, admins are able to see the contents of the database.
	</td>
    <td>
		change made to authenticate.php, line no. 41 (pull in Admin column), line no. 63-71<br>
		coursework/admin.php, line no. ALL
	</td>
  </tr>
  <tr>
    <td>Ability to select, add, edit and delete information from a database (PHP/MySQL)</td>
    <td></td>
    <td></td>
  </tr>
  <tr>
    <td>Appropriate consideration of relevant laws</td>
    <td>
		I implemented a new web page Coldplay-Privacy.php which looks at GDPR and Cookie law, outlining what my website's purpose is. 
	</td>
    <td>
		coursework/Coldplay-Privacy.php, line no. ALL<br>
		note: link to page can only be found in the footer of all main pages (i.e. coursework/footer.php) alongside social media links<br>
	</td>
  </tr>
  <tr>
    <td>Security measures</td>
    <td>
		I used post method for my form to avoid having information leaked in the url and used it in my authenticate.php to call the value from the form in a secure way. 
		I mention for validation of user input that a user is not able to send a blank forum for a login - they have to fill out the username and password fields if they want to login.
		There is also a character length on both the username and password fields. I also made sure that any pages where authentication is needed that it will not accept users who have not logged in.
		if an unauthenticated user tries to access the login pages it will kick them to the login page, but if a logged in user tries to access any of the admin pages, it will kick them to home.php since they are not admin.
		I also had to make changes to my authenticate.php to change username and password to be trimmed and use htmlspecialchars() to prevent it from XSS attacks.
		I also had to modify the code to prevent the use of slashes so this would prevent script tags being placed into the login fields - sql injection.
		I also had to make the username and password info more safe to place in a query by using mysqli_real_escape_string().
	</td>
    <td>
		validation of userinput: <br>
		coursework/Coldplay-Login.php, line no. 49, 52<br>
		kick users who are not logged in or are not admin: <br>
		coursework/home.php, line no. 3-10<br>
		coursework/profile.php, line no. 3-8<br>
		coursework/admin.php, line no. 2-11<br>
		xss attack prevention: <br>
		coursework/authenticate.php, line no. 35-38<br>
		slash tag prevention: <br>
		coursework/authenticate.php, line no. 27-28<br>
		safe query for mysqli_real_escape_string(): <br>
		coursework/authenticate.php, line no. 30-31<br>
		
	</td>
  </tr>
  <tr>
    <td>SQL queries should be written as prepared statements</td>
    <td>
		I implemented a prepared statement in my authentication.php that will allow parameters to be passed into the Username column (where Username = ?) and other files.
	</td>
    <td>
		coursework/authenticate.php, line no. 33-43<br>
		coursework/profile.php, line no. 22-31<br>
	</td>
  </tr>
  <tr>
    <td>Passwords should be salted and hashed</td>
    <td>
		Once I had the basic form of the user login functionality, I then proceeded to implement password hashing and salting into my passwords stored in the database. I echoed the password
		into a password hash function and then copy and pasted that into my database, so that was the hash stored in there as well as the salt, due to the fact I used the password_hash
		function(). I used the '$Password' and 'PASSWORD_DEFAULT' arguments into my password_hash() function. Salting was easily done as the PASSWORD_DEFAULT uses the bcrypt algorithm which 
		has a natural occuring salt and was more than easy to implement. In my authenticate.php, 'password_verify' function is used to verify the password against the password hash
		without needing information for the salt or hashing algorithm.
	</td>
    <td>
		coursework/authenticate.php, line no. 42-54<br>
	</td>
  </tr>
  <tr>
    <td>Validation of user input</td>
    <td>
		I implemented it so that the username and password fields in the login page can not be left blank via the 'required' attribute, therefore the form will not be submitted when the login button is pressed.
		An error message appears if any of the fields are left blank.
	</td>
    <td>
		coursework/Coldplay-Login.php, line no.49, 52<br>
	</td>
  </tr>
  
  <tr>
    <td>Any other relevant security features</td>
    <td></td>
    <td></td>
  </tr>
</table>
		
</body>
</html>



