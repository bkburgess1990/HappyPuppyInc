<!--
Names: Brandon Burgess & Jack Zeng
File Name: reservationData.html
Date: 2/11/2023
Description: adoption page where users will be able to look through animals to adopt and click on them
to see more info about the pet
-->

<?php
// adding htmlentities to make sure <script> alert('ATTACK!')</script> won't work.
$uname = htmlentities($_POST['uname'], ENT_QUOTES, "UTF-8");
$pWord = htmlentities($_POST['psw'], ENT_QUOTES, "UTF-8");
$userName = "admin";
$passWord = "admin";

// hash the password, which can't be decryped.
$hash = password_hash($password,PASSWORD_DEFAULT);
// $uname = $_POST['uname'];
// $pWord = $_POST['psw'];
?>


<include href="views/header.html"></include>



        <body>
        <div class = "container-fluid">
            <div class = "row">
                <div class = "col-1 ">
                    <span>firstName</span>
                </div>
                <div class = "col-1">
                    <span>lastName</span>
                </div>
                <div class = "col-2 ">
                    <span>email</span>
                </div>
                <div class = "col-1">
                    <span>Phone</span>
                </div>
                <div class = "col-1 ">
                    <span>Email</span>
                </div>
                <div class = "col-1">
                    <span>Address</span>
                </div>
                <div class = "col-1 ">
                    <span>leave us a message/span>
                </div>
                <div class = "col-1">
                    <span>adopt status</span>
                </div>
                <div class = "col-1 ">
                    <span>surrendered animal</span>
                </div>
                <div class = "col-1">
                    <span>donate price</span>
                </div>
                <hr>
                <repeat group="{{ @applicants }}" value="{{ @applicant }}">
                    <div class = "col-1 ">
                        <span>{{ @applicant['applicant_id'] }}</span>
                    </div>
                    <div class = "col-1">
                        <span>{{ @applicant['fname'] }}</span>
                        <span>{{ @applicant['lname'] }}</span>
                    </div>
                    <div class = "col-2 ">
                        <span>{{ @applicant['github'] }}</span>
                    </div>
                    <div class = "col-1">
                        <span>{{ @applicant['phone'] }}</span>
                    </div>
                    <div class = "col-1 ">
                        <span>{{ @applicant['email'] }}</span>
                    </div>
                    <div class = "col-1">
                        <span>{{ @applicant['state'] }}</span>
                    </div>
                    <div class = "col-1 ">
                        <span>{{ @applicant['experience'] }} years</span>
                    </div>
                    <div class = "col-1">
                        <span>{{ @applicant['relocate'] }}</span>
                    </div>
                    <div class = "col-1 ">
                        <check if = " {{ @applicant['mailing_lists_signup'] == 1 }}">
                            <true><input type="checkbox" name="Lists" value="list" checked disabled></true>
                            <false><input type="checkbox" name="List" value="lists" disabled></false>
                        </check>
                        <span></span>
                    </div>
                    <div class = "col-1">
                        <span>{{ @applicant['mailing_lists_subscriptions'] }}</span>
                        <span>{{ @applicant['mailing_lists_subscription'] }}</span>
                    </div>
                    <hr>
                </repeat>
            </div>
        </div>


        </body>
<include href="views/footer.html"></include>