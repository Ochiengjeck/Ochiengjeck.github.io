<?php
include ("database.php");
session_start();

// check if student is loged in
if (!isset($_SESSION['student_logged_in']) || $_SESSION['student_logged_in'] !== true) {
    header("Location: login.php");
    exit();

}
else{
    $_SESSION['student_logged_in'] == true;
    $user = $_SESSION["s_id"];
    $log='<html><a href="logout.php">Logout </a> </html> ';
}

?>

<!DOCTYPE html>
<html lang="en">


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" type="text/css" rel="stylesheet">
    <title>baraton uiversity</title>

    <style>
        #body{
            background-color: white;
            background-image: linear-gradient(rgba(93, 93, 92, 0.883),
                            rgba(0, 0, 169, 0.686), 
                            rgba(17, 0, 175, 0.875)), 
                            url(images/grad_hat.jpeg);
            background-attachment: fixed;
        }
        #in{
            color: black;
            border: 0;
            border-bottom: 2px dotted;

        }
        .division{
            font-family: 'Times New Roman', Times, serif;
            padding: 10%;
            padding-top: 2%;
            align-items: center;
            width: 65%;
            float: left;
            margin-left: 10px;
            margin-left: 10px ;
            margin-bottom: 150px;
            margin-top: 20px;
            color: black;
            background-color: white;
            height: auto;
        
        }
        .aside{
            width: 30%;
            font-family: serif;
            margin-right: auto;
            float: left;
            border: 4px solid burlywood;
            padding: 5%;
            padding-top: 2%;
            height: 500px;
        }
        strong{
            color: black;
        }
       #image{
        width: 20px;
        cursor: pointer;
        margin-left: 20px;

       }
            
        .dropdown{
            pad: 10px;
        }
        .dropdown a{
            display: block;
            color: black;
        }
        .dropdown .content{
            display: none;
            margin-left: 20px;
            box-shadow: 3px 3px 5px;
            font-weight: bold;
            position: absolute;
            background-color: hsl(0, 0%, 55%);
        }
        .dropdown:hover .image{
            transform: rotateZ(360deg);
            transition-duration: 300ms;        
        }
        
        .dropdown:hover .content{
            display: block;
        }
        .dropdown a:hover{
            color:  rgba(189, 99, 3, 0.724);
                    }
        input{
            border: 2;
        }
        table{
            border: 0;
        }
        #p{
            word-spacing: 4px;
            font-size: large;
            color: red;
            font-family: 'Times New Roman', Times, serif;
            text-align: justify;
        }
       


    </style>
    
</head>


