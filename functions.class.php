<?php
    include("connect.class.php");

    $nome = $_POST['name_radios'];
    $city = $_POST['city_radios'];
    $state = $_POST['state_radios'];
    $gender = $_POST['gender_radios'];
    $contact = $_POST['contact_radios'];
    $contact2 = $_POST['contact_radios2'];
    $email = $_POST['email_radios'];
    $resp = $_POST['resp_radios'];
    $btn = $_POST['btn_new_radio'];
    
        if(isset($btn)){
            $insert_radio = mysqli_query($link, "INSERT INTO radios(name_radios, city_radios, state_radios, gender_radios, contact_radios, contact_radios2, email_radios, resp_radios) VALUES ('$nome','$city','$state','$gender','$contact', '$contact2','$email','$resp')");
    
            if($insert_radio){
              header("location: ok-msg.php");
            }
        }
    $get_radios = mysqli_query($link, "SELECT * FROM radios");
    $count_radios = mysqli_num_rows($get_radios);


    $id_radios_url = $_GET['id_radio'];

    $get_radio_url = mysqli_query($link, "SELECT * FROM radios WHERE id_radios = '$id_radios_url'");

    $btn_edit_radio = $_POST['btn_edit_radio'];
    if(isset($btn_edit_radio)){
        $edit_radio = mysqli_query($link, "UPDATE radios SET name_radios = '$nome', city_radios = '$city', state_radios = '$state', gender_radios = '$gender', contact_radios = '$contact',contact_radios2 = '$contact2', email_radios = '$email', resp_radios = '$resp' WHERE id_radios = $id_radios_url");

        if($edit_radio){header("location: ok-edit-radio-msg.php");}
    }

    $name_search = $_POST['name_radios_search'];
    $btn_search = $_POST['btn_search'];

    if(isset($btn_search)){
        $search_radios = mysqli_query($link, "SELECT * FROM radios WHERE name_radios LIKE '%$name_search%'");
        
    }
    
        
?>