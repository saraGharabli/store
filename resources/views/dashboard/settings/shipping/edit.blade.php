@extends('layouts.admin')
@section('title', 'لوحـة التحكم :: الاعدادت - طرق الشحن ')
@section('content')

    <div class="app-content content">
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-6 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="breadcrumb-wrapper col-12">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{route('admin.dashboard')}}">الرئيسية </a>
                                </li>
                                <li class="breadcrumb-item"><a href="#"> الاعدادات  </a>
                                </li>
                                <li class="breadcrumb-item active">
                                 طرق الشحن
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Basic form layout section start -->
                <section id="basic-form-layouts">
                    <div class="row match-height">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title" id="basic-layout-form"> اعدادات الشحن  </h4>
                                    <a class="heading-elements-toggle"><i
                                            class="la la-ellipsis-v font-medium-3"></i></a>
                                    <div class="heading-elements">
                                        <ul class="list-inline mb-0">
                                            <li><a data-action="collapse"><i class="ft-minus"></i></a></li>
                                            <li><a data-action="reload"><i class="ft-rotate-cw"></i></a></li>
                                            <li><a data-action="expand"><i class="ft-maximize"></i></a></li>
                                            <li><a data-action="close"><i class="ft-x"></i></a></li>
                                        </ul>
                                    </div>
                                </div>

                                <div class="card-content collapse show">
                                    <div class="card-body">
                                        @include('dashboard.includes.alerts.success')
                                        @include('dashboard.includes.alerts.errors')
                                        <form class="form" action="{{route('update.shipping.methods', $shipping_method->id)}}" method="POST" enctype="multipart/form-data">
                                            @csrf

                                            @method('PUT')

                                            <div class="form-body">
                                                <h4 class="form-section"><i class="ft-home"></i> بيانات
                                                    @if ($type == 'free')
                                                        {{__('admin/sidebar.free shipping')}}
                                                    @elseif($type== 'inner')
                                                        {{__('admin/sidebar.inner shipping')}}
                                                    @elseif($type== 'outer')
                                                        {{__('admin/sidebar.outer shipping')}}
                                                    @else
                                                        {{__('admin/sidebar.free shipping')}}
                                                    @endif
                                                </h4>
                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <label for="projectinput1"> اسم وسيلة التوصيل </label>
                                                            <input type="text" value="{{$shipping_method->value}}" id="name"
                                                                   class="form-control"
                                                                   placeholder="ادخل اسم الوسيلة  "
                                                                   name="value">
                                                            @error('value')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>

                                                    <div class="col-md-6">
                                                        <div class="form-group">
                                                            <!--plain_value-->
                                                            <label for="projectinput1"> قيمة التوصيل </label>
                                                            <input type="number" value="{{$shipping_method->plain_value}}" id="plain_value"
                                                                   class="form-control"
                                                                   placeholder="ادخل  القيمة "
                                                                   name="plain_value">
                                                            @error('plain_value')
                                                                <span class="text-danger">{{ $message }}</span>
                                                            @enderror
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-actions">
                                                <button type="button" class="btn btn-warning mr-1"
                                                        onclick="history.back();">
                                                    <i class="ft-x"></i> تراجع
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    <i class="la la-check-square-o"></i>
                                                  حفظ
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- // Basic form layout section end -->
            </div>
        </div>
    </div>
@endsection
