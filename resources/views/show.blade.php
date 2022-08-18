<table>
<thead>
<th>#ID</th>    
<th>#UserID</th>    
<th>#Titlle</th>    
</thead>
<body>
@foreach($respuestaFinal as $post)
<tr>
<td>{{$post['id']}}</td>    
<td>{{$post['userId']}}</td>    
<td>{{$post['title']}}</td>    

</tr>    

@endforeach
</body>
</table>   