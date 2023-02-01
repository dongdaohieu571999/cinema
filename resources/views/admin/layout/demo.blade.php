@extends('admin.layout.index')

@section('content')

<div class="row">

<div class="col-lg-12 margin-tb">

<div class="pull-left">

<h2>Category Management</h2>

</div>

<div class="pull-left">

<a class="btn btn-success" href=""> Create New Category</a>

</div>

</div>

</div>

<table class="table table-bordered">

<thead>

<tr class="bg-primary">

<th>Tên danh mục</th>

<th style="width:30%">Tùy chọn</th>

</tr>

</thead>

<tbody>

<tr>

<td>iPhone</td>

<td>

<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>

<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span

class="glyphicon glyphicon-trash"></span> Xóa</a>

</td>

</tr>

<tr>

<td>Samsung</td>

<td>

<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>

<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span

class="glyphicon glyphicon-trash"></span> Xóa</a>

</tr>

<tr>

<td>Nokia</td>

<td>

<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>

<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span

class="glyphicon glyphicon-trash"></span> Xóa</a>

</td>

</tr>

<tr>

<td>HTC</td>

<td>

<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>

<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span

class="glyphicon glyphicon-trash"></span> Xóa</a>

</td>

</tr>

<tr>

<td>LG</td>

<td>

<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>

<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span

class="glyphicon glyphicon-trash"></span> Xóa</a>

</td>

</tr>

<tr>

<td>Sony</td>

<td>

<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>

<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span

class="glyphicon glyphicon-trash"></span> Xóa</a>

</td>

</tr>

<tr>

<td>Motorola</td>

<td>

<a href="#" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Sửa</a>

<a href="#" onclick="return confirm('Bạn có chắc chắn muốn xóa?')" class="btn btn-danger"><span

class="glyphicon glyphicon-trash"></span> Xóa</a>

</td>

</tr>

</tbody>

</table>

@endsection