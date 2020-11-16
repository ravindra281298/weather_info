<?php
    require_once './db/weather.php';

    if(isset($_POST['cid'])) {

		$stmt = $conn->prepare("SELECT * FROM state WHERE country_id = " . $_POST['cid']);
		$stmt->execute();
        $state = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<option selected='' disabled=''>Select State</option>";
		foreach($state as $row) {
            $id = $row['state_id'];
            $name = $row['state_name'];
            echo "<option value='$id'>$name</option>";
        }
    }

    if(isset($_POST['sid'])) {

		$stmt = $conn->prepare("SELECT * FROM city WHERE state_id = ".$_POST['sid']);
		$stmt->execute();
        $city = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<option selected='' disabled=''>Select city</option>";
		foreach($city as $row) {
            $id = $row['city_id'];
            $name = $row['city_name'];
            echo "<option value='$id'>$name</option>";
        }
    }

    if(isset($_POST['city_id'])) {

		$stmt = $conn->prepare("SELECT * FROM temperature WHERE city_id = ".$_POST['city_id']);
		$stmt->execute();
        $date = $stmt->fetchAll(PDO::FETCH_ASSOC);
        echo "<option selected='' disabled=''>Select Date</option>";
		foreach($date as $row) {
            $id = $row['id'];
            $name = $row['date'];
            echo "<option value='$id'>$name</option>";
        }
    }

    if(isset($_POST['tid'])) {

		$stmt = $conn->prepare("SELECT * FROM temperature WHERE id = ".$_POST['tid']);
		$stmt->execute();
        $temp = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach($temp as $row) {
            $id = $row['id'];
            $name = $row['temp'];
            echo "<h3>Temperature is: $name </h3>";
        }
    }

?>