<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action = "/member/del" method = "post">
  <table>
   <tr><th>ID</th><th>氏名</th><th></th><th>冊数</th><th>値段</th>
       <tr>
           <td>{{$form->ID}}</td>
           <td>{{$form->name}}</td>
           <td>{{$form->birthday}}</td>
           <td>{{$form->age}}</td> 
           <td>{{$form->birthplace}}</td> 
           <input type ="hidden" name="ID" value ="{{$form->ID}">
       </tr>
   </table>
   <input type="submit" value="削除"></td>
</form>

@endsection

@section('footer')
<td><a href="/book">メニュー</a></td>
    
</body>
</html>

@endsection