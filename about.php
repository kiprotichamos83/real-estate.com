<!DOCTYPE html>
<html>
<head>
	<title>ABOUT US</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');

*{
	margin: 0;
	padding: 0;
	box-sizing: border-box;
	font-family: 'Roboto', sans-serif;
}

body{
	background: #eae9ef;
	padding: 50px 30px 0;
}

.wrapper .header{
	margin-bottom: 30px;
}

.wrapper .header h1{
	font-weight: 700;
	text-align: center;
}

.wrapper .box_wrapper{
	display: flex;
	justify-content: center;	
}

.wrapper .box_row{
	display: flex;
	justify-content: space-between;
	width: 90%;	
}

.wrapper .box_row .box_col{
	margin-right: 15px;
	width: 400px;
	text-align: center;
	padding: 25px;
	border-radius: 15px;
	box-shadow: 0 0 2px rgba(0,0,0,0.1);
	color: #fff;
}

.wrapper .box_row .box_col:last-child{
	margin-right: 0px;
}

.wrapper .box_row .box_col.box_col_1{
	background: #6565d7;
}

.wrapper .box_row .box_col.box_col_2{
	background: #ebca47;
}

.wrapper .box_row .box_col.box_col_3{
	background: #ef485c;
}

.wrapper .box_row .box_col .box_title{
	margin: 12px 0;
	font-size: 18px;
	font-weight: 700;
}

@media screen and (max-width: 1024px) {
	body{
		padding: 50px 15px 0;
	}
	.wrapper .box_row{
		width: 100%;	
	}  
}

@media screen and (max-width: 767px) {
	.wrapper .box_row{
		flex-direction: column;
	}
	.wrapper .box_row .box_col{
		width: 100%;
		margin: 0;
		margin-bottom: 15px;
	}
}
    </style>
	<link rel="stylesheet" type="text/css" href="styles.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div class="wrapper">
	<div class="header">
		<h1>ABOUT US</h1>
	</div>	
	<div class="box_wrapper">
		<div class="box_row">
			<div class="box_col box_col_1">
				<div class="box_img">
					<img src="paint-roller.png" alt="">
				</div>
				<div class="box_title">
					<p>OUR MISSION</p>
				</div>
				<div class="box_des">
                Our mission is to develop good quality affordable homes and good neighborhoods where people can live, work and play safely.
The affordable houses are to be located in decent places and be readily available to both the lower, middle and upper class in the society.
					
				</div>
			</div>
			<div class="box_col box_col_2">
				<div class="box_img">
					<img src="code.png" alt="">
				</div>
				<div class="box_title">
					<p>OUR VISION</p>
				</div>
				<div class="box_des">
                We have a distinctive ability to bring together a network of partners to build affordable homes . Affordable housing implies the development of adequate, standardized and well-spaced houses with bulk infrastructure in place .
Our affordable housing projects are modeled under the Public Private Partnership(PPP)  in line with Kenya’s Vision 2030.
We will be recognized as one of the regional and Sub-Saharan Africa’s premier providers of affordable housing.
To achieve this vision we aim to:
•  Introduce a stunning Eco Building Technology in line with Kenya Government’s State    Department of Housing & Urban Development Development Framework Guidelines.

• Develop at least 10,000 affordable homes by 2030; beginning with 1,572 in Uasin Gishu County and have a footprint in most of the 47 countries in Kenya;

• Proactively promote Green Building and environmentally friendly practices in the design, construction and use of homes we build. Provide the highest levels of customer service;

• Maintain a highly skilled, talented workforce and network of partners;
• Be financially sound and profitable – whilst making adequate return to shareholders.


				</div>
			</div>
			<div class="box_col box_col_3">
				<div class="box_img">
					<img src="camera.png" alt="">
				</div>
				<div class="box_title">
					<p>CORE VALUES</p>
				</div>
				<div class="box_des">
                We are committed to translating our core values into day to day practice.
We have carefully developed our values and embedded it into our operating system and business practices.
				</div>
			</div>
            
		</div>
	</div>
</div>

</body>
</html>