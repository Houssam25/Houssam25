<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>laravel 10 </title>
</head>
<body>
    <h1> {{ $title }} </h1>
    <h1> {{ $invoice->reference }} </h1>
    <h1>Invoice Details</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nom</th>
                <th>Prenom</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($invoice->details as $detail )
            <tr>
                <td> {{ $detail->id }} </td>
                <td> {{ $detail->nom }} </td>
                <td> {{ $detail->prenom }} </td>
            </tr> 
            @endforeach
            
        </tbody>
    </table>


</body>
</html>