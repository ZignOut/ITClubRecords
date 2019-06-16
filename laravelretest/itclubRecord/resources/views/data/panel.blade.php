<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Panel</title>
</head>
<body>
    <form action="/record/create">
        <input type="text" name="date">
        <input type="text" name="title">
        <input type="text" name="description">
        <input type="submit" value="Go">
    </form>

    <table border="1">
        <tr>
            <th>ID</th>
            <th>Date</th>
            <th>Title</th>
            <th>description</th>
            <th>created_Date</th>
            <th>modified_Date</th>
        </tr>
        @foreach ($records as $records)
            <tr>
                <td>{{ $records->id }}</td>
                <td>{{ $records->date }}</td>
                <td>{{ $records->title }}</td>
                <td>{{ $records->description }}</td>
                <td>{{ $records->created_at }}</td>
                <td>{{ $records->modified_at }}</td>
                <td><a href="/record/delete/{{$records->id}}" style="color: red">Delete</a></td>
            </tr>
        @endforeach
    </table>
</body>
</html>