<body  id="body">
    <header>
        <img src="images/hlogo.JPEG" alt="Baraton Logo" height="100px">
    </header>

    <div class="dropdown">
        <img id="image" class="image" src="images/menu.ico" alt="">

        <div class="content">
            <a href="index.php"><img id="image" src="images/home.ico" alt="">&nbsp; HOME</a>
            <a href="request.php"><img id="image" src="images/grad.ico" alt="">&nbsp; GRADUATION</a>
            <hr>
            <a href="logout.php">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;LOGOUT</a>

        </div>

    </div>
    


    <fieldset class="division">
        <h3><small>SUPPLEMENTARY EXAM FORM</small></h3><br>
            <form action="suprequest.php" method="POST">

                Date: <?php  echo"".date('d-m-y'); ?><br><br>
                Name: <input id="in" type="text" name="f_name" placeholder="FIRST" required> &nbsp;
                <input id="in" type="text" name="m_name" placeholder="MIDDLE" > &nbsp;
                <input id="in" type="text" name="l_name" placeholder="LAST" required> &nbsp;<br><br>

                UEAB ID: <textarea id="in" type="text" name="s_id"rows="1" cols="72%" required></textarea><br><br>
                DATE OF SUPPLEMENTARY EXAMINATION: <textarea id="in" type="text" name="sup_date"rows="1" cols="33%"
                 required placeholder="  DD/MM/YYYY"></textarea><br><br>
                Degree and Major: <textarea  id="in" name="major" rows="1" cols="62%" required></textarea><br><br><br>

                <p id="p">
                I request to sit for a supplementary exam for the following <input type="text" name="q" id="in" placeholder="'number of '"> courses. 
                I understand that i <em>HAVE</em> to pay the Suplementary Exam Fee of 1/3 the course per credit for each supplementary
                exam i take before taking the exam. I also understand that if i pass the supplementary exam, my final grade 
                for the class will <em>NOT</em> be higher than C+.
                </p>

              <br><br><br>
                        <table >
                            <tr>
                                <th>Course Code</th>
                                <th>Title</th>
                                <th>Credits</th>
                                <th>Semester Taken</th>
                                <th>CAT Grade</th>
                                <th>Fianl Exam Grade</th>
                                <th>Final Grade</th>
                                <th>Lecturer Name</th>
                                <th>Date</th>
                            </tr>

                            <tr>
                                <td><input type="text" name="code" id="code"></td>
                                <td><input type="text" name="title" id="title"></td>
                                <td><input type="text" name="credit" id="credit"></td>
                                <td><input type="text" name="sem" id="sem"></td>
                                <td><input type="text" name="cat" id="cat"></td>
                                <td><input type="text" name="final" id="final"></td>
                                <td><input type="text" name="grade" id="grade"></td>
                                <td><input type="text" name="lec" id="lec"></td>
                                <td><input type="text" name="date" id="date " placeholder="<?php  echo"".date('d-m-y'); ?>"></td>
                            </tr>

                            <tr>
                                <td><input type="text" name="code" id="code"></td>
                                <td><input type="text" name="title" id="title"></td>
                                <td><input type="text" name="credit" id="credit"></td>
                                <td><input type="text" name="sem" id="sem"></td>
                                <td><input type="text" name="cat" id="cat"></td>
                                <td><input type="text" name="final" id="final"></td>
                                <td><input type="text" name="grade" id="grade"></td>
                                <td><input type="text" name="lec" id="lec"></td>
                                <td><input type="text" name="date" id="date " placeholder="<?php  echo"".date('d-m-y'); ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="code" id="code"></td>
                                <td><input type="text" name="title" id="title"></td>
                                <td><input type="text" name="credit" id="credit"></td>
                                <td><input type="text" name="sem" id="sem"></td>
                                <td><input type="text" name="cat" id="cat"></td>
                                <td><input type="text" name="final" id="final"></td>
                                <td><input type="text" name="grade" id="grade"></td>
                                <td><input type="text" name="lec" id="lec"></td>
                                <td><input type="text" name="date" id="date "placeholder="<?php  echo"".date('d-m-y'); ?>"></td>
                            </tr>
                            <tr>
                                <td><input type="text" name="code" id="code"></td>
                                <td><input type="text" name="title" id="title"></td>
                                <td><input type="text" name="credit" id="credit"></td>
                                <td><input type="text" name="sem" id="sem"></td>
                                <td><input type="text" name="cat" id="cat"></td>
                                <td><input type="text" name="final" id="final"></td>
                                <td><input type="text" name="grade" id="grade"></td>
                                <td><input type="text" name="lec" id="lec"></td>
                                <td><input type="text" name="date" id="date "placeholder="<?php  echo"".date('d-m-y'); ?>"></td>
                            </tr>
                            
                </table>


                <br><br><br><input id="sbtn" type="submit" value="Send Request" >
            </form>
    </fieldset>

    <aside class="aside" id="aside">
        <?php

            echo $user;
        // Retrieve and display pending approval requests
            $pendingRequests = getPendingApprovalRequests();
            if (!empty($pendingRequests)) {
            echo "<h2>Pending Graduation Requests</h2> <br> ";
            echo "<ol>";
            foreach ($pendingRequests as $request) {
            echo "<li>Requester: " . $request['F_Name'] . "<br>";
            echo "Requeter ID: " . $request['S_ID'] . "<br>"; ;
            echo "Major: " . $request['major'] . "<br></li>";

            }
            echo "</ol>";
            } else {
            echo "<p>No pending approval requests.</p>";
            }
        ?>
      
    </aside>

    <aside class="aside" id="aside">
        <?php

            echo $user;
        // Retrieve and display pending approval requests
            $pendingRequests = getPendingApprovalRequests();
            if (!empty($pendingRequests)) {
            echo "<h2>Pending Graduation Requests</h2> <br> ";
            echo "<ol>";
            foreach ($pendingRequests as $request) {
            echo "<li>Requester: " . $request['F_Name'] . "<br>";
            echo "Requeter ID: " . $request['S_ID'] . "<br>"; ;
            echo "Major: " . $request['major'] . "<br></li>";

            }
            echo "</ol>";
            } else {
            echo "<p>No pending approval requests.</p>";
            }
        ?>
      
    </aside>

</body>
</html>

<?php


// Example usage
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data

    $f_name =$_POST['f_name']; 
    $m_name = $_POST['m_name']; 
    $l_name = $_POST['l_name'];
    $s_id = $_POST['s_id'];
    $major = $_POST['major']; 
    $sup_date= $_POST['sup_date'];
    $code= $_POST['code'];
    $title= $_POST['title'];
    $credit= $_POST['credit'];
    $sem= $_POST['sem'];
    $cat= $_POST['cat'];
    $final= $_POST['final'];
    $grade= $_POST['grade'];
    $lec= $_POST['lec'];
    $date= $_POST['date'];

 

    // Submit the approval request
                
        $sql = "INSERT INTO sup ()
             VALUES ( '$f_name', '$m_name', '$l_name', '$s_id','$sup_date', '$major', 
                                    '$code','$title','$credit','$sem','$cat','$final','$grade','$lec','$date', 'pending')";
    
        mysqli_query($conn,$sql);
  
           
}
// Function to retrieve pending approval requests
function getPendingApprovalRequests()
{
        // prepare and Execute the query
    global $conn; 
    $sql = "SELECT * FROM grad WHERE status = 'pending'";

    $result = $conn->query($sql);

    // Check if there are any pending requests
    if ($result->num_rows > 0) {
        return $result->fetch_all(MYSQLI_ASSOC);
    } else {
        return [];
    }
}


mysqli_close($conn);

?>