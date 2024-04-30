<style>
    @import url('https://fonts.googleapis.com/css2?family=Play:wght@400;700&display=swap');
body {
    margin: 0;
    padding: 0;   
    height: 100vh;      
    background: #E8EBEC;
    color: #50595B;
    font-family: "Play", sans-serif;
}

main{
    display: flex;
    flex-wrap: wrap;
    margin: 20px;
    justify-content: space-evenly;
    align-items: center;
    gap: 20px;
}
.card-1{
   position: relative;
    background: rgba(255,255,255,0.07);
    box-shadow: 20px 20px 50px rgba(0,0,0,0.5);   
    border-radius: 10px;   
}

h1{   
    /* transform: rotate(-20deg); */
    color: rgba(255,255,255,0.5);   
    font-size: 30px;
    font-weight: bold;
    -webkit-text-stroke-width: 1px;
    -webkit-text-stroke-color: #F9640F;    
     
    animation: animate 2.5s infinite; 
}
@keyframes animate {
    to{        
        color: #F9640F;
        -webkit-text-stroke-width: none;    
        text-shadow: 5px 5px 15px rgba(249, 100, 15, 0.5);     
    }
    
}
img {
    width: 250px;
    border-radius: 10px;
    margin: 0 auto;
}

section {
    display: flex;
    justify-content: space-around;
    flex-direction: column;
    text-align: center;    
}

hgroup {
    display: flex;
    flex-direction: column;
    justify-content: center;
    text-align: center;
}
hgroup p{
    color: #F9640F;
}
h3{
    font-size: 20px;
    padding: 0 10px;
}

.card-2{    
    width: 370px;
    padding: 10px;
    margin-bottom: 10px;
    border: 2px solid #F9640F;
    border-radius: 10px;      
}
.card-2 p{
    color: #F9640F;
}
figure{
    display: flex;
}
.img-after{
    width: 150px
}
</style>