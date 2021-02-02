@extends('layouts.app', ['activePage' => 'table', 'titlePage' => __('Table List')])

@section('content')
<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-12">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title ">Campus</h4>
            <p class="card-category"> </p>
          </div>
          <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th class="text-center">#</th>
                            <th>campusname</th>
                            <th>campusdes</th>
                            <th class="text-right">Actions</th>
                            
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($campus as $campu)
                        <tr>
                            <th class="text-center">{{$campu->id}}</th>
                            <th>{{$campu->campusname}}</th>
                            <th>{{$campu->campusdes}}</th>
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

        <form method="POST" action="{{ route('campus') }}" autocomplete="off" class="form-horizontal">
            @csrf
           

            <div class="card ">
              <div class="card-header card-header-primary">
                <h4 class="card-title">{{ __('Create Campus') }}</h4>
                <p class="card-category">{{ __('Campus information') }}</p>
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
                  <label class="col-sm-2 col-form-label">{{ __('Campusname') }}</label>
                  <div class="col-sm-7">
                    <div class="form-group{{ $errors->has('campusname') ? ' has-danger' : '' }}">
                      <input class="form-control{{ $errors->has('campusname') ? ' is-invalid' : '' }}" name="campusname" id="input-campusname" type="text" placeholder="{{ __('campusname') }}" value="{{ old('campusname')}}" required="true" aria-required="true"/>
                      @if ($errors->has('campusname'))
                        <span id="campusname-error" class="error text-danger" for="input-campusname">{{ $errors->first('campusname') }}</span>
                      @endif
                    </div>
                  </div>
                </div>

                {{--profile user view and update campusdes--}}
                <div class="row">
                    <label class="col-sm-2 col-form-label">{{ __('campusdes') }}</label>
                    <div class="col-sm-7">
                      <div class="form-group{{ $errors->has('campusdes') ? ' has-danger' : '' }}">
                        <input class="form-control{{ $errors->has('campusdes') ? ' is-invalid' : '' }}" name="campusdes" id="input-campusdes" type="text" placeholder="{{ __('campusdes') }}" value="{{ old('campusdes') }}" required="true" aria-required="true"/>
                        @if ($errors->has('campusdes'))
                          <span id="name-error" class="error text-danger" for="input-campusdes">{{ $errors->first('campusdes') }}</span>
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