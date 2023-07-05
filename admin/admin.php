<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>to do list</title>
    <link rel="stylesheet" href="../style/home1.css">

    <?php
    include "../config/security.php";
    ?>
</head>

<body>
    <div class="wraper">
        <div class="kontenKiri">
            <div class="profil">
                <div class="img">
                    <img src="../assets/img/Rectangle1.png" alt="">
                </div>
                <div class="uname">
                    <?php
                    echo "Hello ". $_SESSION['fullname'];
                    ?>
                    <?php
                    echo "<br>";
                    ?>
                    <?php
                    echo $_SESSION['email'];
                    ?>
                </div>
                <button onclick="logout()">logout</button>
            </div>
            <div class="imgBig">
                <img src="../assets/img/Group3981.png" alt="">
            </div>
            <div class="loadingBar">
                <h1>Rocky</h1>
                <div class="loading">
                    <div class="loading1"></div>
                </div>
                <div class="wrapLoad">
                    <p>30 Task Completed</p>
                    <p>30%</p>
                </div>
            </div>
        </div>
        <div class="kontenKanan">
            <div class="taskKonten">
                <div class="tugas_aktif">
                    <div class="headTask">
                        <div class="titleTask1">
                            <p>Your Task</p>
                        </div>
                        <div class="addTask">
                            <button class="taskButton" onclick="addTask">+</button>
                        </div>
                    </div>

                    <div class="list">
                        <div class="img">
                            <img src="../assets/img/Category.png" alt="">
                        </div>
                        <div class="desc">
                            <p class="text1">Membuat To Do List</p>
                            <p class="text2">Jul 5</p>
                            <p class="text3">Penugasan code blaze yang mana ... </p>
                        </div>
                        <div>
                            <input type="checkbox" class="checkbox" name="check1" id="check1">
                        </div>

                        <div class="activeList" id="active_list">
                            <!-- <font color="white">loading . . . . .</font> -->
                        </div>
                    </div>

                    <div class="list">
                        <div class="img">
                            <img src="../assets/img/Category.png" alt="">
                        </div>
                        <div class="desc">
                            <p class="text1">Membuat To Do List</p>
                            <p class="text2">Jul 5</p>
                            <p class="text3">Penugasan code blaze yang mana ... </p>
                        </div>
                        <div>
                            <input type="checkbox" class="checkbox" name="check1" id="check1">
                        </div>

                        <div class="activeList" id="active_list">
                            <!-- <font color="white">loading . . . . .</font> -->
                        </div>
                    </div>
                    <div class="list">
                        <div class="img">
                            <img src="../assets/img/Category.png" alt="">
                        </div>
                        <div class="desc">
                            <p class="text1">Membuat To Do List</p>
                            <p class="text2">Jul 5</p>
                            <p class="text3">Penugasan code blaze yang mana ... </p>
                        </div>
                        <div>
                            <input type="checkbox" class="checkbox" name="check1" id="check1">
                        </div>

                        <div class="activeList" id="active_list">
                            <!-- <font color="white">loading . . . . .</font> -->
                        </div>
                    </div>

                    <div class="task_completed">
                        <div class="titleTask2">
                            <p>Complete Task</p>
                        </div>
                        <div class="complete_list">
                            <div class="img">
                                <img src="../assets/img/Category.png" alt="">
                            </div>
                            <div class="desc">
                                <p class="text1">Membuat To Do List</p>
                                <p class="text2">Jul 5</p>
                                <p class="text3">Penugasan code blaze yang mana ... </p>
                            </div>
                            <div>
                                <input type="checkbox" class="checkbox" name="check1" id="check1">
                            </div>

                            <div class="activeList" id="active_list">
                                <!-- <font color="white">loading . . . . .</font> -->
                            </div>
                        </div>
                        <div class="task_aktif_list" id="complete_task">
                            <!-- <font color="white">loading . . . . . . </font> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Script -->
        <!-- <script src="./assets/js/jquery-3.7.0.js"></script> 
<script src="./assets/js/script.js"></script> 
<script src="https://kit.fontawesome.com/67a87c1aef.js" crossorigin="anonymous"></script>

<script>
    $(document).ready(function() {
        get_data();
        completed_data();
    });
</script> -->

        <script>
            function logout() {
                location.href = "../public/logout.php";
            }
        </script>
</body>

</html>