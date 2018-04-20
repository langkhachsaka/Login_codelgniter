<!DOCTYPE html>
<html>
<title>Quản lí</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }

    th, td {
        text-align: left;
        padding: 8px;
    }

    tr:nth-child(even) {
        background-color: #99CCFF
    }

    th {
        background-color: #144E32;
        color: white;
    }
</style>
<body class="w3-light-grey">
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
    <span class="w3-bar-item w3-right">Xin Chào Admin</span>

</div>
<nav class="w3-sidebar w3-collapse w3-white w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
    </div>
    <hr>
    <div class="w3-bar-block">
        <a href="layout" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-home"></i>  Trang Chủ</a>
        <a href="add/add_user" class="w3-bar-item w3-button w3-padding"><i class="fa fa-user-circle-o"></i>  Quản Lý Admin</a>
        <a href="#" class="w3-bar-item w3-button w3-padding w3-blue"><i class="fa fa-user-circle-o"></i> Quản Lý Nhân Viên</a>
        <a href="#" class="w3-bar-item w3-button w3-padding w3-padding"><i class="fa fa-folder-o"></i> Quản Lý Tin Tức</a>
        <a href="<?php echo base_url('user/user_logout');?>" class="w3-bar-item w3-button w3-padding w3-blue "><i class="fa fa-sign-out"></i> Logout</a>

    </div>
</nav>

<div class="w3-main" style="margin-left:300px;margin-top:43px;">
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Age</th>
            <th>Mobile</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>


            <?php foreach ($users as $user) : ?>
                <tr>
                    <td><?php echo  $user['user_id']; ?></td>
                    <td><?php echo  $user['user_name']; ?></td>
                    <td><?php echo  $user['user_email']; ?></td>
                    <td><?php echo  $user['user_age']; ?></td>
                    <td><?php echo  $user['user_mobile']; ?></td>
                    <td></td>
                </tr>
            <?php endforeach;?>



        </tbody>
    </table>


</div>
</body>
</html>
