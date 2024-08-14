<?php

$errors = [];
$old_data= [];
if(empty($_POST['firstname'])){
    $errors['firstname'] = "firstname is required";
}else{
    $old_data['firstname'] = $_POST['firstname'];
}

if(empty($_POST['lastname'])){
    $errors['lastname'] = "lastname is required";
}else{
    $old_data['lastname'] = $_POST['lastname'];
}

if(empty($_POST['username'])){
    $errors['username'] = "username is required";
}else{
    $old_data['username'] = $_POST['username'];
}

if(empty($_POST['gender'])){
    $errors['gender'] = "gender is required";
}else{
    $old_data['gender'] = $_POST['gender'];
}


if(empty($_POST['address'])){
    $errors['address'] = "address is required";
}else{
    $old_data['address'] = $_POST['address'];
}


// add rest of data to the old 

if(empty($_POST['password'])){
    $errors['password'] = "password is required";
}

if($errors){
    $errors= json_encode($errors);
    $url = "Location: index.php?errors={$errors}";
    if($old_data){
        $old_data = json_encode($old_data);
        $url.="&old_data={$old_data}";}
    header($url);}
else{
    $skills="(".implode(" , ",$_REQUEST['skills']).")";

    $old_id = file_get_contents('ids.txt');
    $old_id = (int)$old_id;
    $id = $old_id + 1;
    file_put_contents('ids.txt', $id);

    $data = "{$id}:{$_POST['firstname']}:{$_POST['lastname']}:{$_POST['address']}:{$_POST['gender']}:{$_POST['country']}:{$skills}:{$_POST['username']}:{$_POST['password']}:{$_POST['department']}\n";
    $filobj = fopen("Data.txt", 'a');
    if (is_resource($filobj)) {
        fwrite($filobj, $data);
        fclose($filobj);
        header('Location: Table.php');
    }
}
?>