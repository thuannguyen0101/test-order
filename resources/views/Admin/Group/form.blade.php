@extends('.Admin.layout.index')
@section('title')
    Admin Dashboard - {{$title}}
@endsection
@section('content')
    <div class="page-heading">
        <div class="page-title">
            <div class="row">
                <div class="col-12 col-md-6 order-md-1 order-last">
                    <h3>{{$title}}</h3>
                    @if ( session()->has('message') )
                        <div class="alert alert-success alert-dismissable">{{ session()->get('message') }}</div>
                    @endif
                </div>
                <div class="col-12 col-md-6 order-md-2 order-first">
                    <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/admin">Dashboard</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{$breadcrumb}}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
        <section id="multiple-column-form">
            <div class="row match-height">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title"><a href="{{route('groupList')}}">Back to list Groups </a></h4>
                        </div>
                        <div class="card-content">
                            <div class="card-body">
                                <form class="form" method="post">
                                    @csrf
                                    <div class="row">
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="first-name-column">Name</label>
                                                <input type="text" id="first-name-column" class="form-control"
                                                       name="name" value="{{$data ? $data->name:''}}">
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="Ward">Ward</label>
                                                <select  class="form-control" name="ward_id" id="Ward">
                                                    <option selected disabled hidden>-</option>
                                                    @foreach($ward as $item)
                                                    <option value="{{$item->xaid}}" {{$data && number_format($data->ward_id) == $item->xaid? 'selected':'' }}>{{$item->name}}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-12">
                                            <div class="form-group">
                                                <label for="Group">Type</label>
                                                <select  class="form-control" name="type" id="Group">
                                                    <option selected disabled hidden>-</option>
                                                    <option value="Qu??n ??o??n"{{$data && $data->type == "Qu??n ??o??n" ? 'selected':''}} >Qu??n ??o??n</option>
                                                    <option value="S?? ??o??n" {{$data && $data->type == "S?? ??o??n" ? 'selected':''}}>S?? ??o??n</option>
                                                    <option value="L??? ??o??n" {{$data && $data->type == "L??? ??o??n" ? 'selected':''}}>L??? ??o??n</option>
                                                    <option value="Trung ??o??n" {{$data && $data->type == "Trung ??o??n" ? 'selected':''}}>Trung ??o??n</option>
                                                    <option value="Ti???u ??o??n" {{$data && $data->type == "Ti???u ??o??n" ? 'selected':''}}>	Ti???u ??o??n</option>
                                                    <option value="?????i ?????i" {{$data && $data->type == "?????i ?????i" ? 'selected':''}}>?????i ?????i</option>
                                                    <option value="Trung ?????i" {{$data && $data->type == "Trung ?????i" ? 'selected':''}}>	Trung ?????i</option>
                                                    <option value="Ti???u ?????i" {{$data && $data->type == "Ti???u ?????i" ? 'selected':''}}>	Ti???u ?????i</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-12 d-flex justify-content-end">
                                            <button type="submit" class="btn btn-primary me-1 mb-1">{{$data ? 'Save':'Submit'}}</button>
                                            <button type="reset" class="btn btn-light-secondary me-1 mb-1">Reset</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
