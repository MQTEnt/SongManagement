@extends('admin.layout.master')
@section('body.content')
<section class="content">
	<div class="button-zone">
		<button type="button" class="btn btn-success" data-toggle="modal" data-target="#songModal"><i class="fa fa-pencil fa-fw"></i>Thêm mới</button>
		<!-- Modal -->
		<div class="modal fade" id="songModal" role="dialog">
			<div class="modal-dialog modal-lg">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
						<h4 class="modal-title">Modal Header</h4>
					</div>
					<div class="modal-body">
						@include('admin.partial.form-song')
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Đóng</button>
					</div>
				</div>
			</div>
		</div>
		<!-- End Modal -->
	</div>
	<div class="list-item">
		<table class="table table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Tên bài hát</th>
					<th>Ca sĩ</th>
					<th>Năm</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td>1</td>
					<td>Chúng ta không thuộc về nhau</td>
					<td>Sơn Tùng M-TP</td>
					<td>2016</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Phía sau một cô gái</td>
					<td>Sobbin Hoàng Sơn</td>
					<td>2016</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Anh cứ đi đi</td>
					<td>Hari Won</td>
					<td>2016</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Chúng ta không thuộc về nhau</td>
					<td>Sơn Tùng M-TP</td>
					<td>2016</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Phía sau một cô gái</td>
					<td>Sobbin Hoàng Sơn</td>
					<td>2016</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Anh cứ đi đi</td>
					<td>Hari Won</td>
					<td>2016</td>
				</tr>
				<tr>
					<td>1</td>
					<td>Chúng ta không thuộc về nhau</td>
					<td>Sơn Tùng M-TP</td>
					<td>2016</td>
				</tr>
				<tr>
					<td>2</td>
					<td>Phía sau một cô gái</td>
					<td>Sobbin Hoàng Sơn</td>
					<td>2016</td>
				</tr>
				<tr>
					<td>3</td>
					<td>Anh cứ đi đi</td>
					<td>Hari Won</td>
					<td>2016</td>
				</tr>
			</tbody>
		</table>
	</div>
	<div class="pages">
		<ul class="pagination">
			<li class="active"ID><a href="#">1</a></li>
			<li><a href="#">2</a></li>
			<li><a href="#">3</a></li>
			<li><a href="#">4</a></li>
			<li><a href="#">5</a></li>
		</ul>
	</div>
</section>
@stop