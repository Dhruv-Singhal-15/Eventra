<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Preview About</title>
</head>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap');
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
    font-family: 'Roboto', sans-serif;
}
.wrapper{
    position: relative;
    display: flex;
    justify-content: center;
    align-items: center;
}
.background-container{
    width: 100%;
    min-height: 100vh;
    display: flex; 
}
.bg-1{
    flex: 1;
    background-color: rgb(255, 169, 41);
}
.bg-2{
    flex: 1;
    background-color: rgb(255, 88, 100);
}
.about-container{
    width: 85%;
    min-height: 80vh;
    position: absolute;
    background-color: white;
    box-shadow: 24px 24px 30px #ffff00;
    display: flex;
    justify-content: center;
    align-items: center;
    padding: 20px 40px;
    border-radius: 5px;
}
.image-container{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: center;
}
.image-container img {
    width: 500px;
    height: 500px;
    margin: 20px;
    border-radius: 10px;
}
.text-container{
    flex: 1;
    display: flex;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    font-size: 22px;
}
.text-container h1{
    font-size: 70px;
    padding: 20px 0px;
}
.text-container a{
    text-decoration: none;
    padding: 12px;
    margin: 50px 0px;
    background-color: rebeccapurple;
    border: 2px solid transparent;
    color: white;
    border-radius: 5px;
    transition: .3s all ease;
}
.text-container a:hover{
    background-color: transparent;
    color: black;
    border: 2px solid rebeccapurple;
}
@media screen and (max-width: 1600px){
    .about-container{
        width: 90%;
    }
    .image-container img{
        width: 400px;
        height: 400px;
    }
    .text-container h1{
        font-size: 50px;
    }
}
@media screen and (max-width: 1100px){
    .about-container{
        flex-direction: column;
    }
    .image-container img{
        width: 300px;
        height: 300px;
    }
    .text-container {
        align-items: center;
    }
}
    </style>
<body>
    <div class="wrapper">

        <div class="background-container">
            <div class="bg-1"></div>
            <div class="bg-2"></div>
    
         </div>
         <div class="about-container">
            
            <div class="image-container">
                <img src="Eventra_Rectangle.png" alt="">
                
            </div>

            <div class="text-container">
                <h1>About us</h1>
                <p>Eventra was founded by 5 ambitious college kids Dhruv, Arnav, Prajwal, Atinder and Japneet in the year 2022. <br>Eventra Events and Entertainments Pvt Ltd specialises in planning lavish and flawless events. Our team has qualified and experienced event planners who get counted as the finest wedding designers and event organisers in Delhi, Noida and Gurgaon. </p>
                
            </div>
            
        </div>
    </div>
    

</body>
</html>