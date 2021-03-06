@extends('layouts.admin.app')

@section('title', 'Profile')

@section('css')

@endsection

@section('content')
        <!-- Content Header (Page header) -->
<section class="content-header">
    <h1>
        Profile
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ url('admin/dashboard') }}"><i class="fa fa-dashboard"></i> 管理介面</a></li>
        <li><a href="{{ url('admin/users') }}"><i class="fa fa-users"></i> 會員</a></li>
        <li class="active"><i class="fa fa-user"></i> 檔案</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">{{ $user->name. ' 檔案' }}</h3>
            <div class="box-tools pull-right">
                <button class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip" title="Collapse"><i
                            class="fa fa-minus"></i></button>
            </div>
        </div>
        <div class="box-body">
            <div class="row">
                <div class="col-md-12">
                    <div class="col-md-3">
                        <img src="{{ asset($user->avatar) }}" class="img-responsive img-circle" alt="{{ $user->name }}">
                    </div>
                    <div class="col-md-9">
                        <div class="table-responsive no-padding">
                            <table class="table">
                                <tbody>
                                <tr>
                                    <td style="width: 15%;"><span class="text-muted">姓名:</span></td>
                                    <td><b class="text-info">{{ $user->name }}</b></td>
                                </tr>
                                <tr>
                                    <td><span class="text-muted">Email:</span></td>
                                    <td><b class="text-info">{{ $user->email }}</b></td>
                                </tr>
                                 <tr>
                                    <td><span class="text-muted">縣市:</span></td>
                                    <td><b class="text-info">{{ $user->county }}</b></td>
                                </tr>
                                  <tr>
                                    <td><span class="text-muted">地址:</span></td>
                                    <td><b class="text-info">{{ $user->address }}</b></td>
                                </tr>
                                <tr>
                                    <td><span class="text-muted">月租費:</span></td>
                                    <td><b class="text-info">{{ $user->getMonthlyBillingAmount() }}</b></td>
                                </tr>
                                <tr>
                                    <td><span class="text-muted">剩餘點數:</span></td>
                                    <td><b class="text-info">{{ round($user->total_credit) }}</b></td>
                                </tr>
                                <tr>
                                    <td><span class="text-muted">正在租用箱數:</span></td>
                                    <td>
                                    <table><tbody>
                                    @foreach($orders as $i => $order)
										<?php if($order->status == 4) continue; ?>
                                        <tr>
                                          <td><ul style="margin:0; list-style:none; padding:0">
                                              @foreach($boxes[$order->id] as $box)
                                              <li style="line-height:30px">{{ $box->name }}</li>
                                              @endforeach
                                            </ul></td>
                                          <td><ul style="margin:0; list-style:none; padding:0">
                                              @foreach($boxes[$order->id] as $box)
                                              <li><img src="@if('' !== $box->image)/uploads/boxes/{{ $box->image }}@endif" style="height:24px; margin:3px" width="auto" height="20"/></li>
                                              @endforeach
                                            </ul></td>
                                          <td><ul style="margin:0; list-style:none; padding:0">
                                              @foreach($boxes[$order->id] as $box)
                                              <li style="line-height:30px">
                                                <input type="checkbox" @if($box->
                                                arrived) {{ 'checked' }} @endif disabled /></li>
                                              @endforeach
                                            </ul></td>
                                          
                                        </tr>
                                        @endforeach
                                        </tbody>
                                        </table>
                                    </td>
                                </tr>
                                
                                <tr>
                                    <td><span class="text-muted">退租明細:</span></td>
                                    <td>
                                    <table><tbody>
                                     @foreach($orders as $i => $order)
										<?php if($order->status != 4) continue; ?>
                                        <tr>
                                          <td><ul style="margin:0; list-style:none; padding:0">
                                              @foreach($boxes[$order->id] as $box)
                                              <li style="line-height:30px">{{ $box->name }}</li>
                                              @endforeach
                                            </ul></td>
                                          <td><ul style="margin:0; list-style:none; padding:0">
                                              @foreach($boxes[$order->id] as $box)
                                              <li><img src="@if('' !== $box->image)/uploads/boxes/{{ $box->image }}@endif" style="height:24px; margin:3px" width="auto" height="20"/></li>
                                              @endforeach
                                            </ul></td>
                                          <td><ul style="margin:0; list-style:none; padding:0">
                                              @foreach($boxes[$order->id] as $box)
                                              <li style="line-height:30px">
                                                <input type="checkbox" @if($box->
                                                arrived) {{ 'checked' }} @endif disabled /></li>
                                              @endforeach
                                            </ul></td>
                                          
                                  			</tr>
                                        @endforeach
                                        </tbody></table>
                                    </td>
                                </tr>
                                <tr>
                                    <td><span class="text-muted">推薦碼:</span></td>
                                    <td><b class="text-info">{{ $user->referal_code }}</b></td>
                                </tr>

                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.box-body -->
        <div class="box-footer">
        </div><!-- /.box-footer-->
    </div><!-- /.box -->
</section><!-- /.content -->
@endsection

@section('js')
    <script type="text/javascript">

    </script>
@endsection
