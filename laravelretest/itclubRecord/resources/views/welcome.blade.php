<!doctype html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <style>
            header{
                background: #26a581;
                border: 1px solid #26a581;
                border-radius: 10px
            }
            header h1{
                color: white;
                font-size: 30px;
                margin-left: 30px;
                margin-top: 10px;
                font-family: Nunito;
            }
            header img{
                width: 250px;
                margin: 30px;
            }
            section h2{
                font-size: 22px;
            }
            section{
                font-family: Nunito;
                margin-left: 30px;
                margin-right: 20px;
            }
            section .del {
                text-decoration: none;
                color: white;
                background: #ff3f3f;
                border: 2px solid #ff3f3f;
                border-radius: 5px;
                font-size: 18px;
                font-family: 'Franklin Gothic Medium', 'Arial Narrow', Arial, sans-serif;
            }
            input{
                border: 2px solid #26a581;
                border-radius: 10px;
                width: 300px;
                height: 30px;
                padding: 2px;
                margin-left: 10px;
            }
            .submit{
                background: #26a581;
                color: white;
                font-size: 16px;
                width: 308px;
            }
            .table{
                border: 2px solid #26a581;
                border-radius: 10px;
                margin-top: 20px;
            }
            .col{
                border: 1px solid #26a581;
                padding: 10px;
            }
            .colhead{
                background: #26a581;
            }
            .colheadLeft{
                border: 2px solid #26a581;
                border-top-left-radius: 10px;
                background: #26a581;
            }
            .colheadRight{
                border: 2px solid #26a581;
                border-top-right-radius: 10px;
                background: #26a581;
            }
            th{
                color: white;
            }
        </style>

    </head>
    <body>
        <header>
            <img src="https://itclubucsmub.com/img/logo-white.png" alt="itclublogo">
            <h1><i>Records</i></h1>
        </header>
        <section>
            <h2>Add New Event</h2>
            <form action="/record/create">
                <table>
                    <tr>
                        <td>Date </td>
                        <td><input type="text" name="date"></td>
                    </tr>
                    <tr>
                        <td>Title </td>
                        <td><input type="text" name="title"></td>
                    </tr>
                    <tr>
                        <td>Description </td>
                        <td><input type="text" name="description"></td>
                    </tr>
                    <tr>
                        <td>&nbsp;</td>
                        <td><input type="submit" value="Add" class="submit"></td>
                    </tr>
                </table>
            </form>
            <table class="table">
                    <tr>
                        <th class="colheadLeft">Id</th>
                        <th class="colhead">Date</th>
                        <th class="colhead">Title</th>
                        <th class="colhead">description</th>
                        <th class="colhead">created_Date</th>
                        <th class="colhead">modified_Date</th>
                        <th class="colheadRight">Operations  </th>
                    </tr>
                    @foreach ($records as $records)
                        <tr>
                            <td class="col">{{ $records->id }}</td>
                            <td class="col">{{ $records->date }}</td>
                            <td class="col">{{ $records->title }}</td>
                            <td class="col">{{ $records->description }}</td>
                            <td class="col">{{ $records->created_at }}</td>
                            <td class="col">{{ $records->modified_at }}</td>
                            <td class="col"><a href="/record/delete/{{$records->id}}" class="del"><b>Delete</b></a></td>
                        </tr>
                    @endforeach
                </table>
        </section>
    </body>
</html>
