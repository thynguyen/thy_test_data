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
<uni-page data-page="pages/common/register" class="animation-show">
   <!----><!---->
   <uni-page-wrapper>
      <uni-page-body>
         <uni-view data-v-638c60da="" class="login-wrap">
            <uni-view data-v-638c60da="" class="login-logo">
               <uni-image data-v-638c60da="" class="d-block">
                  <div style="background-image: url({{ asset('site/images/logo.d37ecb5e.svg') }}); background-position: center center; background-size: contain; background-repeat: no-repeat;"></div>
                  <!----><img src="{{ asset('site/images/logo.d37ecb5e.svg') }}" draggable="false">
               </uni-image>
            </uni-view>
            <uni-view data-v-638c60da="" class="d-flex-between-center" style="color: white; position: fixed; top: 20px; z-index: 99; width: 100%; padding: 0px 27px;">
               <uni-view data-v-638c60da="" class="font-size-32">
                  <svg data-v-638c60da="" data-v-5e7a793c="" width="20" height="20" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg" style="width: 20px; height: 20px; vertical-align: middle; margin-bottom: 2px; margin-right: 5px;">
                     <path data-v-638c60da="" data-v-5e7a793c="" d="M24 44.0002C35.0457 44.0002 44 35.0459 44 24.0002C44 12.9545 35.0457 4.00024 24 4.00024C12.9543 4.00024 4 12.9545 4 24.0002C4 35.0459 12.9543 44.0002 24 44.0002Z" stroke="#ffffff" stroke-width="3"></path>
                     <path data-v-638c60da="" data-v-5e7a793c="" d="M6 30.9856C8.63192 32.041 10.5266 32.041 11.6839 30.9856C13.4199 29.4025 11.9219 24.5978 14.3532 23.2727C16.7844 21.9476 20.4886 27.8214 23.9508 25.8887C27.4129 23.9559 23.6246 18.8023 26.0272 16.713C28.4298 14.6237 31.554 16.98 32.1001 13.4865C32.6462 9.99304 29.5521 11.5082 28.9584 8.20693C28.5625 6.00611 28.5625 4.84884 28.9584 4.73511" stroke="#ffffff" stroke-width="3" stroke-linecap="round"></path>
                     <path data-v-638c60da="" data-v-5e7a793c="" d="M29.0209 43.3505C27.1468 41.4325 26.4721 39.6497 26.9969 38.0019C27.7841 35.5303 29.0826 35.6764 29.6488 34.1482C30.2149 32.6199 28.6156 30.4433 32.1643 28.5826C34.5301 27.3421 37.783 28.7794 41.9228 32.8944" stroke="#ffffff" stroke-width="3" stroke-linecap="round"></path>
                  </svg>
                  <uni-text data-v-638c60da="" style="color: white;"><span>Select language</span></uni-text>
               </uni-view>
               <uni-view data-v-638c60da="" class="kefu1">
                  <svg data-v-638c60da="" data-v-5e7a793c="" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="#16191e" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                     <path data-v-638c60da="" data-v-5e7a793c="" d="M3 18v-6a9 9 0 0 1 18 0v6"></path>
                     <path data-v-638c60da="" data-v-5e7a793c="" d="M21 19a2 2 0 0 1-2 2h-1a2 2 0 0 1-2-2v-3a2 2 0 0 1 2-2h3zM3 19a2 2 0 0 0 2 2h1a2 2 0 0 0 2-2v-3a2 2 0 0 0-2-2H3z"></path>
                  </svg>
               </uni-view>
            </uni-view>

            <form id="formRegister" method="POST" action="{{ route('site_postRegister') }}">
            @csrf
            <uni-view data-v-638c60da="" class="login-container text-white" style="margin-top: 50%; height: 75%; background: transparent; overflow: scroll;">
               <!-- <uni-view data-v-b73e0a18="" data-v-638c60da="" class="u-tabs utabs" style="background: rgb(255, 255, 255);">
                  <uni-view data-v-b73e0a18="" id="urzjqIU33ncMBk8a5woaBdrpPXU7NEAN">
                     <uni-scroll-view data-v-b73e0a18="" class="u-scroll-view">
                        <div class="uni-scroll-view">
                           <div class="uni-scroll-view" style="overflow: auto hidden;">
                              <div class="uni-scroll-view-content">
                                 <uni-view data-v-b73e0a18="" class="u-scroll-box u-tabs-scorll-flex">
                                    <uni-view data-v-b73e0a18="" id="u-tab-item-0" class="u-tab-item u-line-1" style="height: 43px; line-height: 43px; font-size: 15px; transition-duration: 0.5s; flex: 1 1 0%; width: auto;">
                                       Email
                                    </uni-view>
                                    <uni-view data-v-b73e0a18="" id="u-tab-item-1" class="u-tab-item u-line-1" style="height: 43px; line-height: 43px; font-size: 15px; transition-duration: 0.5s; flex: 1 1 0%; width: auto; color: rgb(51, 51, 51);">
                                       Username
                                    </uni-view>
                                    <uni-view data-v-b73e0a18="" class="u-tab-bar" style="width: 20px; transform: translate(102px, -100%); transition-duration: 0.5s; background-color: rgb(60, 136, 255); height: 3px; opacity: 1; border-radius: 3px;"></uni-view>
                                 </uni-view>
                              </div>
                           </div>
                        </div>
                     </uni-scroll-view>
                  </uni-view>
               </uni-view> -->
               
               <!-- <uni-view data-v-638c60da="" class="login-input-group d-flex">
                  <uni-input data-v-638c60da="" class="login-input country">
                     <div class="uni-input-wrapper">
                        <div class="uni-input-placeholder input-placeholder" data-v-638c60da="" style="display: none;"></div>
                        <input maxlength="140" step="" enterkeyhint="done" autocomplete="off" type="" class="uni-input-input">
                     </div>
                  </uni-input>
               </uni-view>-->

               @if ($errors->any())
                  <div class="alert alert-danger">
                     <ul>
                           @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                           @endforeach
                     </ul>
                  </div>
               @endif

               <uni-view data-v-638c60da="" class="login-input-group d-flex">
                  <uni-input data-v-638c60da="" class="login-input  person">
                     <div class="uni-input-wrapper">
                        <div class="uni-input-placeholder input-placeholder" data-v-638c60da=""></div>
                        <input name="full_name"
                        value="{{ old('full_name') }}"  
                        maxlength="140" step="" enterkeyhint="done" autocomplete="off" type="" class="uni-input-input">

                     </div>
                  </uni-input>
                  <uni-label data-v-638c60da="" class="uni-label-pointer placeh focus">FullName</uni-label>
               </uni-view>

               <uni-view data-v-638c60da="">
                    <uni-view data-v-638c60da="" class="login-input-group d-flex">
                        <uni-input data-v-638c60da="" class="login-input person">
                            <div class="uni-input-wrapper">
                                <div class="uni-input-placeholder input-placeholder" data-v-638c60da=""></div>
                                <input name="username" 
                                 value="{{ old('username') }}" 
                                 maxlength="140" step="" 
                                 enterkeyhint="done" autocomplete="off" type="" class="uni-input-input">
                            </div>
                        </uni-input>
                        <uni-label data-v-638c60da="" class="uni-label-pointer placeh focus">Username</uni-label>
                    </uni-view>

                  <uni-view data-v-638c60da="" class="login-input-group">
                     <uni-input data-v-638c60da="" class="login-input password_new">
                        <div class="uni-input-wrapper">
                           <div class="uni-input-placeholder input-placeholder" data-v-638c60da=""></div>
                           <input name="password" maxlength="140" step="" enterkeyhint="done" autocomplete="off" type="password" class="uni-input-input"><!---->
                        </div>
                     </uni-input>
                     <uni-label data-v-638c60da="" class="uni-label-pointer placeh focus">Password</uni-label>
                  </uni-view>
                  <uni-view data-v-638c60da="" class="login-input-group">
                     <uni-input data-v-638c60da="" class="login-input password_new">
                        <div class="uni-input-wrapper">
                           <div class="uni-input-placeholder input-placeholder" data-v-638c60da=""></div>
                           <input name="password_confirmation" maxlength="140" step="" enterkeyhint="done" autocomplete="off" type="password" class="uni-input-input"><!---->
                        </div>
                     </uni-input>
                     <uni-label data-v-638c60da="" class="uni-label-pointer placeh focus">Confirm Password</uni-label>
                  </uni-view>
                  <uni-view data-v-638c60da="" class="login-btn-group mt-40">
                     <uni-button data-v-638c60da="" class="warning-button" style="background: rgb(255, 255, 255); color: black !important;">
                        Register
                     </uni-button>
                  </uni-view>
                  <uni-view data-v-638c60da="" class="d-flex mt-30 mb-20" style="justify-content: center; color: rgb(255, 255, 255);">
                     Already have an account?Go
                     <uni-navigator data-v-638c60da="" class="ml-4 text-warning" style="color: rgb(255, 255, 255); font-weight: bold;">
                        <a style="color: rgb(255, 255, 255); font-weight: bold; text-decoration: none;" href="{{ route('site_login') }}">Login</a>
                    </uni-navigator>
                  </uni-view>
               </uni-view>
            </uni-view>
            </form>

            <!----><!---->
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
      $('#formRegister').submit();
   });
    

});
</script>
@stop
