@extends('site.layouts.default')
@section('content')
<link rel="stylesheet" href="{{ asset('site/css/assets00.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/assets01.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/assets02.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/assets03.css') }}" />

<uni-page data-page="pages/fund/assets" class="animation-show">
   <uni-page-wrapper>
      <uni-page-body>
         <uni-view data-v-2d5035a0="" class="assets-page-class">
            <uni-view data-v-2d5035a0="" class="heard-class">
               <uni-view data-v-2d5035a0="">
                  <uni-view data-v-2d5035a0="" class="bg">
                     <uni-view data-v-2d5035a0="" class="d-flex justify-content-between">
                        <uni-text data-v-2d5035a0="" class="d-block font-size-28 mr-10 opacity-50"><span>Convert total assets (USDT)</span></uni-text>
                        <uni-view data-v-e4d6d362="" data-v-2d5035a0="" class="u-icon u-icon--right">
                           <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-eye-fill u-iconfont" style="font-size: 17px; font-weight: normal; top: 0px; color: rgb(255, 255, 255);"><span></span></uni-text>
                           <!---->
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-2d5035a0="" class="mt-30">
                        <uni-view data-v-2d5035a0="" class="d-flex align-items-center">
                           <uni-text data-v-2d5035a0="" class="font-size-40 mr-20 font-weight-bold"><span>0.0000</span></uni-text>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-2d5035a0="" class="d-block font-size-24 mt-8 lockInstructions-class">
                        <uni-view data-v-2d5035a0="">
                           <uni-text data-v-2d5035a0="" class="opacity-50"><span>Available</span></uni-text>
                           <uni-text data-v-2d5035a0="" class="money-class" style="margin-left: 5px;"><span>0.0000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-2d5035a0="" class="icon-warp-class">
                           <uni-text data-v-2d5035a0="" class="opacity-50"><span>Locking</span></uni-text>
                           <uni-view data-v-e4d6d362="" data-v-2d5035a0="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-question-circle u-iconfont" style="font-size: 14px; font-weight: normal; top: 0px; color: rgb(182, 201, 234);"><span></span></uni-text>
                              <!---->
                           </uni-view>
                           <uni-text data-v-2d5035a0="" class="money-class"><span>0</span></uni-text>
                        </uni-view>
                        <uni-view data-v-2d5035a0="">
                           <uni-view data-v-2d5035a0="" class="opacity-50">Conversion (USD)</uni-view>
                           <uni-view data-v-2d5035a0="" class="money-class">0</uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-2d5035a0="" class="earnings-wrap">
                        <uni-view data-v-2d5035a0="" class="d-grid-columns-3 pt-38 mb-24 mx-30 names-class">
                           <uni-view data-v-2d5035a0="" class="text-center">
                              <uni-text data-v-2d5035a0="" class="name-class d-block font-size-22 mt-12"><span>Details</span></uni-text>
                           </uni-view>
                           <uni-view data-v-2d5035a0="" class="text-center">
                              <uni-text data-v-2d5035a0="" class="name-class d-block font-size-22 mt-12"><span>Deposit</span></uni-text>
                           </uni-view>
                           <uni-view data-v-2d5035a0="" class="text-center">
                              <uni-text data-v-2d5035a0="" class="name-class d-block font-size-22 mt-12"><span>Withdraw</span></uni-text>
                           </uni-view>
                        </uni-view>
                     </uni-view>
                  </uni-view>
               </uni-view>
            </uni-view>
            <uni-view data-v-2d5035a0="" class="main-class">
               <uni-view data-v-2d5035a0="" class="subsection-class">
                  <uni-view data-v-4a5c42e4="" data-v-2d5035a0="" class="u-subsection" active-colo="#325DE3" style="height: 35px; background-color: rgb(236, 239, 244); padding: 3px; border-radius: 5px;">
                     <uni-view data-v-4a5c42e4="" class="u-item u-line-1 u-item-0">
                        <uni-view data-v-4a5c42e4="" class="u-item-text u-line-1" style="color: rgb(0, 0, 0); font-weight: bold; font-size: 14px;">Option</uni-view>
                     </uni-view>
                     <uni-view data-v-4a5c42e4="" class="u-item u-line-1 u-item-1">
                        <uni-view data-v-4a5c42e4="" class="u-item-text u-line-1" style="color: rgb(128, 128, 128); font-size: 14px;">Contract</uni-view>
                     </uni-view>
                     <uni-view data-v-4a5c42e4="" class="u-item-bg" style="width: 236px; left: 3px; background-color: rgb(0, 0, 0); height: 29px; z-index: 0; border-radius: 5px; bottom: 3px; transition: 0.35s;"></uni-view>
                  </uni-view>
               </uni-view>
               <uni-scroll-view data-v-2d5035a0="" class="scroll-view-class">
                  <div class="uni-scroll-view">
                     <div class="uni-scroll-view" style="overflow: hidden auto;">
                        <div class="uni-scroll-view-content">
                           <div class="uni-scroll-view-refresher" style="background-color: rgb(255, 255, 255); height: 0px;">
                              <div class="uni-scroll-view-refresh">
                                 <div class="uni-scroll-view-refresh-inner">
                                    <!----><!---->
                                 </div>
                              </div>
                              <!---->
                           </div>
                           <uni-view data-v-2d5035a0="" class="main-content-class">
                              <uni-view data-v-1a12f82f="" data-v-2d5035a0="" class="transition" style="transform: translateX(0px); opacity: 1; transition: -webkit-transform 300ms, transform 300ms; transform-origin: 50% 50%;">
                                 <uni-view data-v-2d5035a0="" class="d-flex-between-center statistics-class">
                                    <uni-view data-v-2d5035a0="" class="flex-1 d-flex flex-direction-column justify-content-center align-items-center">
                                       <uni-view data-v-2d5035a0="" class="title-class">
                                          Today's earnings (USD)
                                          <uni-view data-v-e4d6d362="" data-v-2d5035a0="" class="u-icon u-icon--right">
                                             <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-question-circle u-iconfont" style="font-size: 14px; font-weight: normal; top: 0px; color: rgb(182, 201, 234);"><span></span></uni-text>
                                             <!---->
                                          </uni-view>
                                       </uni-view>
                                       <uni-view data-v-2d5035a0="" class="value-class">0</uni-view>
                                    </uni-view>
                                    <uni-view data-v-2d5035a0="" class="flex-1 d-flex flex-direction-column justify-content-center align-items-center">
                                       <uni-view data-v-2d5035a0="" class="title-class">Today's total number of orders</uni-view>
                                       <uni-view data-v-2d5035a0="" class="value-class">0</uni-view>
                                    </uni-view>
                                 </uni-view>
                                 <uni-view data-v-2d5035a0="">
                                    <uni-view data-v-2d5035a0="">Position held (0)</uni-view>
                                    <uni-view data-v-2d5035a0=""></uni-view>
                                 </uni-view>
                                 <uni-view data-v-2d5035a0="" class="contract-list-class">
                                    <uni-view data-v-78ae7d22="" data-v-2d5035a0="" class="u-empty" style="margin-top: 0px;">
                                       <uni-view data-v-e4d6d362="" data-v-78ae7d22="" class="u-icon u-icon--bottom">
                                          <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-empty-list u-iconfont" style="font-size: 60px; font-weight: normal; top: 0px; color: rgb(192, 196, 204);"><span></span></uni-text>
                                          <uni-text data-v-e4d6d362="" class="u-icon__label" style="color: rgb(192, 196, 204); font-size: 13px; margin: 7px 0px 0px;"><span>No information</span></uni-text>
                                       </uni-view>
                                       <uni-view data-v-78ae7d22="" class="u-slot-wrap"></uni-view>
                                    </uni-view>
                                 </uni-view>
                              </uni-view>
                           </uni-view>
                        </div>
                     </div>
                  </div>
               </uni-scroll-view>
            </uni-view>
            
            @include('site.includes.floating_bar')


            <uni-view data-v-5ca1a6d2="" data-v-2d5035a0="">
               <!---->
            </uni-view>
            <uni-view data-v-5ca1a6d2="" data-v-2d5035a0="">
               <!---->
            </uni-view>
         </uni-view>
      </uni-page-body>
   </uni-page-wrapper>
</uni-page>
@stop
