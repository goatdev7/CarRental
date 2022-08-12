<?php
include ("../database/user_route.php");
include ("../database/invoice_server.php");
session_start();
// <?php
// if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
// {
//     $name="$_SESSION[]";
// };
//        
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        h1{
            text-align: center;
            font-size: 4vw;
            font-family: Verdana, Geneva, Tahoma, sans-serif;

        }
        p{
            text-align: center;
            position: relative;
            top: -2vw;

            font-style: italic;
        }
        .name{
            left: 5vw;
            top: 5vw;
            position: relative;
        }
        label{
            font-size: 1.5vw;
            font-family: Verdana, Geneva, Tahoma, sans-serif;
        }
        
        th, td, tr{
            border:2px solid black;
            /* padding:10px; */
            border-collapse: collapse;
        }
        table{
            width: 60vw;
            border-collapse: collapse;
            background-color: antiquewhite;
        }
        .row td{
            font-weight: 600;
            font-size: 1.2vw ;


        }
        .invoice_tabel{
            text-align: center;
            display: flex;
            justify-content: center;
            top: 5vw;
            position: relative;
        }
        .close{
            text-align: center;

        }
        .close input[type=submit]{
            width: 7vw;
            background-color: orange;
            color: black;
            border:1px solid transparent;
            border-radius: 5px;
            height: 2.5vw;
            position: relative;
            top:10vw;
            cursor: pointer;
        }
    </style>
    <title>Bill</title>
</head>
<body>
    <h1>Invoice</h1>
    <p>Thank you for choosing Throttle</p>
    <!-- <div class="name">
  
        <label>Invoice for </label>
    </div> -->
        <div class="invoice_tabel">
            <table>
                    <tr class="row">
                    <td>Car</td>
                    <td>Price</td>
                    <td>Days</td>
                    <td>Total Price</td>
                    </tr>
                
                <?php
            if( isset($_SESSION['username']) && !empty($_SESSION['username']) )
            {
                echo '<tr>
                <td>'.$car.'</td>
                <td>'.$rentPrice[0].'</td>
                <td>'.$days.'</td>
                <td>'.$total.'</td>
            </tr>
            <tr>
            <th colspan="3" class="tab1">GST 14%:</th>
            <th class="last"> '.($total*0.14) . '</th>  
          </tr>
            <tr>
        <th colspan="3" class="t1">Discount</th>
        <th class="last"> '.($total*0.07) . '</th>  
      </tr>
        <tr>
        <th colspan="3" class="t2">Grand Total: </th>
        <th class="last"> '.($total+(($total*0.14)-($total*0.07))) . '</th>  
      </tr>
     
            ';
            }
            else{
                echo '<tr>
                <td>'.$car.'</td>
                <td>'.$rentPrice[0].'</td>
                <td>'.$days.'</td>
                <td>'.$total.'</td>
            </tr>
            <tr>
            <th colspan="3" class="tab1">GST 14%:</th>
            <th class="last"> '.($total*0.14) . '</th>  
          </tr>
        <tr>
        <th colspan="3" class="t2">Grand Total: </th>
        <th class="last"> '.($total+($total*0.14)) . '</th>  
      </tr>';
            }
            ?>
                
            </table>
        </div>
        <div class="close">
        <form method="post">
        <input type="submit" value="Close" name="close">
    </form>
    </div>
    
</body>
</html>