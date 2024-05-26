<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Student</title>
</head>
<body>
    <h1>Add Student</h1>
    <form method="post" action="insert.php">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <label for="phone">Phone:</label>
        <input type="text" id="phone" name="phone" required><br>

        <label for="faculty">Faculty:</label>
        <input type="text" id="faculty" name="faculty" required><br>

        <label for="address">Address:</label>
        <input type="text" id="address" name="address" required><br>

        <label for="gender">Gender:</label>
        <br>
        <input type="radio" id="male" name="gender" value="male">
        <label for="male">Male</label>
 <br>
  <input type="radio" id="female" name="gender" value="female">
  <label for="female">Female</label>
       <br>

        <input type="submit" value="Submit">

   

    </form>
</body>
</html>