<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
 foreach($user_list as $user_booking_history)
 {
    echo "Email: ".$user_booking_history->email;
    echo "<br>";
    echo "Name: ".$user_booking_history->name;
    echo "<br>";
    echo "Booked Date:".$user_booking_history->date_time;
    echo "<br>";
    echo "Pooja: ".$user_booking_history->sub_pooja_id;
    echo "<hr>";
    //echo "Status:" . "Active";
    
 }
