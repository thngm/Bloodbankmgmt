

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Modern Business - Start Bootstrap Template</title>
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Temporary navbar container fix -->
    <style>
    .navbar-toggler {
        z-index: 1;
    }
    
    @media (max-width: 576px) {
        nav > .container {
            width: 100%;
        }
    }
    </style>
    <style>
    .errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
    </style>

</head>

<body>

   <table>
    <tbody>
        <tr>
            <td style="cursor: default;"><strong>Recipient Blood Type</strong></td>
            <td style="cursor: default;"><strong>Matching Donor Blood Type </strong></td>
        </tr>
        <tr>
            <td style="cursor: default;">A+ </td>
            <td style="cursor: default;">A+, A-, O+, O-</td>
        </tr>
        <tr>
            <td style="cursor: default;">A-</td>
            <td style="cursor: default;">A-, O-</td>
        </tr>
        <tr>
            <td style="cursor: default;">B+ </td>
            <td style="cursor: default;">B+, B-, O+, O-</td>
        </tr>
        <tr>
            <td style="cursor: default;">B-</td>
            <td style="cursor: default;">B-, O-</td>
        </tr>
        <tr>
            <td style="cursor: default;">AB+</td>
            <td>Compatible with all blood types</td>
        </tr>
        <tr>
            <td style="cursor: default;">AB-</td>
            <td>AB-, A-, B-, O-</td>
        </tr>
        <tr>
            <td style="cursor: default;">O+</td>
            <td>O+, O-</td>
        </tr>
        <tr>
            <td style="cursor: default;">O-</td>
            <td>O-</td>
        </tr>
    </tbody>
</table>
<?php include('includes/footer.php');?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/tether/tether.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Contact form JavaScript -->
    <!-- Do not edit these files! In order to set the email address and subject line for the contact form go to the bin/contact_me.php file. -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

</body>

</html>
