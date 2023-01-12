{{-- This file is used to store sidebar items, inside the Backpack admin panel --}}
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('dashboard') }}"><i class="la la-home nav-icon"></i> {{ trans('backpack::base.dashboard') }}</a></li>

<li class="nav-item"><a class="nav-link" href="{{ backpack_url('user') }}"><i class="nav-icon la la-group"></i> Пользователи</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('category') }}"><i class="nav-icon la la-database"></i> Марки автомобилей</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('product') }}"><i class="nav-icon la la-automobile"></i> Модели автомобилей</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order') }}"><i class="nav-icon la la-cart-plus"></i> Заказы</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('order-statuses') }}"><i class="nav-icon la la-check-circle-o"></i> Статус заказов</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('bannr-photo') }}"><i class="nav-icon la la-question"></i> Bannr photos</a></li>
<li class="nav-item"><a class="nav-link" href="{{ backpack_url('banner') }}"><i class="nav-icon la la-question"></i> Banners</a></li>