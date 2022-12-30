<?php
@include 'config.php';

session_start();  

// if(!isset($_SESSION['admin_name']))
// {
//     header('location:login_form.php');
// }
// $name = mysqli_real_escape_string($conn, $_POST['name']);


$conn = mysqli_connect('localhost','root','','user_db');



$query="SELECT name FROM user_form";
$run=mysqli_query($conn,$query);
// $data= mysqli_fetch_array($run);


while ($data = mysqli_fetch_array($run)) {
    $name = $data['name'];
    // echo "Name: $name<br>";
 }





// if($data)


// if(!isset($_SESSION['admin_name']))
// {
//     header('location:user_page.php');
// }




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link style rel="stylesheet" href="Style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Bracket</title>
</head>
<body>

<div id="line1"></div>
<div id="line2"></div>
<div id="line3"></div>
<div id="line4"></div>
    <div>
        <div class="Link_Style">
            <!-- <label> <a target="_blank" class="First" href="https://docs.google.com/spreadsheets/d/1cDV0v7y7j991Z7Ube9k3fXBI2m5nAIfICOAWkieDQNg/edit?usp=sharing">Player List</a></label> -->
        </div>

        <form name = "formId0" class="formId0">
            <label class="number">Current Battle Mode First To</label>

            <select name="Result0" id="Result0" class="ResulT00 ResulT0">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>


            </select> <label class="number">Wins</label>

        </form>

    </div>

    <div class="Container"> <!--part 1: Branch 1 going to contain everything 1x of this-->
    <!-------------------------1-------------------------------------------->
        <div class="Branch_1"><!--Part 2: The part which contain each 4 of the matches in this branch.-->
            
            <div class="Match">
            <div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

                <div><input type="text" id="Player1" class="Name" placeholder="Player1" value=" <?php echo $name ?>"></div>  <!--Part 4: Name of player 8x of this in this branch-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId1" class="Result">
                <select id="Result1"> 
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                </select>
                </form>
                </div>

                <div><input type="text" id="Player2" class="Name" placeholder="Player2"></div><!--Part 4: Name of player 8x of this-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId2" class="Result">
                <select id="Result2"> 
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                </select>
                </form>
                </div>
            </div>

            </div>
<!----------------------------------2----------------------------------->
<div id="line5"></div>
<div id="line6"></div>
<div id="line7"></div>
<div id="line8"></div>
            <div class="Match">
            <div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

                <div><input type="text" id="Player3" class="Name" placeholder="Player3"></div><!--Part 4: Name of player 8x of this in this branch-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId3" class="Result">
                <select id="Result3"> 
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                </select>
                </form>
                </div>

                <div><input type="text" id="Player4" class="Name" placeholder="Player4"></div><!--Part 4: Name of player 8x of this in this branch-->

                <div> <!--Part 4: Results 8x of this-->
                <form name="FormId4" class="Result">
                <select id="Result4"> 
                    <option value="0">0</option>
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>

                </select>
                </form>
                </div>
                </div>
            </div>
<!---------------------------------3 (Half)------------------------------------>
<div id="line9"></div>
<div id="line10"></div>
<div id="line11"></div>
<div id="line12"></div>
<div id="line13"></div>
<div class="Match">
<div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

    <div><input type="text" id="Player5" class="Name" placeholder="Player5"></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId5" class="Result">
    <select id="Result5"> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    </form>
    </div>

    <div><input type="text" id="Player6" class="Name" placeholder="Player6"></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId6" class="Result">
    <select id="Result6"> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    </form>
    </div>
</div>
</div>
<!------------------------------------4--------------------------------->
<div class="Match">
<div class="Object_1"> <!--Part 3: Name of player & Result 4x of this in this branch-->

    <div><input type="text" id="Player7" class="Name" placeholder="Player7"></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId7" class="Result">
    <select id="Result7"> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    </form>
    </div>

    <div><input type="text" id="Player8" class="Name" placeholder="Player8"></div><!--Part 4: Name of player 8x of this in this branch-->

    <div> <!--Part 4: Results 8x of this-->
    <form name="FormId8" class="Result">
    <select id="Result8"> 
        <option value="0">0</option>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>

    </select>
    </form>
    </div>
