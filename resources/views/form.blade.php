<!DOCTYPE html>
<html lang="en">
<head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>form</title>
</head>
<body>
    <form method="post" action="form">
     @csrf
     <table>
          <tr>
               <td>Name</td>
               <td>address</td>
               <td>dob</td>
               
          </tr>
          <tr>
                <td><input type="text" placeholder="Enter Your name" name='name' required></td>
               <span style="color:red">@error('name'){{$message}}@enderror</span>
               <td><input type="text" placeholder="Enter Your address "  name='address' required></td>
               <td><input type="date" placeholder="Enter Your address "  name='dob' required></td>
               
               <td><input type="submit" value="Insert"></td>
          </tr>
     </table>
    </form>

</body>
</html>