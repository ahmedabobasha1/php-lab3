

<?php

function get_all_users(){
    try{
         $users = file("Users.txt");
         return $users;
   
    }catch(Exception $e){
        return false;
    }
   
}

function get_new_id(){

    $users = get_all_users();

    if($users){
       $last_user = end($users);
       $user_data = explode(":",$last_user);
       $id =(int) $user_data[0];
       var_dump($id);
       return $id+1;
    }else{
        return 1;
    }
    
}
get_new_id();
