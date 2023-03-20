<!DOCTYPE html>
<html>
<head>
    <title>Grid Food Menu</title>
    <style>
        *{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #f3f3f3;
    font-family: 'Poppins',sans-serif;
}
.menu{
    padding: 0;
    display: grid;
    grid-template-columns: repeat( auto-fit, minmax(350px,1fr));
    grid-gap: 20px 40px;
}
.heading{
    background-color: green;
    color: #ffffff;
    margin-bottom: 30px;
    padding: 120px 0 30px 0;
    grid-column: 1/-1;
    text-align: center;
}
.heading>h1{
    font-weight: 400;
    font-size: 30px;
    letter-spacing: 10px;
    margin-bottom: 10px;
}
.heading>h3{
    font-weight: 600;
    font-size: 22px;
    letter-spacing: 5px;
}
.food-items{
    display: grid;
    position: relative;
    grid-template-rows: auto 1fr;
    border-radius: 15px;
    box-shadow: 0 0 15px rgba(0,0,0,0.1);
    margin: 0 20px;
}
.food-items img{
    position: relative;
    width: 100%;
    border-radius: 15px 15px 0 0;
}

.details{
    padding: 20px 10px;
    display: grid;
    grid-template-rows: auto 1fr 50px;
    grid-row-gap: 15px;
}
.details-sub{
    display: grid;
    grid-template-columns: auto auto;
}
.details-sub>h5{
    font-weight: 600;
    font-size: 18px;
}
.price{
    text-align: right;
}
.details>p{
    color: #6f6f6f;
    font-size: 15px;
    line-height: 28px;
    font-weight: 400;
    align-self: stretch;
}
.details>button{
    background-color:green;
    border: none;
    color: #ffffff;
    font-size: 16px;
    font-weight: 600;
    border-radius: 5px;
    width: 180px;
}
    </style>
    <!--Google Font-->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="menu">
        <div class="heading">
            <h1>BAHATI ESTATES</h1>
            <h3>&mdash; houses &mdash; </h3>
        </div>
        <div class="food-items">
            <img src="1BR.png">
            <div class="details">
                <div class="details-sub">
                    <h5>VIEW</h5>
                    <h5 class="price"> $800000 </h5>
                </div>
                <p>BAHATI ESTATES,Hawaii-eldoret <br>1 bedrom<br>27.6sq</p>
                <button>View more Details</button>
            </div>
        </div>
        <div class="food-items">
            <img src="2BR.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>VIEW</h5>
                    <h5 class="price"> $800000 </h5>
                </div>
                <p>BAHATI ESTATES,Hawaii-eldoret <br> 2 bedroom <br> 27.6sq</p>
                <button>View More Details</button>
            </div>
        </div>
        <div class="food-items">
            <img src="3BR.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>VIEW</h5>
                    <h5 class="price"> $800000 </h5>
                </div>
                
                <p>BAHATI ESTATES,Hawaii-eldoret <br>3 bedrom <br> 27.6sq.</p>
                <button>View more details</button>
            </div>
        </div>
        <div class="food-items">
            <img src="Aerial view.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Aerial View</h5>
                    <h5 class="price"> $800000 </h5>
                </div>
                <p>BAHATI ESTATES Hawaii-eldoret <br> view from top <br> 27.6sq.</p>
                <button>View more details.</button>
            </div>
        </div>
        <div class="food-items">
            <img src="Garden Mall.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Garden Mall</h5>
                    <h5 class="price"> $150000 </h5>
                </div>
                <p>BAHATI ESTATES,Hawaii-eldoret <br>Garden view <br> 27.6sq</p>
                <button>view more details</button>
            </div>
        </div>

        <div class="food-items">
            <img src="Perspective view.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Perspective View</h5>
                    <h5 class="price"> $800000 </h5>
                </div>
                <p>BAHATI ESTATES,Hawaii-eldoret <br>Perspective view <br>27.6sq</p>
                <button>view more details</button>
            </div>
        </div>

        <div class="food-items">
            <img src="Studio.png">
            <div class="details">
                <div class="details-sub">
                    <h5>Studio Apartment</h5>
                    <h5 class="price"> $1200000 </h5>
                </div>
                <p>BAHATI ESTATES,Hawaii-eldoret<br>4 rooms <br>27.6sq</p>
                <button>view more details</button>
            </div>
        </div>

        <div class="food-items">
            <img src="view from outside.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>view from outside</h5>
                    <h5 class="price"> $1500000 </h5>
                </div>
                <p>BAHATI ESTATES,Hawaii-eldoret <br> Spacious Compound <br> 27.6sq</p>
                <button>view more details</button>
            </div>
        </div>

        <div class="food-items">
            <img src="Swimming Pool.jpg">
            <div class="details">
                <div class="details-sub">
                    <h5>Swimming Pool</h5>
                    <h5 class="price"> $100000 </h5>
                </div>
                <p>BAHATI ESTATES,Hawaii-eldoret <br>Cool Swimming Pool <br>27.6sq.</p>
                <button>view more details</button>
            </div>
        </div>
    </div>
</body>
</html>