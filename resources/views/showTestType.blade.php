<table>
<thead>
<th>Id</th>    
<th>Tipo</th>    
<th>Path</th>    
<th>Número correcto</th>    

</thead>
<body>
<tr>
@foreach($data as $post) 
<td>{{$post['id']}}</td>  
<td>{{$post['tipo_id']}}</td>  
<td>{{$post['path']}}</td>  
<td>{{$post['num_corr']}}</td>   
 
</tr>    

@endforeach
</body>
</table>  