<h1>Forum</h1>
<table>
    <thead>
    <th>id</th>
    <th>status</th>
    <th>descrição</th>
</thead>
<tbody>
    @foreach ($supports as $support)
        <tr>
            <td>{{$suport->subject}}</td>
            <td>{{$suport->status}}</td>
            <td>{{$suport->body}}</td>
            <td>    </td>
        </tr>
    @endforeach
</tbody>
</table>
