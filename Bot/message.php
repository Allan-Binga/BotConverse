<?php
   //establishing a connection to DB
   $conn = mysqli_connect("localhost", "root", "", "bot") or die("Database Error");

   //finding user message through ajax
   $getMesg = mysqli_real_escape_string($conn, $_POST['text']);

   //checking user query to DB query
   $check_data = "SELECT replies FROM chatbot WHERE queries LIKE '%$getMesg%' ";
   $run_query = mysqli_query($conn, $check_data) or die("Error");

   //if user query matched to database query we'll show the reply otherwise it goes to else statement
   if(mysqli_num_rows($run_query) >0){

      //fetching replies from DB according to the user query
         $fetch_data = mysqli_fetch_assoc($run_query);
         //storing replies to a variable which we'll send to ajax
         $replay = $fetch_data['replies'];
         echo $replay;
   }else{
        echo "Sorry can't be able to understand you!";
   }
?>