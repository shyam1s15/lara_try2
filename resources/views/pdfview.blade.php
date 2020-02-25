
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style type="text/css">
        table td, table th{
            border:1px solid black;
        }
    </style>
    
</head>
<body>
    <div class="container">


        <br/>
        <a href="{{ route('pdfview',['download'=>'pdf']) }}">Download PDF</a>
    
    
        <table>
            <tr>
                <th>No</th>
                <th>Title</th>
                <th>Description</th>
            </tr>
            @foreach ($items as $key => $item)
            <tr>
                <td>{{ ++$key }}</td>
                <td>{{ $item->stu_name }}</td>
                <td>{{ $item->stu_mother }}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>