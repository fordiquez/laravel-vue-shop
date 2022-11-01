@extends('voyager::master')

@section('page_title', __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular'))

@section('css')
    <meta name="csrf-token" content="{{ csrf_token() }}">
@stop

@section('page_header')
    <h1 class="page-title">
        <i class="{{ $dataType->icon }}"></i>
        {{ __('voyager::generic.'.(isset($dataTypeContent->id) ? 'edit' : 'add')).' '.$dataType->getTranslatedAttribute('display_name_singular') }}
    </h1>
@stop

@section('content')
    <div class="page-content container-fluid">
        <form class="form-edit-add" role="form"
              action="@if(!is_null($dataTypeContent->getKey())){{ route('voyager.'.$dataType->slug.'.update', $dataTypeContent->getKey()) }}@else{{ route('voyager.'.$dataType->slug.'.store') }}@endif"
              method="POST" enctype="multipart/form-data" autocomplete="off">
            <!-- PUT Method if we are editing -->
            @if(isset($dataTypeContent->id))
                {{ method_field("PUT") }}
            @endif
            {{ csrf_field() }}

            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-bordered">
                        {{-- <div class="panel"> --}}
                        @if (count($errors) > 0)
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        <div class="panel-body">
                            <div class="form-group">
                                <label for="first_name">{{ __('First Name') }}</label>
                                <input type="text" class="form-control" id="first_name" name="first_name"
                                       placeholder="{{ __('First Name') }}"
                                       value="{{ old('first_name', $dataTypeContent->first_name ?? '') }}">
                            </div>

                            <div class="form-group">
                                <label for="last_name">{{ __('Last Name') }}</label>
                                <input type="text" class="form-control" id="last_name" name="last_name"
                                       placeholder="{{ __('Last Name') }}"
                                       value="{{ old('last_name', $dataTypeContent->last_name ?? '') }}">
                            </div>

                            <div class="form-group">
                                <label for="birthday_date">{{ __('Birthday Date') }}</label>
                                <input type="date" class="form-control" id="birthday_date" name="birthday_date"
                                       placeholder="{{ __('Birthday Date') }}"
                                       value="{{ old('birthday_date', $dataTypeContent->birthday_date ?? '') }}">
                            </div>

                            <div class="form-group">
                                <label for="gender">{{ __('Gender') }}</label>
                                <div>
                                    @foreach(App\Models\User::getGenders() as $key => $gender)
                                        <input type="radio" name="gender" id="{{ $key }}"
                                               value="{{ $key }}" @checked($key == old('gender', $dataTypeContent->gender))>
                                        <label for="{{ $key }}">{{ $gender }}</label>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="email">{{ __('voyager::generic.email') }}</label>
                                <input type="email" class="form-control" id="email" name="email"
                                       placeholder="{{ __('voyager::generic.email') }}"
                                       value="{{ old('email', $dataTypeContent->email ?? '') }}">
                            </div>

                            <div class="form-group">
                                <label for="password">{{ __('voyager::generic.password') }}</label>
                                @if(isset($dataTypeContent->password))
                                    <br>
                                    <small>{{ __('voyager::profile.password_hint') }}</small>
                                @endif
                                <input type="password" class="form-control" id="password" name="password" value=""
                                       autocomplete="new-password">
                            </div>

                            <div class="form-group">
                                <label for="default_role">{{ __('voyager::profile.role_default') }}</label>
                                @php
                                    $dataTypeRows = $dataType->{(isset($dataTypeContent->id) ? 'editRows' : 'addRows' )};

                                    $row     = $dataTypeRows->where('field', 'user_belongsto_role_relationship')->first();
                                    $options = $row->details;
                                @endphp
                                @include('voyager::formfields.relationship')
                            </div>
                            <div class="form-group">
                                <label for="additional_roles">{{ __('voyager::profile.roles_additional') }}</label>
                                @php
                                    $row     = $dataTypeRows->where('field', 'user_belongstomany_role_relationship')->first();
                                    $options = $row->details;
                                @endphp
                                @include('voyager::formfields.relationship')
                            </div>

                            @php
                                if (isset($dataTypeContent->locale)) {
                                    $selected_locale = $dataTypeContent->locale;
                                } else {
                                    $selected_locale = config('app.locale', 'en');
                                }

                            @endphp
                            <div class="form-group">
                                <label for="locale">{{ __('voyager::generic.locale') }}</label>
                                <select class="form-control select2" id="locale" name="locale">
                                    @foreach (Voyager::getLocales() as $locale)
                                        <option value="{{ $locale }}"
                                            {{ ($locale == $selected_locale ? 'selected' : '') }}>{{ $locale }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="panel panel panel-bordered panel-warning">
                        <div class="panel-body">
                            <div class="form-group">
                                @if(isset($dataTypeContent->avatar))
                                    <img
                                        src="{{ filter_var($dataTypeContent->avatar, FILTER_VALIDATE_URL) ? $dataTypeContent->avatar : Voyager::image( $dataTypeContent->avatar ) }}"
                                        style="width:200px; height:auto; clear:both; display:block; padding:2px; border:1px solid #ddd; margin-bottom:10px;" alt="User avatar" title="User avatar" />
                                @endif
                                <input type="file" data-name="avatar" name="avatar">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <button type="submit" class="btn btn-primary pull-right save">
                {{ __('voyager::generic.save') }}
            </button>
        </form>
        <div style="display:none">
            <input type="hidden" id="upload_url" value="{{ route('voyager.upload') }}">
            <input type="hidden" id="upload_type_slug" value="{{ $dataType->slug }}">
        </div>
    </div>
@stop

@section('javascript')
    <script>
        $('document').ready(function () {
            $('.toggleswitch').bootstrapToggle()
        });
    </script>
@stop
