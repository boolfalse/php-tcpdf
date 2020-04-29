<?php

require_once "config.php";

session_start();

//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login.php");
//    exit;
//}


$templates = Array();
$sql = "SELECT id, title, content FROM templates";
$result = $link->query($sql);

if ($result->num_rows > 0) {
    $temp = Array();
    while($row = $result->fetch_assoc()) {
        $temp['id'] = $row['id'];
        $temp['title'] = $row['title'];
        $temp['content'] = $row['content'];

        $templates[] = $temp;
    }
} else {
    echo "There is not any text templates. Please run templates seeder!<hr />";
}

$link->close();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css">
        body{ font: 14px sans-serif; text-align: center; }
    </style>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
</head>
<body>
<div class="page-header">
    <h1>Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>. Welcome to our site.</h1>
</div>
<p>
    <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    <a href="logout.php" class="btn btn-danger">Sign Out of Your Account</a>
</p>


<div class="wrapper col-md-offset-3 col-md-6">
    <h2>Text sample</h2>
    <p>You can manipulate with text here.</p>

    <form id="tcpdf_form" action="tcpdf.php" method="POST">

        <div class="form-group <?php echo (!empty($foo_err)) ? 'has-error' : ''; ?>">
            <label>Variable "foo"</label>
            <input id="foo" type="text" name="foo" class="form-control" value="">

            <?php if(!empty($bar_err)) { ?>
                <span class="help-block"><?php echo $foo_err; ?></span>
            <?php } ?>
        </div>

        <div class="form-group <?php echo (!empty($bar_err)) ? 'has-error' : ''; ?>">
            <label>Variable "bar"</label>
            <input id="bar" type="text" name="bar" class="form-control" value="">

            <?php if(!empty($bar_err)) { ?>
                <span class="help-block"><?php echo $bar_err; ?></span>
            <?php } ?>
        </div>

        <div class="form-group">
            <button type="button" id="print" disabled="disabled" class="btn btn-success">Print</button>
        </div>



        <div class="form-group <?php echo (!empty($template_err)) ? 'has-error' : ''; ?>">
            <label>Text field</label>
            <textarea name="template" id="template" class="form-control" style="height: 100px"></textarea>
            <div id="hidden_template" style="display: none;"></div>

            <?php if(!empty($template_err)) { ?>
                <span class="help-block"><?php echo $template_err; ?></span>
            <?php } ?>
        </div>

        <div class="form-group" style="display: inline-block">
            <select id="current_template" class="form-control pull-left col-md-3">
                <option value="">Select template</option>
                <?php foreach ($templates as $template) { ?>
                <option value="<?= $template['id'] ?>"><?= $template['title'] ?></option>
                <?php } ?>
            </select>
        </div>
        <div class="form-group" style="display: inline-block">
            <button type="button" id="load" disabled="disabled" class="btn btn-warning pull-right">Load</button>
        </div>

    </form>

</div>



<script>
    $(document).ready(function () {

        var data,
            template_value = "",
            foo_value = "",
            bar_value = "",
            convertedText = "",
            template_id = 0;

        function downloadPDF(convertedText) {
            $.ajax({
                async: true,
                type: "POST",
                url: document.location.origin + '/download-pdf.php',
                data: {
                    'template_id': template_id
                },
                success: function (response) {
                    data = JSON.parse(response);
                    if(data.result){
                        $('#template').val(data.template.content);
                        $('#print').prop('disabled', false);
                    } else {
                        alert(data.message);
                    }
                }
            });

            console.log(convertedText, 123);
        }

        function convertTemplate(template_value, foo_value, bar_value){
            $('#hidden_template .foo').each(function (i, e) {
                $(this).html(foo_value);
            });
            $('#hidden_template .bar').each(function (i, e) {
                $(this).html(bar_value);
            });
        }

        $('#load').on('click', function () {
            template_id = $('#current_template').val();

            $.ajax({
                async: true,
                type: "POST",
                url: document.location.origin + '/get-template.php',
                data: {
                    'template_id': template_id
                },
                success: function (response) {
                    data = JSON.parse(response);
                    if(data.result){
                        $('#template').val(data.template.content);
                        $('#hidden_template').html(data.template.content);
                        $('#print').prop('disabled', false);
                    } else {
                        alert(data.message);
                    }
                }
            });
        });

        $('#print').on('click', function () {
            template_value = $('#template').val();
            foo_value = $('#foo').val();
            bar_value = $('#bar').val();

            if(template_value.length === 0 ||
                foo_value.length === 0 ||
                bar_value.length === 0) {
                alert("Please fill necessary data!");
            }
            else {
                convertTemplate(template_value, foo_value, bar_value);
                // downloadPDF(convertedText);

                $('#template').val($('#hidden_template').html());

                $('#tcpdf_form').submit();
            }
        });

        $('#current_template').on('change', function() {
            $('#load').prop('disabled', false);
        });

    });
</script>



</body>
</html>