@extends('../layout/layout', ['active' => 'myarticle'])

@section('title', 'Article')


@section('pageTitle', 'Article')
@section('breadcrumb')
<li class="breadcrumb-item"><a href="/dashmin">Home</a></li>
<li class="breadcrumb-item active">Article</li>
@endsection

@section('content')
<div class="card">
	<div class="card-header">
		<h3 class="card-title">Article List</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<table id="datableArticle" class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>Title</th>
					<th>Author</th>
					<th>Category</th>
					<th>Tags</th>
					<th>Created-at</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody>
				@foreach($articles as $article)
				<tr>
					<td>{{ $article->title }}</td>
					<td>{{ $article->author }}</td>
					<td>{{ $article->category_id }}</td>
					<td>{{ $article->tags }}</td>
					<td>{{ $article->created_at }}</td>
					<td>
						<a href="/article/edit" class="btn btn-warning btn-sm">edit</a>
						<form action="/article/delete" method="post">
							<input type="submit" value="delete" class="btn btn-danger btn-sm">
						</form>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	<!-- /.card-body -->
</div>
@endsection