<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee  Details</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<link rel="stylesheet" href="css/style.css"></head>
<body class="backcolor">

    <div class="container">
        <div class="row">
            <div class="col col-12 col-sm-12 col-md-12 col-lg-12 col-xl-12">
                <h1>Employee Details</h1>
                <table>

                    <tr>
                        <td>Name</td>
                        <td><input type="text" id="txtname" class="formcontrol"></td>
                    </tr>
                    <tr>
                        <td>Code</td>
                        <td><input type="text"id="txtcode" class="formcontrol"></td>
                    </tr>
                    <tr>
                        <td>Designation</td>
                        <td><input type="text" id="txtdesignation"class="formcontrol">
                        </td>
                    </tr>
                    <tr>
                        <td>Salary</td>
                        <td><input type="text" id="txtsalary" class="formcontrol"></td>
                    </tr>
                    <tr>
                        <td>Phone number</td>
                        <td><input type="text" id ="txtnumber" class="formcontrol"></td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td><input type="text" id="txtemail" class="formcontrol"></td>
                    </tr>
                    
                </table>
                <tr>
                    <td></td>
                    <td><Button  onclick="clickbutton()" class="btn btn-dark">Save</Button></td>
                </tr>
        </div>
    </div>
    

<script>
    function clickbutton()
    {
        var getname=document.getElementById("txtname").value
        var getcode=document.getElementById("txtcode").value 
        var getdesignation=document.getElementById("txtdesignation").value
        var getsalary=document.getElementById("txtsalary").value
        var getphone=document.getElementById("txtnumber").value 
        var getemail=document.getElementById("txtemail").value
        console.log(getname)
        console.log(getcode)
    console.log(getsalary)
    }
</script>
</body>
</html>