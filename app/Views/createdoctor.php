<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Docter</title>
</head>

<body>

    <form action="createdocter" method="post">
        first name: <input name="fname" type="text">
        <br>
        last name: <input name="lname" type="text">
        <br>
        Email: <input name="email" type="email">
        <br>
        password: <input name="password" type="password" id="">
        <br>
        department:

        <select name="department" id="">

            <option value="gynae">gynae</option>
            <option value="artho">artho</option>
        </select>
        <br>
        Date of Birth: <input type="date" name="dob" id="">
        <br>
        Sex:<select name="sex" id="">


            <option value="male">male</option>
            <option value="female">female</option>
            <option value="others">others</option>
        </select>
        <br>
        blood group:<select name="bgroup" id="">

            <option value="a">a</option>
            <option value="b">b</option>
            <option value="o">o</option>
        </select>
        <br>
        Address: <textarea name="address" id="" cols="30" rows="10"></textarea>
        <br>
        phone no: <input type="number" name="phoneno" id="">
        <br>
        education: <textarea name="education" id="" cols="30" rows="10"></textarea>

        specialist: <input type="text" name="specialist" id="">
        <input type="submit" value="Submit">



    </form>

</body>

</html>