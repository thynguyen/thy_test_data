@extends('site.layouts.default')
@section('content')
<link rel="stylesheet" href="{{ asset('site/css/market00.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/market01.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/market02.css') }}" />
<link rel="stylesheet" href="{{ asset('site/css/market03.css') }}" />
<uni-page data-page="pages/market/market" class="animation-show">
   <uni-page-wrapper>
      <uni-page-body>
         <uni-view data-v-ca13700e="" class="market-page-class">
            <uni-view data-v-4a5c42e4="" data-v-ca13700e="" class="u-subsection top-tabs-class" style="height: 35px; background-color: rgb(236, 239, 244); padding: 3px; border-radius: 5px;">
               <uni-view data-v-4a5c42e4="" class="u-item u-line-1 u-item-0">
                  <uni-view data-v-4a5c42e4="" class="u-item-text u-line-1" style="color: rgb(0, 0, 0); font-weight: bold; font-size: 14px;">Option</uni-view>
               </uni-view>
               <uni-view data-v-4a5c42e4="" class="u-item u-line-1 u-item-1">
                  <uni-view data-v-4a5c42e4="" class="u-item-text u-line-1" style="color: rgb(128, 128, 128); font-size: 14px;">Contract</uni-view>
               </uni-view>
               <uni-view data-v-4a5c42e4="" class="u-item-bg" style="width: 246px; left: 3px; background-color: rgb(0, 0, 0); height: 29px; z-index: 0; border-radius: 5px; bottom: 3px; transition: 0.35s;"></uni-view>
            </uni-view>
            <uni-view data-v-ca13700e="" class="subsection-class">
               <uni-view data-v-b73e0a18="" data-v-ca13700e="" class="u-tabs" mode="button" style="background: rgb(242, 246, 247); flex: 1 1 0%;">
                  <uni-view data-v-b73e0a18="" id="uUZz9EjgMPsYHNyPN9YT3e7DPAuVI1Wd">
                     <uni-scroll-view data-v-b73e0a18="" class="u-scroll-view">
                        <div class="uni-scroll-view">
                           <div class="uni-scroll-view" style="overflow: auto hidden;">
                              <div class="uni-scroll-view-content">
                                 <!---->
                                 <uni-view data-v-b73e0a18="" class="u-scroll-box">
                                    <uni-view data-v-b73e0a18="" id="u-tab-item-0" class="u-tab-item u-line-1" style="height: 43px; line-height: 43px; font-size: 15px; transition-duration: 0.5s; padding: 0px 15px; flex: 1 1 auto; width: 150px; font-weight: bold; color: rgb(60, 136, 255);">
                                       <!---->All
                                    </uni-view>
                                    <uni-view data-v-b73e0a18="" id="u-tab-item-1" class="u-tab-item u-line-1" style="height: 43px; line-height: 43px; font-size: 15px; transition-duration: 0.5s; padding: 0px 15px; flex: 1 1 auto; width: 150px; color: rgb(51, 51, 51);">
                                       <!---->Optional
                                    </uni-view>
                                    <uni-view data-v-b73e0a18="" class="u-tab-bar" style="width: 20px; transform: translate(65px, -100%); transition-duration: 0.5s; background-color: rgb(60, 136, 255); height: 3px; opacity: 1; border-radius: 3px;"></uni-view>
                                 </uni-view>
                              </div>
                           </div>
                        </div>
                     </uni-scroll-view>
                  </uni-view>
               </uni-view>
               <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon ml-30 u-icon--right">
                  <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-search u-iconfont" style="font-size: 20px; font-weight: normal; top: 0px; color: rgb(128, 128, 128);"><span></span></uni-text>
                  <!---->
               </uni-view>
            </uni-view>
            <uni-view data-v-ca13700e="" class="main-class">
               <uni-view data-v-ca13700e="" class="m-30 market text-white">
                  <uni-view data-v-ca13700e="" class="mt-22" style="display: none;">
                     <uni-view data-v-ca13700e="" class="title d-grid" style="grid-template-columns: 1.1fr 1fr 1fr 0.5fr;">
                        <uni-view data-v-ca13700e="" class="d-flex align-items-center text-warning font-weight-bold">
                           <uni-text data-v-ca13700e=""><span>Product</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="d-flex align-items-center text-warning font-weight-bold justify-content-center">
                           <uni-text data-v-ca13700e=""><span>Latest Price</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="d-flex align-items-center text-warning font-weight-bold justify-content-end">
                           <uni-text data-v-ca13700e=""><span>Today change</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="d-flex align-items-center text-warning font-weight-bold collection">
                           <uni-text data-v-ca13700e=""><span>Collect</span></uni-text>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-63a6c9d6="" data-v-ca13700e="">
                        <uni-view data-v-63a6c9d6="">
                           <uni-image data-v-63a6c9d6="" class="mx-auto d-block my-30" style="width: 160px; height: 120px;">
                              <div style="background-image: url({{ asset('site/images/empty.d67f5618.svg') }}); background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                              <!----><img src="{{ asset('site/images/empty.d67f5618.svg') }}" draggable="false">
                           </uni-image>
                        </uni-view>
                     </uni-view>
                  </uni-view>
                  <uni-view data-v-ca13700e="" class="mt-22">
                     <uni-view data-v-ca13700e="" class="title d-grid" style="grid-template-columns: 1.1fr 1fr 1fr 0.5fr;">
                        <uni-view data-v-ca13700e="" class="d-flex align-items-center text-warning font-weight-bold" style="color: rgb(128, 128, 128);">
                           <uni-text data-v-ca13700e=""><span>Product</span></uni-text>
                           <uni-image data-v-ca13700e="" class="ml-8" style="width: 6px; height: 12px;">
                              <div style="background-image: none; background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                              <!---->
                           </uni-image>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="d-flex align-items-center text-warning font-weight-bold justify-content-center" style="color: rgb(128, 128, 128);">
                           <uni-text data-v-ca13700e=""><span>Latest Price</span></uni-text>
                           <uni-image data-v-ca13700e="" class="ml-8" style="width: 6px; height: 12px;">
                              <div style="background-image: none; background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                              <!---->
                           </uni-image>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="d-flex align-items-center text-warning font-weight-bold justify-content-end" style="color: rgb(128, 128, 128);">
                           <uni-text data-v-ca13700e=""><span>Today change</span></uni-text>
                           <uni-image data-v-ca13700e="" class="ml-8" style="width: 6px; height: 12px;">
                              <div style="background-image: none; background-position: 0% 0%; background-size: 100% 100%; background-repeat: no-repeat;"></div>
                              <!---->
                           </uni-image>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="d-flex align-items-center text-warning font-weight-bold collection" style="color: rgb(128, 128, 128);">
                           <uni-text data-v-ca13700e=""><span>Collect</span></uni-text>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>BTC</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 0.1853</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(240, 74, 90);"><span>87279.3200</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(240, 74, 90);">-3.905%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>ETH</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 9.0671</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(240, 74, 90);"><span>3273.9800</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(240, 74, 90);">-1.363%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>BNB</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 70802.0000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(240, 74, 90);"><span>271.2932</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(240, 74, 90);">-0.181%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>AUD</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 917.0000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(40, 186, 152);"><span>0.6535</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(40, 186, 152);">+0.412%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>HTX</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 0.000000000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(240, 74, 90);"><span>0.000001430</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(240, 74, 90);">-5.594%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>GOLD</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 31.0000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(40, 186, 152);"><span>2610.3479</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(40, 186, 152);">+0.213%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>JPY</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 338.0000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(40, 186, 152);"><span>0.0065</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(40, 186, 152);">+0.382%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>DCJPY</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 70102.0000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(40, 186, 152);"><span>433.9349</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(40, 186, 152);">+0.053%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>EUR</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 726.0000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(40, 186, 152);"><span>1.0612</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(40, 186, 152);">+0.293%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>DCEP</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 72312.0000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(40, 186, 152);"><span>49.7084</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(40, 186, 152);">+2.627%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>LTC</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 9.7746</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(40, 186, 152);"><span>76.3800</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(40, 186, 152);">+2.657%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>BCH</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 3.6730</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(40, 186, 152);"><span>433.4800</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(40, 186, 152);">+3.443%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>XRP</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 7853.9000</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(240, 74, 90);"><span>0.6719</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(240, 74, 90);">-12.242%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>DOGE</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 50261.2507</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(240, 74, 90);"><span>0.3862</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(240, 74, 90);">-20.041%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                     <uni-view data-v-ca13700e="" open-type="reLaunch" class="market-item">
                        <uni-view data-v-ca13700e="" class="left">
                           <uni-text data-v-ca13700e="" class="d-block">
                              <span>
                                 <uni-text data-v-ca13700e="" class="font-size-32 font-weight-bold"><span>ETC</span></uni-text>
                                 <uni-text data-v-ca13700e="" class="font-size-22 opacity-50"><span>/USDT</span></uni-text>
                              </span>
                           </uni-text>
                           <uni-text data-v-ca13700e="" class="d-block font-size-22 opacity-50"><span>24H: 53.0454</span></uni-text>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="text-center">
                           <uni-text data-v-ca13700e="" class="d-block font-size-32 font-weight-bold" style="color: rgb(40, 186, 152);"><span>22.5264</span></uni-text>
                           <!---->
                        </uni-view>
                        <uni-view data-v-ca13700e="">
                           <uni-view data-v-ca13700e="" class="right" style="background-color: rgb(40, 186, 152);">+2.644%</uni-view>
                        </uni-view>
                        <uni-view data-v-ca13700e="" class="collection">
                           <uni-view data-v-e4d6d362="" data-v-ca13700e="" class="u-icon u-icon--right">
                              <uni-text data-v-e4d6d362="" hover-class="" class="u-icon__icon uicon-star u-iconfont" style="font-size: 21px; font-weight: normal; top: 0px;"><span></span></uni-text>
                              <!---->
                           </uni-view>
                        </uni-view>
                     </uni-view>
                  </uni-view>
               </uni-view>
            </uni-view>
            @include('site.includes.floating_bar')
         </uni-view>
      </uni-page-body>
   </uni-page-wrapper>
</uni-page>
@stop
