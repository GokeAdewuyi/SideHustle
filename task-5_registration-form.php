<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Form</title>
    <style>
        input[type=text],
        input[type=tel],
        input[type=email],
        input[type=date],
        textarea {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type=submit] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type=submit]:hover {
            background-color: #45a049;
        }

        div {
            width: 40%;
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        table {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        table td, table th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        table th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #4CAF50;
            color: white;
        }
    </style>
</head>

<body>
<?php
$firstname = $lastname = $email = $phone = $dob = $gender = $address = null;

if ( filter_has_var( INPUT_POST, 'submit' ) ) {
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $dob = $_POST['dob'];
    $gender = $_POST['gender'];
    $address = $_POST['address'];
}
?>

<div>
    <h3>Registration Form</h3>
    <form action="/SideHustle/task-5_registration-form.php" method="post">
        <label for="firstname">First Name</label>
        <input type="text" id="firstname" name="firstname" placeholder="Your first name.." value="<?php echo $firstname; ?>">

        <label for="lastname">Last Name</label>
        <input type="text" id="lastname" name="lastname" placeholder="Your last name.." value="<?php echo $lastname; ?>">

        <label for="email">Email</label>
        <input type="email" id="email" name="email" placeholder="Your email.." value="<?php echo $email; ?>">

        <label for="phone">Phone</label>
        <input type="tel" id="phone" name="phone" placeholder="Your tel number.." value="<?php echo $phone; ?>">

        <label for="dob">D.O.B</label>
        <input type="date" id="dob" name="dob" value="<?php echo $dob; ?>">

        <input type="radio" id="male" name="gender" value="male" <?php if ($gender == 'male') { ?> checked <?php } ?>><label for="male"> Male </label>
        <input type="radio" id="female" name="gender" value="female" <?php if ($gender == 'female') { ?> checked <?php } ?>><label for="female"> Female </label><p>

        <label for="address">Address</label>
        <textarea name="address" id="address" cols="50" rows="6"><?php echo $address; ?></textarea>

        <input type="submit" name="submit" value="Submit">
    </form>
    <p>
    <p>
    <?php if ( filter_has_var( INPUT_POST, 'submit' ) ) { ?>
    <table>
        <tr>
            <th>User Details</th>
            <th></th>
        </tr>
        <tr>
            <td>First Name</td>
            <td><?php echo $firstname; ?></td>
        </tr>
        <tr>
            <td>Last Name</td>
            <td><?php echo $lastname; ?></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><?php echo $email; ?></td>
        </tr>
        <tr>
            <td>Phone</td>
            <td><?php echo $phone; ?></td>
        </tr>
        <tr>
            <td>D.O.B</td>
            <td><?php echo $dob; ?></td>
        </tr>
        <tr>
            <td>Gender</td>
            <td><?php echo $gender; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo $address; ?></td>
        </tr>
    </table>
    <?php } ?>
</div>

</body>
</html>