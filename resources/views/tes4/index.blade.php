<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('tes4.store') }}" method="post">
        @csrf
        <h3>total</h3>
        <input type="number" name="total">
        <h3>persen_pajak</h3>
        <input type="number" name="persen_pajak">
        <button type="submit">submit</button>
    </form>

</body>

</html>
