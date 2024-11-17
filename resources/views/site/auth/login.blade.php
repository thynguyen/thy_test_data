@extends('site.layouts.default')
@section('content')
<link rel="stylesheet" href="{{ asset('site/css/login_00.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/login_01.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/login_02.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/login_03.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/login_04.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/login_05.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/login_06.css') }}" />

<style>
.alert-danger {
    color: #a94442;
    background-color: #f2dede;
    border-color: #ebccd1;
}
.alert {
    padding: 15px;
    margin-bottom: 20px;
    border: 1px solid transparent;
    border-radius: 4px;
}
.alert>p, .alert>ul {
    margin-bottom: 0;
}   
</style>

<uni-page data-page="pages/common/login" class="animation-show">
   <!----><!---->
   <uni-page-wrapper>
      <uni-page-body>
         <uni-view data-v-7d367e14="" class="login-wrap">
            <uni-view data-v-7d367e14="" class="login-logo">
               <uni-image data-v-7d367e14="" class="d-block">
                  <div style="background-image: url({{ asset('site/images/logo.d37ecb5e.svg') }}); background-position: center center; background-size: contain; background-repeat: no-repeat;"></div>
                  <!----><img src="{{ asset('site/images/logo.d37ecb5e.svg') }}" draggable="false">
               </uni-image>
            </uni-view>
            <uni-view data-v-7d367e14="" class="d-flex-between-center" style="color: white; position: fixed; top: 20px; z-index: 99; width: 100%; padding: 0px 27px;">
               <uni-view data-v-7d367e14="" class="font-size-32">
                  <svg data-v-7d367e14="" width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px; vertical-align: middle; margin-bottom: 2px; margin-right: 5px;">
                     <path data-v-7d367e14="" d="M24 44.0002C35.0457 44.0002 44 35.0459 44 24.0002C44 12.9545 35.0457 4.00024 24 4.00024C12.9543 4.00024 4 12.9545 4 24.0002C4 35.0459 12.9543 44.0002 24 44.0002Z" stroke="#ffffff" stroke-width="3"></path>
                     <path data-v-7d367e14="" d="M6 30.9856C8.63192 32.041 10.5266 32.041 11.6839 30.9856C13.4199 29.4025 11.9219 24.5978 14.3532 23.2727C16.7844 21.9476 20.4886 27.8214 23.9508 25.8887C27.4129 23.9559 23.6246 18.8023 26.0272 16.713C28.4298 14.6237 31.554 16.98 32.1001 13.4865C32.6462 9.99304 29.5521 11.5082 28.9584 8.20693C28.5625 6.00611 28.5625 4.84884 28.9584 4.73511" stroke="#ffffff" stroke-width="3" stroke-linecap="round"></path>
                     <path data-v-7d367e14="" d="M29.0209 43.3505C27.1468 41.4325 26.4721 39.6497 26.9969 38.0019C27.7841 35.5303 29.0826 35.6764 29.6488 34.1482C30.2149 32.6199 28.6156 30.4433 32.1643 28.5826C34.5301 27.3421 37.783 28.7794 41.9228 32.8944" stroke="#ffffff" stroke-width="3" stroke-linecap="round"></path>
                  </svg>
                  <uni-text data-v-7d367e14="" style="color: rgb(255, 255, 255);"><span>Select language</span></uni-text>
               </uni-view>
               <uni-view data-v-7d367e14="" class="kefu1">
                  <svg data-v-7d367e14="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#ffffff" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                     <path data-v-7d367e14="" d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                     <path data-v-7d367e14="" d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                  </svg>
               </uni-view>
            </uni-view>
            <uni-view data-v-7d367e14="" class="login-container" style="top: 200px; background: transparent;">
               <uni-view data-v-7d367e14="" class="d-flex-between-center" style="justify-content: center;">
                  <uni-text data-v-7d367e14="" class="d-block font-size-48 my-8 font-weight-bold linear-gradient-text" style="line-height: 34px;"><span></span></uni-text>
               </uni-view>

               @if (session('Error'))
                  <div class="alert alert-danger">
                     <ul>
                        <li>{{ session('Error') }}</li>
                     </ul>
                  </div>
               @endif

               @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                     </ul>
                  </div>
               @endif

               <form id="formLogin" method="POST" action="{{ route('site_postLogin') }}">
                @csrf
               <uni-view data-v-7d367e14="">
                  <uni-view data-v-7d367e14="" class="login-input-group" style="position: relative;">
                     <uni-input data-v-7d367e14="" class="login-input mail_new">
                        <div class="uni-input-wrapper">
                           <div class="uni-input-placeholder input-placeholder" data-v-7d367e14=""></div>
                           <input maxlength="140" 
                           name="username"
                           value="{{ old('username') }}"  
                           step="" enterkeyhint="next" autocomplete="off" type="" class="uni-input-input"><!---->
                        </div>
                     </uni-input>
                     <uni-label data-v-7d367e14="" class="uni-label-pointer placeh focus">Please enter username</uni-label>
                  </uni-view>
                  <uni-view data-v-7d367e14="" class="login-input-group">
                     <uni-input data-v-7d367e14="" class="login-input password_new">
                        <div class="uni-input-wrapper">
                           <div class="uni-input-placeholder input-placeholder" data-v-7d367e14=""></div>
                           <input maxlength="140"
                           name="password" 
                           step="" enterkeyhint="done" autocomplete="off" type="password" class="uni-input-input"><!---->
                        </div>
                     </uni-input>
                     <uni-label data-v-7d367e14="" class="uni-label-pointer placeh focus">Password</uni-label>
                  </uni-view>
                  <uni-view data-v-7d367e14="" class="mt-20 d-flex-between-center">
                     <uni-view data-v-7d367e14="" class="d-flex align-items-center">
                        <uni-text data-v-7d367e14="" class="iconfont text-secondary mr-12 icon-checkbox"><span></span></uni-text>
                        <uni-text data-v-7d367e14=""><span>Remember password</span></uni-text>
                     </uni-view>
                     <uni-navigator data-v-7d367e14="" class="">Forgot Password</uni-navigator>
                  </uni-view>
                  <uni-view data-v-7d367e14="" class="login-btn-group mt-40">
                     <uni-button data-v-7d367e14="" class="warning-button">Login</uni-button>
                  </uni-view>
                  <uni-view data-v-7d367e14="" class="d-flex mt-30 mb-16" style="justify-content: center;">
                     No account?Go
                     <uni-navigator data-v-7d367e14="" class="ml-4 text-warning"><a href="{{ route('site_register') }}" style="color: #d4ba83; text-decoration: none;">Register</a></uni-navigator>
                  </uni-view>
               </uni-view>
                </form>

            </uni-view>
            <!---->
         </uni-view>
      </uni-page-body>
   </uni-page-wrapper>
</uni-page>

@stop

@section('scripts')
<script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
<script>
   
$(function () {
    
   $('.warning-button').click(function () {
      $('#formLogin').submit();
   });

});
</script>
@stop
