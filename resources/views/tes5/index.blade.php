<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form id="form">
        @csrf
        <h3>total</h3>
        <input type="number" name="diskon">
        <h3>persen_pajak</h3>
        <input type="number" name="diskon">
        <input value="Submit" type="button" onclick="submitform()">
    </form>
</body>
<script>
    function submitform() {
        console.log('ghalo')
        var formData = JSON.stringify($("#form").serializeArray());
        $.ajax({
            type: "POST",
            url: "",
            data: formData,
            success: function() {},
            dataType: "json",
            contentType: "application/json"
        });
    }
</script>

</html>
