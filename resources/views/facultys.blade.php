@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Facultys</h4>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>Facultyname</th>
                            <th>Facultydes</th>
                            <th class="text-right">Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($faculys as $facul)
                        <tr>
                            <th class="text-center">{{$facul->id}}</th>
                            <th>{{$facul->facultyname}}</th>
                            <th>{{$facul->facultydes}}</th>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                    <i class="material-icons">person</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                </table>

            </div>
          </div>
        </div>

        <form method="POST" action="{{ route('facultys') }}" autocomplete="off" class="form-horizontal">
            @csrf
           

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Facultys') }}</h4>
                <p class="card-category">{{ __('Facultys information') }}</p>
              </div>
              <div class="card-body ">
                @if (session('status'))
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <i class="material-icons">close</i>
                        </button>
                        <span>{{ session('status') }}</span>
                      </div>
                    </div>
                  </div>
                @endif
                {{--profile user view and update name--}}
         
                <div class="row">
                  <label class="col-sm-2 col-form-label">{{ __('Facultyname') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('facultyname') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('facultyname') ? ' is-invalid' : '' }}" name="facultyname" id="input-facultyname" type="text" placeholder="{{ __('facultyname') }}" value="{{ old('facultyname')}}" required="true" aria-required="true"/>
                      @if ($errors->has('facultyname'))
                        <span id="facultyname-error" class="error text-danger" for="input-facultyname">{{ $errors->first('facultyname') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                {{--profile user view and update campusdes--}}
              <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('Facultysdes') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('facultydes') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('facultydes') ? ' is-invalid' : '' }}" name="facultydes" id="input-facultydes" type="text" placeholder="{{ __('facultydes') }}" value="{{ old('facultydes') }}" required="true" aria-required="true"/>
                        @if ($errors->has('facultydes'))
                          <span id="name-error" class="error text-danger" for="input-facultydes">{{ $errors->first('facultydes') }}</span>
                        @endif
                      </div>
                    </div>
                  </div>


                   

                


              </div>
              <div class="card-footer ml-auto mr-auto">
                <button type="submit" class="btn btn-primary">{{ __('Save') }}</button>
              </div>
            </div>
          </form>
          

      </div>
      
    </div>
  </div>
</div>
@endsection
{{--<td class="text-center">3</td>
                            <td></td>
                            <td></td>
                            <td class="td-actions text-right">
                                <button type="button" rel="tooltip" class="btn btn-info btn-simple">
                                    <i class="material-icons">person</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-success btn-simple">
                                    <i class="material-icons">edit</i>
                                </button>
                                <button type="button" rel="tooltip" class="btn btn-danger btn-simple">
                                    <i class="material-icons">close</i>
                                </button>
                            </td>--}}