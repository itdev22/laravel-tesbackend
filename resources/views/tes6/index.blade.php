<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('tes6.store') }}" method="post">
        @csrf
        <h3>harga_sebelum_markup</h3>
        <input type="number" name="harga_sebelum_markup">
        <h3>markup_persen</h3>
        <input type="number" name="markup_persen">
        <h3>share_persen</h3>
        <input type="number" name="share_persen">
        <button type="submit">submit</button>
    </form>
</body>

</html>
