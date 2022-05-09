<?php
$customer_name=filter_input(INPUT_POST,'customer_name');
$phone_number=filter_input(INPUT_POST,'phone_number');
$email_address=filter_input(INPUT_POST,'email_address');
$bloodgroup=filter_input(INPUT_POST,'bloodgroup');
$Age=filter_input(INPUT_POST,'Age');
//$phone=filter_input(INPUT_POST,'phone');
$country=filter_input(INPUT_POST,'country');
$state=filter_input(INPUT_POST,'state');
$District=filter_input(INPUT_POST,'District');
$City=filter_input(INPUT_POST,'City');
$UserID=filter_input(INPUT_POST,'UserID');
$password=filter_input(INPUT_POST,'password');
if(!empty($customer_name)){
    if(!empty($phone_number)){
        if(!empty($email_address)){
            if(!empty($bloodgroup)){
                if(!empty($Age)){
                   // if(!empty($phone)){
                        if(!empty($country)){
                            if(!empty($state)){
                                if(!empty($District)){
                                    if(!empty($City)){
                                        if(!empty($UserID)){
                                            if(!empty($password)){
                                                $host="localhost";
                                                $dbusername="root";
                                                $dbpassword="";
                                                $dbname="wtlminiproject";

                                                 //create connection
                                                 $conn=new mysqli($host,$dbusername,$dbpassword,$dbname);
                                                 if(mysqli_connect_error()){
                                                die('Connect Error('.mysqli_connect_errno() .')'
                                                .mysqli_connect_error());
                                        
                                            }
                                            else{
                                                $sql="INSERT INTO donor_registrations(customer_name,phone_number,email_address,bloodgroup,Age,country,state,District,City,UserID,password)
                                                values ('$customer_name','$phone_number','$email_address','$bloodgroup','$Age','$country','$state','$District','$City','$UserID','$password')";
                                                if($conn->query($sql)){
                                                    echo "New record is inserted successfully";
                                                }
                                                else
                                                {
                                                    echo "Error:".$sql."<br>".$conn->error;
                                                }
                                                $conn->close();
                                            }

                                        }
                                        else{
                                            echo "customer_name should not be empty";
                                            die();
                                        }
                                    }
                                    else{
                                        echo "phone_number should not be empty";
                                        die();
                                    }
                                }
                                else{
                                    echo "email_address should not be empty";
                                    die();
                                }
                            }
                            else{
                                echo "bloodgroup should not be empty";
                                die();
                            }
                        }
                        else{
                            echo "Age should not be empty";
                            die();
                        }
                    //}
                   // else{
                     //   echo "phone should not be empty";
                       // die();
                   // }
                }
                else{
                    echo "country should not be empty";
                    die();
                }
            }
            else{
                echo "state should not be empty";
                die();
            }
        }
        else{
            echo "District should not be empty";
            die();
        }

    }
    else{
        echo "City should not be empty";
        die();
    }

    }
    else{
        echo "UserID should not be empty";
        die();
    }
}
else{
    echo "password should not be empty";
    die();
}

?>