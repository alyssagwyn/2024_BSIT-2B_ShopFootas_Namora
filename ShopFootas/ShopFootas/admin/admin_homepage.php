<!DOCTYPE html>
<?php include "../db.php";
session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="admin_homepage.css">
     
   
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <link rel="stylesheet" href="https://fontawesome.com/icons/shoe-prints">
    <title>Admin Homepage</title>
</head>
<body>
    <section class="dashboard">
        <div class="top">
            <i class="uil uil-bars sidebar-toggle"></i>
            <div class="search-box">
                <i class="uil uil-search"></i>
                <input type="text" placeholder="Search here...">
            </div>
            
            <!--<img src="images/profile.jpg" alt="">-->
        </div>
        <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <i class="uil uil-tachometer-fast-alt"></i>
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                    <div class="box box1">
                        <i class="uil uil-shopping-basket"></i>
                        <span class="text">Total Order</span>
                        <span class="number">1000</span>
                    </div>
                    <div class="box box2">
                        <i class="uil uil-usd-circle"></i>
                        <span class="text">Total Sales</span>
                        <span class="number">50,999</span>
                    </div>
                    <div class="box box3">
                        <i class="uil uil-box"></i>
                        <span class="text">Total Inventory</span>
                        <a href="admin_items.php" class="btn">
                        <span class="number">2000</span>
                        </a>
                    </div>
                </div>
            </div>
            <div class="activity">
                <div class="title">
                    <i class="uil uil-clock-three"></i>
                    <span class="text">Recent Sales</span>
                </div>
                <div class="activity-data">
                    <div class="data names">
                        <span class="data-title">Name</span>
                        <span class="data-list">Jols Gomez</span>
                        <span class="data-list">Chemar Morco</span>
                        <span class="data-list">Gwin Namora</span>
                        <span class="data-list">Meka Nuyles</span>
                        <span class="data-list">Uno Sumalpong</span>
                        <span class="data-list">Maria Boringot</span>
                        <span class="data-list">Kayna Lazada</span>
                    </div>
                    <div class="data email">
                        <span class="data-title">Contact Number</span>
                        <span class="data-list">0953 784 2098</span>
                        <span class="data-list">0986 549 4320</span>
                        <span class="data-list">0983 727 8810</span>
                        <span class="data-list">0974 665 9064</span>
                        <span class="data-list">0912 288 0921</span>
                        <span class="data-list">0986 884 2091</span>
                        <span class="data-list">0921 701 8214</span>
                    </div>
                    <div class="data joined">
                        <span class="data-title">Date</span>
                        <span class="data-list">2024-01-12</span>
                        <span class="data-list">2024-01-12</span>
                        <span class="data-list">2024-01-13</span>
                        <span class="data-list">2024-02-13</span>
                        <span class="data-list">2024-02-14</span>
                        <span class="data-list">2024-03-14</span>
                        <span class="data-list">2024-03-15</span>
                    </div>
                    <div class="data type">
                        <span class="data-title">Total</span>
                        <span class="data-list">Php 4,599.00</span>
                        <span class="data-list">Php 2,699.00</span>
                        <span class="data-list">Php 5,799.00</span>
                        <span class="data-list">Php 4,299.00</span>
                        <span class="data-list">Php 2,099.00</span>
                        <span class="data-list">Php 3,980.00</span>
                        <span class="data-list">Php 5,199.00</span>
                    </div>
                    <div class="data status">
                        <span class="data-title">Status</span>
                        <span class="data-list">Pending</span>
                        <span class="data-list">Delivered</span>
                        <span class="data-list">Delivered</span>
                        <span class="data-list">Pending</span>
                        <span class="data-list">Returned</span>
                        <span class="data-list">Returned</span>
                        <span class="data-list">Delivered</span>
                    </div>
                </div>
            </div>
        </div>
    </section>