


<style>
  @import url('https://fonts.googleapis.com/css2?family=Jost:ital,wght@0,100..900;1,100..900&display=swap');

body {
    font-family: "Jost", sans-serif;
  color:#616161 /*#757575*/;
  /* background-color:#eeeeee; */
 }

.container {
  margin: auto;
  max-width: 1024px;
  width: 100%;
  height: 100%;
  text-align: center;
  position:relative;
}

.box {
  width: 100% ;
  /* height: 500px; */
  position: absolute;
  background: #fff; 
  top: 50%;
  left: 50%;
  /* bring your own prefixes */
  transform: translate(-50%, -50%);
  border-radius:5px;
  /* box-shadow: rgba(0, 0, 0, 0.12) 0px 1px 3px, rgba(0, 0, 0, 0.24) 0px 1px 2px; */
}

.animation{
  margin-top:10%;
  display:inline-block;
  
}

h1{
  font-size:32px;
  /* color: #dd1e26; */
  font-weight:600;
  text-transform:uppercase;
  margin:0;
  margin-top:2rem;
}
p{
  font-size:16px;
  font-weight:700;
  margin:0;
}

a{
  color: #f6921e;
  font-weight: bold;
  text-decoration: none;
  margin-left:5px;
}

.one, .two, .three {
  display:block;
  float:left;
}

.one {
  background: url('two.svg');
  width:80px;
  height:80px;
  background-size:100% 100%;
  background-repeat:no-repeat;
  margin-top:-10px;
  margin-right:8px;
}

.two {
  background: url('first.svg');
  width:100px;
  height:100px;
  background-size:100% 100%;
  background-repeat:no-repeat;
}



.three {
  background: url('three.svg');
  width:80px;
  height:80px;
  background-size:100% 100%;
  background-repeat:no-repeat;
  margin-top:-50px;
  margin-left:-10px;
}

@keyframes spin-one {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-359deg) ;
    transform: rotate(-359deg) ;
  }
}

.spin-one {
  -webkit-animation: spin-one 1.5s infinite linear;
  animation: spin-one 1.5s infinite linear;
}

@keyframes spin-two {
  0% {
    -webkit-transform: rotate(0deg);
    transform: rotate(0deg);
  }
  100% {
    -webkit-transform: rotate(-359deg);
    transform: rotate(359deg);
  }
}

.spin-two {
  -webkit-animation: spin-two 2s infinite linear;
  animation: spin-two 2s infinite linear;
}
img
{
    max-width: 100%;
    height: auto;
    border-radius: 91px;
    margin-top: 20px;
}


</style>

<div class="container">
    <img src="logo.png" alt="" srcset="">
    <div class="box">

     
     <div class="animation">
      <div class="one spin-one"></div>
      <div class="two spin-two"></div>
      <div class="three spin-one"></div>
     </div>

   <h1>Under maintenance</h1>
   <p>We’re currently performing scheduled maintenance to improve your experience. Our Payment service will be back online shortly. Thank you for your patience and understanding.</p>
  
   </div>
 </div>