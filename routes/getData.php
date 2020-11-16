<?php


    $sql = $conn->prepare("SELECT * FROM country");
    $sql->execute();
    $country = $sql->fetchAll();
    

?>

state = JSON.parse(state);
console.log(state);
$('#state').empty();
$('#state').append("<option selected='' disabled=''>Select State</option>")
state.forEach(function(state){
    $('#state').val(state['state_id']).append("<option>"+state['state_name']+"</option>")
})