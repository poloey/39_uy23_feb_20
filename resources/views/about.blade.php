@extends('master')
@section('content')
<table class='table table-bordered'>
  <tr>
    <th>id</th>
    <th>name</th>
    <th>email</th>
  </tr>
  @foreach($teachers as $teacher)
    <tr>
      <td>{{$teacher->id}}</td>
      <td>{{$teacher->name}}</td>
      <td>{{$teacher->email}}</td>
    </tr>
  @endforeach

<!--   <?php foreach($teachers as $teacher): ?>
    <tr>
      <td><?php echo  $teacher->name; ?></td>
      <td><?php echo  $teacher->email; ?></td>
    </tr>
  <?php endforeach; ?> -->

</table>
{{$teachers->links()}}


@endsection