
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Inventory Helper</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="gallery.css">
</head>

<body style="background-color:#DCDCDC" >





<nav class="navbar navbar-inverse navbar-fixed-top">
         <div class="container">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
               <span class="sr-only">Toggle navigavtion</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
              </button>
                <a class="navbar-brand" href="http://www.programmingknowledge.org"><strong><span class="glyphyicon glyphicon glyphicon-off" area-hidden="true"></span>  InventoryAquisition</strong></a>
          <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
                   <li class="active"> <a href="http://www.goal.com"> Home </a> </li>
                     <li><a href="http://www.facebook.com"> About </a></li>
                     <li class="dropdown"><a href="#" class="dropdown-toggle " data-toggle="dropdown"> Learn <b class="caret"></b>
                    <ul class="dropdown-menu"> 
                    <li class="dropdown-header">Examples</li>
                      <li><a href="#">Inventory Acquisition</a></li>
                      <li><a href="#">Business Relationship</a></li>

                    </ul>
                    </li>
                    <li><a href="http://www.facebook.com"> Login </a></li>
                    <li><a href="http://www.facebook.com"> Sign Up </a></li>
              <form class="navbar-form navbar-left">
               <div class="form-group">
                    <input type="text" class="form-control" placeholder="Twerk Twerk">
                </div>
                  <button type="submit" class="btn btn-default">Twerk</button>
              </form>
           </ul>
                  
                 
         </div>

         </div>
</nav>

<br>
<div class="container">
<h1 class="page-header"> Hotels.ng Rate Calculator </h1>


<h3><small><p class="text-center"> Hotel Acquisition</p></small></h3>
<div class="row">
 <div class="col-lg-4">
         <div class="jumbotron">
             <strong>Admin</strong>
             <br>
             <br>
             <div class="thumbnail">
             <img src="Hate me or Love me.jpg">
             </div><span class="glyphyicon glyphicon glyphicon-thumbs-up" area-hidden="true"></span>
            <!-- <quote>Out of the night which covers me,
            Black as the pit from pole to pole,
            I thank whatever gods may be
            For my unconquerable soul.
            <br>
            <br>
             In the fell clutch of circumstance
            I have not winced nor cried aloud.
            Under the bludgeoning of chance
            My head is bloody, but unbowed.
            <br>
            <br>
            Beyond this place of wrath and tears 
            Looms but the Horror of the shade, 
            And yet the menace of the years 
            Finds and shall find me unafraid.
            
            </quote> -->
        </div>
  </div>
  <?php
// session_start();
require  'comm.php';
$selln = $_POST["selling_rate"];
$buyn = $_POST["buying_rate"];
$commssn= $_POST["commission"];
$link;

// When the user input no details 

     function no_input_detail()
        {

           global $selln,$buyn,$commssn;

              if (empty($selln) && empty($buyn) && empty($commssn))
                  {
                      echo "Kindly Input Some Details";
                       die();
                 }
        }
//no_input_detail();
/* 
When the user inputs the selling rate and the buying rate with no commission
The following code automatically calculates the commission
*/
function selln_buyn_zcommssn()
{
    global $selln,$buyn,$commssn;
    if  (!empty($selln) && !empty($buyn) && empty($commssn))
    {
        $new = $selln - $buyn;
        $commssn = $new/$selln * 100;
        echo "Commission is: ". '  ' . '  '. $commssn. "%";
        insert_values();
        die();
    }
}
//selln_buyn_zcommssn();
/*
When the user inputs the selling rate. Inputs the percentage of the commission,
The code calculates the monetary value of the percentage and the buying rate
*/
function selln_commssn()

{
    global $selln,$buyn,$commssn;
    echo "The Selling Rate is: " . 'N' ."$selln ";
    "<br>";
    $comm = $commssn/100 * $selln;
    echo "The % Commission is:". '  '.  "$commssn". '%';
    "<br>";
    echo "The Naira Commission Value is: ". 'N' . "$comm";
    "<br>";
    $buy = $selln - $comm;
    if (empty($buyn))
     {
           echo "The Buying Rate is ". '  ' . '  ' . $buy;
           $buyn = $buy;
           "<br>";
     }
    elseif (!empty($buyn))
    {

        echo "The Buying Rate is ". '  ' . '  ' . $buyn."<br>" ;
    }
    insert_values();
}
//selln_commssn();

function insert_values()
{
    global $selln,$buyn,$commssn,$link;
    // To send data into the database for the User

    $value = $_POST['hotel_name'];
    $value1 =  $selln;
    $value2 =  $buyn;
    $value3 = $commssn;
    $value4 = $_POST['comments'];

     $sql = "INSERT INTO nigerian_hotels (hotel_name,selling_rate,buying_rate,commission,comments) VALUES ('$value','$value1','$value2','$value3','$value4')";


    if (!mysqli_query( $link,$sql)) {
        die('Error: ' . mysqli_error($link));
    }
     mysqli_close($link);
}



?>
 <div class="col-lg-4">
<form action="com.php" method="post">
<div class="form-group">
                      <textarea class="form-control" rows="5"  placeholder="Results" name="comments"><?php echo no_input_detail()?></textarea >
</div>             
 <div class="form-group">
                      <textarea class="form-control" rows="5"  placeholder="Results" name="comments"><?php echo selln_buyn_zcommssn()?></textarea >
</div><div class="form-group">
                      <textarea class="form-control" rows="5"  placeholder="Enter your comments" name="comments"><?php echo selln_commssn()?></textarea >
</div>
  </form>
 </div>
      <div class="col-lg-4"> 
        <div class="jumbotron">
             <strong> Life and Love </strong>
             <br>
             <br>
             <div class="thumbnail">
               <img src="4.jpg">
             </div><span class="glyphyicon glyphicon glyphicon-apple" area-hidden="true"></span>
             

<!-- Life and love share a bond, 
Not through magic, nor a wand. 
Each of us, both we need, 
Nurture them, like a garden seed.
<br>
<br>
Life with no love, substance lacks, 
To each soul, a heavy tax. 
Love with no life, slowly fades, 
It may take a few decades.
<br>
<br>
Life and love, has so much beauty, 
We must enjoy them, that's our duty. 
Open our hearts, and freely share, 
Life and love, will be very fair. -->
        </div>
      </div>
</div>


<div class="container">
  
</div>
<!-- Fixed footer -->
<div class="navbar navbar-inverse navbar-fixed-bottom">
<div class="container">
<div class="navbar-text pull-left">
<p>copyright InventoryAquisition 2017</p>
</div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    </div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
</body>
</html>