</div>
</div>

        </div>
<!------------------Quarter-Finals------------------------------------->
<!-----------------------Branch 1 ends here---------------------------->
<!--------------------------------------------------------------------->
<div class="Branch_2"><!--Part 2: The part which contain each 2 of the matches. In this branch-->
    <div class="Match_02">       
    <div class="Object_2"> <!--Part 3: Name of player & Result 2x of this in this branch-->

        <div class="Name_Forward" type="text" id="Player9">Player</div><!--Part 4: Name of player 4x of this in this branch-->

        <div> <!--Part 4: Results 8x of this-->
        <form name="FormId9" class="Result">
        <select id="Result9"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>

        <div class="Name_Forward" type="text" id="Player10">Player</div><!--Part 4: Name of player 4x of this in this branch-->

        <div> <!--Part 4: Results 4x of this in this branch-->
        <form name="FormId10" class="Result">
        <select id="Result10"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>
</div> 
    </div>
<!----------------------------------2 (half)----------------------------------->
<div class="Match_02">
<div class="Object_2"> <!--Part 3: Name of player & Result 2x of this in this branch-->

        <div class="Name_Forward" type="text" id="Player11">Player</div><!--Part 4: Name of player 4x of this in this branch-->

        <div> <!--Part 4: Results 4x of this in this branch-->
        <form name="FormId11" class="Result">
        <select id="Result11"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>

        <div class="Name_Forward" type="text" id="Player12">Player</div><!--Part 4: Name of player 8x of this-->

        <div> <!--Part 4: Results 4x of this in this branch-->
        <form name="FormId12" class="Result">
        <select id="Result12"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>
</div>
    </div>

</div>
<!-------------------------Semi-Finals--------------------------------->
<!-----------------------Branch 2 ends here---------------------------->
<!--------------------------------------------------------------------->

<div class="Branch_3"><!--Part 2: The part which contain 1 of the matches.-->
    <div class="Match_03">       
    <div class="Object_3"> <!--Part 3: Name of player & Result 1x of this in this branch-->

        <div class="Name_Forward" type="text" id="Player13">Player</div><!--Part 2: Name of player 2x of this in this branch-->

        <div> <!--Part 4: Results 2x of this in this branch-->
        <form name="FormId13" class="Result">
        <select id="Result13"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>

        <div class="Name_Forward" type="text" id="Player14">Player</div><!--Part 2: Name of player 2x of this in this branch-->

        <div> <!--Part 4: Results 2x of this in this branch-->
        <form name="FormId14" class="Result">
        <select id="Result14"> 
            <option value="0">0</option>
            <option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>

        </select>
        </form>
        </div>
</div>
    </div>

</div>
<!------------------------------Finals--------------------------------->

<div class="Branch_3"><!--Part 2: The part which contain 1 of the matches.-->
    <div class="Match_03">       
    <div class="Object_3" id="final"> <!--Part 3: Name of player & Result 1x of this in this branch-->

        <div class="Name_Forward " type="text" id="Player15" placeholder="Winner">

      </div><!--Part 2: Name of player 2x of this in this branch-->

      <i class="fa fa-trophy" style="font-size:28px; margin-right: 50px;margin-top:5px;color:rgba(241, 245, 22, 0.678)"></i>
</div>
    </div>

</div>
<!-----------------------Branch 3 ends here---------------------------->
<!--------------------------------------------------------------------->
    </div>
    <button class="btn" id="home"><a href="admin_page.php">Home</a></button>
    <button class="btn" onclick="window.print()">Print</button>
    <script src="Main.js"></script>
</body>
</html>