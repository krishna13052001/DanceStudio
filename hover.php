
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="new_hover.css">
    <!-- <link rel="stylesheet" href="style.css"> -->
    	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<meta charset="utf-8">
    <style>
    	body 
{
margin: 0;
font-family: comic sans ms;
}
.topnav {
 overflow: hidden;
 background-color: #F2A124;
}
.topnav a {
float: left;
color: #;
text-align: center;
padding: 14px 16px;
text-decoration: none;
font-size: 17px;
}
.topnav a:hover {
color: black;
}
.topnav a.active {
background-color: #B7E9F7;
color: rebeccapurple;
}
body 
{
margin: 0;
}
/* Style the header */
.header {
background-color: #F2A124;
padding: 20px;
text-align: center;
}
    </style>
</head>
<body>
<div class="header">
<h1><b>DANCE STUDIO</b></h1>
</div>
</head>
<body>
<div class="menu-bar">
	<ul>
	<li><a href="Home Page.php"><i class="fa fa-home"></i>Home</a></li>
	<li><a href="aboutus.html"><i class="fa fa-user"></i>About Us</a>
		</li>
	<li  class="active"><a href="#"><i class="fa fa-sign-in"></i>Sign In</a>
		<div class="sub-menu-1">
			<ul>
			<li class="hover-me"><a href="admin.php">Admin</a>
				</li>
			<li class="hover-me"><a href="#">Teacher</a><i class="fa fa-angle-right"></i>
				<div class="sub-menu-2">
				<ul>
					<li><a href="Chor Login.php">Login</a></li>
					<li><a href="Chor Reg.php">Regestration</a></li>
					</ul>
				</div>
                </li>
			<li class="hover-me"><a href="#">User</a><i class="fa fa-angle-right"></i>
				<div class="sub-menu-2">
				<ul>
					<li><a href="Stu Login.php">Login</a></li>
					<li><a href="Stu Reg.php">Regestration</a></li>
					</ul>
				</div>
                </li>
			</ul>
			</div>
		</li>
        <li><a href="Photo Gallery.php"><i class="fa fa-picture-o"></i>Photo Gallery</a>
        </li>
	<li><a href="#"><i class="fa fa-sign-out"></i>Sign Out</a>
		</li>
	</ul>
	</div>



	<div class="container">
	<div class="card">
		<div class="imgbox">
			<a href="ballet1.php"><img src="pic-1.png" alt="Ballet Dance"></a>
		</div>
		<div class="content">
			<h2>Ballet Dance</h2>
			<p>Ballet (French: [balɛ]) is a type of performance dance that originated during the Italian Renaissance in the fifteenth century</p>
		</div>
	</div>

	<div class="card">
		<div class="imgbox">
			<a href="western.php"><img src="pic-2.png" alt="Western Dance"></a>
		</div>
		<div class="content">
			<h2>Western Dance</h2>
			<p>Country/western dance, also called country and western dance, encompasses many dance forms or styles, which are typically danced to country-western music</p>
		</div>
	</div>

	<div class="card">
		<div class="imgbox">
			<a href="hiphop.php"><img src="pic-4.png" alt="Hip-Hop Dance"></a>
		</div>
		<div class="content">
			<h2>Hip-Hop Dance</h2>
			<p>Hip-hop dance refers to street dance styles primarily performed to hip-hop music or that have evolved as part of hip-hop culture.</p>
		</div>
	</div>

	<div class="card">
		<div class="imgbox">
			<a href="modern.php"><img src="pic-5.png" alt="Modern Dance"></a>
		</div>
		<div class="content">
			<h2>Modern Dance</h2>
			<p>Modern dance is a broad genre of western concert or theatrical dance, primarily arising out of Germany and the United States.</p>
		</div>
	</div>

	<div class="card">
		<div class="imgbox">
			<a href="jazz.php"><img src="pic-3.png" alt="Jazz Dance"></a>
		</div>
		<div class="content">
			<h2>Jazz Dance</h2>
			<p>Jazz dance is a performance dance technique and style that first emerged in the United States in the early twentieth century.</p>
		</div>
	</div>	

	<div class="card">
		<div class="imgbox">
			<a href="ballroom.php"><img src="pic-6.png" alt="Ballroom Dance"></a>
		</div>
		<div class="content">
			<h2>Ballroom Dance</h2>
			<p>Ballroom dance is a set of partner dances, which are enjoyed both socially and competitively around the world.</p>
		</div>
	</div>
	</div>
</body>

</html>