<form role="form-group" method="post" action="">
    <label for="country">Country</label>
    <select class="form-control" id="country" name="country">
        <option selected="" disabled="">Select Country</option>
        <?php
            $sql=$conn->prepare("SELECT * FROM country");
            $sql->execute();
            $country = $sql->fetchAll(PDO::FETCH_ASSOC);
            foreach($country as $row) {
                echo "<option id='".$row['country_id']."' value='".$row['country_id']."'>".$row['country_name']."</option>";
            }
        ?>
    </select>

    <label for="state">State</label>
    <select class="form-control" id="state" name="state">
            <option selected="" disabled="">Select State</option>
    </select>

    <label for="city">City</label>
    <select class="form-control" id="city" name="city">
            <option selected="" disabled="">Select City</option>
    </select>

    <label for="date">Date</label>
    <select class="form-control" id="date" name="date">
            <option selected="" disabled="">Select Date</option>
    </select>

    <div class="container">
        <div class="pt-5" id="display" name="display">
        </div>
    </div>

</form>