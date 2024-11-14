@extends('site.layouts.default')
@section('content')
<link rel="stylesheet" href="{{ asset('site/css/order00.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/order01.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/order02.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/order03.css') }}" />

<uni-page data-page="pages/order/index" class="animation-show">
   <uni-page-wrapper>
      <uni-page-body>
         <uni-view data-v-270fd9f4="" class="order-page-class">
            <uni-view data-v-5f285e29="" data-v-270fd9f4="" class="u-navbar-class">
               <uni-view data-v-5f285e29="" class="u-navbar u-border-bottom" style="z-index: 980; background: rgb(255, 255, 255);">
                  <uni-view data-v-5f285e29="" class="u-status-bar" style="height: 0px;"></uni-view>
                  <uni-view data-v-5f285e29="" class="u-navbar-inner" style="height: 44px;">
                     <uni-view data-v-5f285e29="" class="u-slot-content">
                        <uni-view data-v-270fd9f4="" class="title-class">Limited time holding </uni-view>
                     </uni-view>
                     <uni-view data-v-5f285e29="" class="u-slot-right" style="margin-right: 12px;"></uni-view>
                  </uni-view>
               </uni-view>
            </uni-view>
            <uni-view data-v-b73e0a18="" data-v-270fd9f4="" class="u-tabs tabs-class" style="background: rgb(255, 255, 255);">
               <uni-view data-v-b73e0a18="" id="uo7t6Bq7AOiqpQ86SrasuTZjjnMvqR5J">
                  <uni-scroll-view data-v-b73e0a18="" class="u-scroll-view">
                     <div class="uni-scroll-view">
                        <div class="uni-scroll-view" style="overflow: auto hidden;">
                           <div class="uni-scroll-view-content">
                              <uni-view data-v-b73e0a18="" class="u-scroll-box u-tabs-scorll-flex">
                                 <uni-view data-v-b73e0a18="" id="u-tab-item-0" class="u-tab-item u-line-1" style="height: 43px; line-height: 43px; font-size: 15px; transition-duration: 0.5s; flex: 1 1 0%; width: auto;">
                                    Position
                                 </uni-view>
                                 <uni-view data-v-b73e0a18="" id="u-tab-item-1" class="u-tab-item u-line-1" style="height: 43px; line-height: 43px; font-size: 15px; transition-duration: 0.5s; flex: 1 1 0%; width: auto; color: rgb(51, 51, 51);">
                                    History
                                 </uni-view>
                                 <uni-view data-v-b73e0a18="" class="u-tab-bar" style="width: 20px; transform: translate(114.5px, -100%); transition-duration: 0.5s; background-color: rgb(60, 136, 255); height: 3px; opacity: 1; border-radius: 3px;"></uni-view>
                              </uni-view>
                           </div>
                        </div>
                     </div>
                  </uni-scroll-view>
               </uni-view>
            </uni-view>
            <uni-view data-v-270fd9f4="" class="main-class">
               <uni-scroll-view data-v-270fd9f4="" style="height: 100%;">
                  <div class="uni-scroll-view">
                     <div class="uni-scroll-view" style="overflow: hidden auto;">
                        <div class="uni-scroll-view-content">
                           <div class="uni-scroll-view-refresher" style="background-color: rgb(247, 247, 247); height: 0px;">
                              <div class="uni-scroll-view-refresh">
                                 <div class="uni-scroll-view-refresh-inner">
                                    <!----><!---->
                                 </div>
                              </div>
                              <!---->
                           </div>
                           <uni-view data-v-63a6c9d6="" data-v-270fd9f4="">
                              <uni-view data-v-63a6c9d6="">
                                 <uni-image data-v-63a6c9d6="" class="mx-auto d-block my-30" style="width: 160px; height: 120px;">
                                    <div style="background-image: url({{ asset('site/images/empty.d67f5618.svg') }}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                                    <!----><img src="{{ asset('site/images/empty.d67f5618.svg') }}" draggable="false">
                                 </uni-image>
                              </uni-view>
                           </uni-view>
                        </div>
                     </div>
                  </div>
               </uni-scroll-view>
            </uni-view>
            
            @include('site.includes.floating_bar')

         </uni-view>
      </uni-page-body>
   </uni-page-wrapper>
</uni-page>

@stop
