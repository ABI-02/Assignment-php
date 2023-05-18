
<!DOCTYPE html>
<html>
<head>
    <title>User Role Selection</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Select your role:</h1>
    <form method="POST" action="">
        <input type="radio" name="role" value="admin"> Admin<br>
        <input type="radio" name="role" value="user"> User<br>
        <input type="submit" name="submit" class="btn btn-primary value= "Submit">
    </form>
</div>

    <?php
    if(isset($_POST['submit'])){
        $role = $_POST['role'];

        // Use the chosen role value in your code
        if($role == "admin"){
            $userRole = 'admin';
            //echo "Welcome, Admin!";
            // Perform admin-specific actions or set admin privileges
        }
        elseif($role == "user"){
            $userRole = 'user';
            //echo "Welcome, User!";
            // Perform user-specific actions or set user privileges
        }
    }
    ?>
</body>
</html>

<?php
// Check user role
//$userRole = 'admin'; // Change this to 'admin' to see admin-specific content

// Array of countries for the dropdown
$countries = array(
    'USA',
    'Canada',
    'Australia',
    'United Kingdom',
    'Germany',
    'France',
    // Add more countries here
);

// Form submission handling
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Process form data
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $gender = $_POST['gender'];
    $country = $_POST['country'];
    $dateFrom = $_POST['dateFrom'];
    $dateTo = $_POST['dateTo'];

    // Perform further actions with the data, e.g., store it in a database
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Role-Based Permissions</title>
    <!-- Include CSS framework, e.g., Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h2>Role-Based Permissions</h2>

        <?php if ($userRole === 'admin'): ?>
            <div class="alert alert-success">
                Welcome, Admin! You have access to admin-specific content.
            </div>
        <?php endif; ?>

        <form method="post">
            <div class="form-group">
                <label for="firstName">First Name</label>
                <input type="text" class="form-control" id="firstName" name="firstName" required>
            </div>
            <div class="form-group">
                <label for="lastName">Last Name</label>
                <input type="text" class="form-control" id="lastName" name="lastName" required>
            </div>
            <div class="form-group">
                <label for="gender">Gender</label>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderMale" value="male" required>
                    <label class="form-check-label" for="genderMale">
                        Male
                    </label>
                </div>
                <div class="form-check">
                    <input class="form-check-input" type="radio" name="gender" id="genderFemale" value="female" required>
                    <label class="form-check-label" for="genderFemale">
                        Female
                    </label>
                </div>
            </div>
            <div class="form-group">
                <label for="country">Country</label>
                <select class="form-control" id="country" name="country" required>
                    <?php foreach ($countries as $country): ?>
                        <option value="<?php echo $country; ?>"><?php echo $country; ?></option>
                    <?php endforeach; ?>
                </select>
            </div>
            <div class="form-group">
                <label for="dateFrom">Date Range (From - To)</label>
                <input type="date" class="form-control" id="dateFrom" name="dateFrom" required>
                <input type="date" class="form-control" id="dateTo" name="dateTo" required>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
