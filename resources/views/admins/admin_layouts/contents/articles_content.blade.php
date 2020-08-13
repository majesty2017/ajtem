@include('modals.articles.addModal')
@include('modals.articles.editModal')
@include('modals.articles.deleteModal')
@include('modals.articles.publishModal')
<div class="card">
    <div class="card-header">
        <!-- Button trigger modal -->
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#addArticlesModal">
            <i class="fa fa-plus-circle"> {{ __('Add Article') }}</i>
        </button>
    </div>
    <div class="card-title">
        <div class="card-body">
            <!-- Breadcrumbs-->
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ route('admin.dashboard') }}">{{ __('Dashboard') }}</a>
                </li>
                <li class="breadcrumb-item active">{{ __('Articles Table') }}</li>
            </ol>
        </div>
    </div>

@include('partials.alerts')

<!-- DataTables Example -->
    <div class="card mb-3">
        <div class="card-header">
            <i class="fas fa-table"></i>
            {{ __('Article Details') }}</div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-striped table-dark table-hover" id="dataTables" width="100%" cellspacing="0">
                    <thead>
                    <tr>
                        <th>#ID</th>
                        <th>Categories</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Volume</th>
                        <th>Pages</th>
                        <th>Author(s)</th>
                        <th>Files</th>
                        <th>Posted By</th>
                        <th>Submitted On</th>
                        <th>Updated On</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </thead>
                    <tfoot>
                    <tr>
                        <th>#ID</th>
                        <th>Categories</th>
                        <th>Title</th>
                        <th>Year</th>
                        <th>Volume</th>
                        <th>Pages</th>
                        <th>Author(s)</th>
                        <th>Files</th>
                        <th>Posted By</th>
                        <th>Submitted On</th>
                        <th>Updated On</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                        <th>&nbsp;</th>
                    </tr>
                    </tfoot>
                    <tbody>
                    @foreach($articles as $key => $article)
                        <tr>
                            <td id="td">{{ $article->id }}</td>
                            <td id="td">{{ $article->category['name'] }}</td>
                            <td id="td" class="text-truncate">{{ $article->title }}</td>
                            <td id="td">{{ $article->year }}</td>
                            <td id="td">{{ $article->volume }}</td>
                            <td id="td">{{ $article->pages }}</td>
                            <td id="td">{{ $article->author }}</td>
                            <td id="td"><a style="text-decoration: none" href="{{ route('download', [$article->upload_files]) }}" title="Download">
                                    <img src="{{ asset('uploads/articles/covers/' . $article->upload_image) }}"
                                         style="width: 70px; height: 70px"
                                         alt="Uploaded File" class="rounded">Download
                                </a></td>
                            <td id="td">{{ $article->admin->name ?? $article->author->name ?? '' }}</td>
                            <td id="td">{{ $article->created_at->diffForHumans() }}</td>
                            <td id="td">{{ $article->updated_at->diffForHumans() }}</td>
                            <td>
                                <button type="button" class="btn btn-primary btn-xm editArticleModal"><i class="fa fa-pencil-alt" title="Edit Article"></i></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-info btn-xm publishArticleModal"><i class="fa fa-book-reader" title="Publish Article"></i></button>
                            </td>
                            <td>
                                <button type="button" class="btn btn-danger btn-xm deleteArticleModal"><i class="fas fa-minus-circle" title="Delete Article"></i></button>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
</div>
