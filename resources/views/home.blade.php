@extends('admin.master.master')
@section('content')
    <div class="page-container">
        <!-- Page content -->
        <div class="page-content">
            <div class="col-md-12">
                <div class="col-md-12 row panel-heading">
                    <div class="panel panel-flat">
                        <div class="panel-heading">
                            <h6 class="panel-title font-weight-bold">{{ __('shiba.account.title') }}{{ __('shiba.management') }}<a class="heading-elements-toggle"><i class="icon-more"></i></a></h6>
                            <div class="heading-elements">
                                <a  href="{{route('account.add')}}" class="btn bg-success btn-raised legitRipple">{{ __('shiba.add_new') }}</a>
                            </div>
                        </div>
                        <div class="panel-body row">
                            <!-- Search Form-->
                            <div class="col-md-12 p-5 ">

                                <div class="col-md-12 panel panel-flat">

                                    <form class="form-horizontal">
                                        <div class="col-md-12 row form-group">
                                            <div class="col-md-2"></div>
                                            <div class="col-md-2 control-label"> <p>{{ __('shiba.account.account') }}{{ __('shiba.account.name') }}:</p></div>
                                            <div class="col-md-6"> <input type="text" class="form-control"  name="account_name"
                                                                          @if (session('account_session.account_name') !== null)
                                                                          value="{{ session('account_session.account_name') }}"
                                                        @endif></div>
                                        </div>
                                        <div class="col-md-12 row form-group">
                                            <div class="col-md-2"></div>
                                            <label class="col-lg-2 control-label">{{ __('shiba.account.authority') }}</label>
                                            <div class="col-lg-8 form-group">
                                                <div class="form-check checkbox-inline">
                                                    <input class="form-check-input" type="checkbox"  name="is_account"
                                                           @if( session('account_session.is_account') =='on') checked @endif >
                                                    <label class="form-check-label" for="is_account">{{ __('shiba.account.account') }}</label>
                                                </div>
                                                <div class="form-check checkbox-inline">
                                                    <input class="form-check-input" type="checkbox"  name="is_contents"
                                                           @if( session('account_session.is_contents') =='on') checked @endif>
                                                    <label class="form-check-label" >{{ __('shiba.account.content') }}</label>
                                                </div>
                                                <div class="form-check checkbox-inline">
                                                    <input class="form-check-input" type="checkbox"  name="is_product"
                                                           @if( session('account_session.is_product')=='on') checked @endif>
                                                    <label class="form-check-label" >{{ __('shiba.account.product') }}</label>
                                                </div>
                                                <div class="form-check checkbox-inline">
                                                    <input class="form-check-input" type="checkbox"  name="is_shop"
                                                           @if( session('account_session.is_shop')=='on')checked @endif>
                                                    <label class="form-check-label" >{{ __('shiba.account.shop') }}</label>
                                                </div>
                                                <div class="form-check checkbox-inline">
                                                    <input class="form-check-input" type="checkbox"  name="is_contact"
                                                           @if( session('account_session.is_contact')=='on') checked @endif>
                                                    <label class="form-check-label">{{ __('shiba.account.contact') }}</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class=" form-group text-center col-md-12">
                                            <button type="submit" class="btn btn-primary legitRipple btn-xs">{{ __('shiba.search') }}</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <!-- Error Message-->
                            <div class="col-md-12 text-center text-danger">
                                @if (session('account.error_mess') !== null)

                                    {{ session('account.error_mess') }}
                                    @php(session()->forget('account.error_mess'))
                                @endif
                            </div>
                            <!-- Pagination -->
                            <div class="col-md-12 row">
                                <div class="col-md-2 col-md-offset-5">{{ $users->links() }}</div>
                            </div>
                            <!-- List -->
                            <div class="table-responsive col-md-12">
                                <table class="table table-bordered table-framed ">
                                    <thead class="bg-info">
                                    <tr >
                                        <th class="text-center">ID</th>
                                        <th class="text-center">{{ __('shiba.account.account') }}{{ __('shiba.account.name') }}</th>
                                        <th class="text-center">{{ __('shiba.account.account') }}</th>
                                        <th class="text-center">{{ __('shiba.account.content') }}</th>
                                        <th class="text-center">{{ __('shiba.account.product') }}</th>
                                        <th class="text-center">{{ __('shiba.account.shop') }}</th>
                                        <th class="text-center">{{ __('shiba.account.contact') }}</th>
                                        <th class="text-center">{{ __('shiba.action') }}</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($users as $account)
                                        <tr class="text-center">
                                            <td>{{$account->id}}</td>
                                            <td>{{$account->account}}</td>
                                            <td>@if($account->is_account == 1) ◯@else - @endif</td>
                                            <td>@if($account->is_contents == 1) ◯@else - @endif</td>
                                            <td>@if($account->is_product == 1) ◯@else - @endif</td>
                                            <td>@if($account->is_shop == 1) ◯@else - @endif</td>
                                            <td>@if($account->is_contact == 1) ◯@else - @endif</td>
                                            <td><a href="{{route('account.edit',$account->id) }}" class="btn btn-info btn-xs" role="button">{{ __('shiba.edit') }}</a>
                                                @if($account->id != 1)<a  class="btn btn-danger btn-xs" role="button" data-target="#deleteAccount" data-toggle="modal" id="deleteBtn"  data-account_id="{{$account->id}}" >{{ __('shiba.delete') }}</a></td>@endif
                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Single delete modal --}}
    <div class="modal modal-danger" id="deleteAccount">
        <div class="modal-dialog">
            <div class="modal-content">

                <!-- Modal Header -->
                <div class="modal-header bg-danger text-white">
                    <h4 class="modal-title"><i class="voyager-trash"></i>{{ __('shiba.account.confirm_delete') }}</h4>
                </div>
                <!-- Modal footer -->
                <div class="modal-footer">
                    <button type="button" class="btn" data-dismiss="modal">{{ __('shiba.cancel') }}</button>
                    <a id="yes_btn" href="" class="btn btn-danger" role="button">{{ __('shiba.yes') }}</a>
                </div>

            </div>
        </div>
    </div>
    {{-- Single delete modal --}}
    <script>
        // delete account
        $( "#deleteAccount" ).on('shown.bs.modal', function(event){
            var button = $(event.relatedTarget); // Button that triggered the modal
            var account_id = button.data('account_id'); // Extract info from data-* attributes
            var modal = $(this);
            var url = "{{route('account.delete',":account_id")}}";
            url = url.replace(':account_id', account_id);
            modal.find('#yes_btn').attr("href",url);
        });
    </script>
@endsection