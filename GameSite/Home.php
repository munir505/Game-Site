<?php

    include('common.php');

    headers("Home");

    titles("homepage");

?>

<body onload="checkLogin()">


    <div id="loginPara" style="position: absolute; top: 21px; left: 10px; text-align: left; font-size: 12px;">    

            <form id="usrDetails" onsubmit="return false">
                <p id="loginDet"> Got an Account? Login, if not Register</p>

                <b>Email Address:<br> </b><input type="Email" id="emailInput"><br><br>
                <b>Password :<br> </b><input type="password" id="passwordInput"> <br>

                <input type="submit" onclick="login()">

            </form>

        </div>

        <p id="loginFailure" style="color: red; position: absolute; left: 1px; top: 10px; font-size: 12px"></p>

        
        <script src="GameCode.js"></script>
        <script src="Login.js"></script>


    <img src="fighthome.gif" style="width: 500px; height: 135px ;position: absolute; bottom: 0px; left: 433px; right: 433px;">

    <div id="Body" style="position: absolute; top: 200px; text-align: left;" >
    
        
        Game Website. This is a website for a game. The game is a simple point to point game, where you move the object 
        <br>
        <br>
        using the arrow keys, up, down, left and right. You must get to the other side of the map with as little deaths as
        <br>
        <br>
        possible. The more your death count the lower your score will be. Try not to hit the moving or non moving blue objects,
        <br>
        <br>
        as both will put you back in the start position as well as give you another death on your counter. You will get 1500
        <br>
        <br>
        points for each level completed and the final score will be your points divided by your deaths.
        <br>
        <br>
        <br>
        To register to the website click on the register button and enter your details. If you dont want to regiter, thats fine
        <br>
        <br>
        and you will still be able to play the game. However if you do register you will then be able to have your score ranked.
        <br>
        <br>
        Hope you have fun, and as always have nice day.
        <br>
        <br>



    </div>
    



    <table style="width: 35%; position: absolute; right: 7px;border: 1px solid black; top: 30%";>

    	<tr>
           <th style="background-color: black; color: white;">Place</th>
           <th style="background-color: black; color: white;">Full Name</th>
           <th style="background-color: black; color: white;">Score</th>
       </tr>
       <tr>
          <th style="background-color: gold;">1st</th>
          <th style="background-color: gold;"><p id="fullN"></p></th>
          <th style="background-color: gold;"><p id="scoreR"></p></th>
      </tr>
      <tr>
          <th style="background-color: silver;">2nd</th>
          <th style="background-color: silver;"></th>
          <th style="background-color: silver;"></th>
      </tr>
      <tr>
          <th style="background-color: #cd7f32";>3rd</th>
          <th style="background-color: #cd7f32";></th>
          <th style="background-color: #cd7f32";></th>
      </tr>
      <tr>
          <th>4th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>5th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>6th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>7th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>8th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>9th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>10th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>11th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>12th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>13th</th>
          <th></th
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>14th</th>
          <th></th>
          <th></th>
      </tr>
      <tr>
          <th>15th</th>
          <th></th>
          <th></th>
      </tr>


  </table>

</style>


</body>

</html>