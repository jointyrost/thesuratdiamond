@extends('layouts.main')
@push('styles')

<style>
    .card {
    box-shadow: 0 20px 27px 0 rgb(0 0 0 / 5%);
}

.card {
    position: relative;
    display: flex;
    flex-direction: column;
    min-width: 0;
    word-wrap: break-word;
    background-color: #fff;
    background-clip: border-box;
    border: 0 solid rgba(0,0,0,.125);
    border-radius: 1rem;
}

.card-body {
    -webkit-box-flex: 1;
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    padding: 1.5rem 1.5rem;
} 
</style>

@endpush


@section('content')
<main class="main-wrapper p-5" style="background: #eee;">
        
    <div class="container  ">
        <h1 class="h3 mb-5">Payment</h1>
        <div class="row"> 
          <div class="col-lg-8">
            <div class="accordion" id="accordionPayment"> 
              
              <!-- PayPal -->
              {{-- @if ($orderDetails['payment_method']==='Paypal') --}}
              {{-- <div class="accordion-item mb-3">
                <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                  <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseCC" aria-expanded="false">
                    <input class="form-check-input" type="radio" name="payment" id="payment1">
                    <label class="form-check-label pt-1" for="payment1">
                      Credit Card
                    </label>
                  </div>
                  <span>
                    <svg width="34" height="25" xmlns="http://www.w3.org/2000/svg">
                      <g fill-rule="nonzero" fill="#333840">
                        <path d="M29.418 2.083c1.16 0 2.101.933 2.101 2.084v16.666c0 1.15-.94 2.084-2.1 2.084H4.202A2.092 2.092 0 0 1 2.1 20.833V4.167c0-1.15.941-2.084 2.102-2.084h25.215ZM4.203 0C1.882 0 0 1.865 0 4.167v16.666C0 23.135 1.882 25 4.203 25h25.215c2.321 0 4.203-1.865 4.203-4.167V4.167C33.62 1.865 31.739 0 29.418 0H4.203Z"></path>
                        <path d="M4.203 7.292c0-.576.47-1.042 1.05-1.042h4.203c.58 0 1.05.466 1.05 1.042v2.083c0 .575-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.467-1.05-1.042V7.292Zm0 6.25c0-.576.47-1.042 1.05-1.042H15.76c.58 0 1.05.466 1.05 1.042 0 .575-.47 1.041-1.05 1.041H5.253c-.58 0-1.05-.466-1.05-1.041Zm0 4.166c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042H5.253c-.58 0-1.05-.466-1.05-1.042Zm6.303 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.051.466 1.051 1.041 0 .576-.47 1.042-1.05 1.042h-2.102c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.051-1.041h2.101c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Zm6.304 0c0-.575.47-1.041 1.05-1.041h2.102c.58 0 1.05.466 1.05 1.041 0 .576-.47 1.042-1.05 1.042h-2.101c-.58 0-1.05-.466-1.05-1.042Z"></path>
                      </g>
                    </svg>
                  </span>
                </h2>
                <div id="collapseCC" class="accordion-collapse collapse show" data-bs-parent="#accordionPayment" style="">
                  <div class="accordion-body">
                    <div class="form-group mb-3">
                      <label class="form-label">Card Number</label>
                      <input type="text" class="form-control" placeholder="">
                    </div>
                    <div class="row">
                      <div class="col-lg-6">
                        <div class="form-group">
                            <label>Name on card<span>*</span></label>
                            <input type="text" name="name" value=" ">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group mb-3">
                          <label class="form-label">Expiry date</label>
                          <input type="text" class="form-control" placeholder="MM/YY">
                        </div>
                      </div>
                      <div class="col-lg-3">
                        <div class="form-group mb-3">
                          <label class="form-label">CVV Code</label>
                          <input type="password" class="form-control">
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="accordion-item mb-3 border">
                <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                  <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapsePP" aria-expanded="false">
                    <input class="form-check-input" type="radio" name="payment" id="payment2">
                    <label class="form-check-label pt-1" for="payment2">
                      PayPal
                    </label>
                  </div>
                  <span>
                    <svg width="103" height="25" xmlns="http://www.w3.org/2000/svg">
                      <g fill="none" fill-rule="evenodd">
                        <path d="M8.962 5.857h7.018c3.768 0 5.187 1.907 4.967 4.71-.362 4.627-3.159 7.187-6.87 7.187h-1.872c-.51 0-.852.337-.99 1.25l-.795 5.308c-.052.344-.233.543-.505.57h-4.41c-.414 0-.561-.317-.452-1.003L7.74 6.862c.105-.68.478-1.005 1.221-1.005Z" fill="#009EE3"></path>
                        <path d="M39.431 5.542c2.368 0 4.553 1.284 4.254 4.485-.363 3.805-2.4 5.91-5.616 5.919h-2.81c-.404 0-.6.33-.705 1.005l-.543 3.455c-.082.522-.35.779-.745.779h-2.614c-.416 0-.561-.267-.469-.863l2.158-13.846c.106-.68.362-.934.827-.934h6.263Zm-4.257 7.413h2.129c1.331-.051 2.215-.973 2.304-2.636.054-1.027-.64-1.763-1.743-1.757l-2.003.009-.687 4.384Zm15.618 7.17c.239-.217.482-.33.447-.062l-.085.642c-.043.335.089.512.4.512h2.323c.391 0 .581-.157.677-.762l1.432-8.982c.072-.451-.039-.672-.38-.672H53.05c-.23 0-.343.128-.402.48l-.095.552c-.049.288-.18.34-.304.05-.433-1.026-1.538-1.486-3.08-1.45-3.581.074-5.996 2.793-6.255 6.279-.2 2.696 1.732 4.813 4.279 4.813 1.848 0 2.674-.543 3.605-1.395l-.007-.005Zm-1.946-1.382c-1.542 0-2.616-1.23-2.393-2.738.223-1.507 1.665-2.737 3.206-2.737 1.542 0 2.616 1.23 2.394 2.737-.223 1.508-1.664 2.738-3.207 2.738Zm11.685-7.971h-2.355c-.486 0-.683.362-.53.808l2.925 8.561-2.868 4.075c-.241.34-.054.65.284.65h2.647a.81.81 0 0 0 .786-.386l8.993-12.898c.277-.397.147-.814-.308-.814H67.6c-.43 0-.602.17-.848.527l-3.75 5.435-1.676-5.447c-.098-.33-.342-.511-.793-.511h-.002Z" fill="#113984"></path>
                        <path d="M79.768 5.542c2.368 0 4.553 1.284 4.254 4.485-.363 3.805-2.4 5.91-5.616 5.919h-2.808c-.404 0-.6.33-.705 1.005l-.543 3.455c-.082.522-.35.779-.745.779h-2.614c-.417 0-.562-.267-.47-.863l2.162-13.85c.107-.68.362-.934.828-.934h6.257v.004Zm-4.257 7.413h2.128c1.332-.051 2.216-.973 2.305-2.636.054-1.027-.64-1.763-1.743-1.757l-2.004.009-.686 4.384Zm15.618 7.17c.239-.217.482-.33.447-.062l-.085.642c-.044.335.089.512.4.512h2.323c.391 0 .581-.157.677-.762l1.431-8.982c.073-.451-.038-.672-.38-.672h-2.55c-.23 0-.343.128-.403.48l-.094.552c-.049.288-.181.34-.304.05-.433-1.026-1.538-1.486-3.08-1.45-3.582.074-5.997 2.793-6.256 6.279-.199 2.696 1.732 4.813 4.28 4.813 1.847 0 2.673-.543 3.604-1.395l-.01-.005Zm-1.944-1.382c-1.542 0-2.616-1.23-2.393-2.738.222-1.507 1.665-2.737 3.206-2.737 1.542 0 2.616 1.23 2.393 2.737-.223 1.508-1.665 2.738-3.206 2.738Zm10.712 2.489h-2.681a.317.317 0 0 1-.328-.362l2.355-14.92a.462.462 0 0 1 .445-.363h2.682a.317.317 0 0 1 .327.362l-2.355 14.92a.462.462 0 0 1-.445.367v-.004Z" fill="#009EE3"></path>
                        <path d="M4.572 0h7.026c1.978 0 4.326.063 5.895 1.45 1.049.925 1.6 2.398 1.473 3.985-.432 5.364-3.64 8.37-7.944 8.37H7.558c-.59 0-.98.39-1.147 1.449l-.967 6.159c-.064.399-.236.634-.544.663H.565c-.48 0-.65-.362-.525-1.163L3.156 1.17C3.28.377 3.717 0 4.572 0Z" fill="#113984"></path>
                        <path d="m6.513 14.629 1.226-7.767c.107-.68.48-1.007 1.223-1.007h7.018c1.161 0 2.102.181 2.837.516-.705 4.776-3.793 7.428-7.837 7.428H7.522c-.464.002-.805.234-1.01.83Z" fill="#172C70"></path>
                      </g>
                    </svg>
                  </span>
                </h2>
                <div id="collapsePP" class="accordion-collapse collapse" data-bs-parent="#accordionPayment" style="">
                  <div class="accordion-body">
                    <div class="form-group px-2 col-lg-6 mb-3">
                      <label class="form-label">Email address</label>
                      <input type="email" class="form-control">
                    </div>
                    <form action="{{ route('paypal.create') }}" method="POST">
                        @csrf
                        <div class="row">
                             <div class="col-md-4 col-md-offset-2 text-center"> 
                                <input type="hidden" name="order_id" value="{{ $orderDetails['order_id'] }}">
                                <input type="hidden" name="total_amount" value="{{ $orderDetails['total_amount'] }}">
                                <input type="hidden" name="payment_method" value="{{ $orderDetails['payment_method'] }}"> 
                                <button type="submit" class="axil-btn btn-bg-primary checkout-btn mt-2">Pay with PayPal</button>
                             </div>
                         </div> 
                    </form>
                  </div>
                </div>
              </div> --}}
              {{-- @endif --}}
              

              {{-- rozarpay payment  start--}}


              <div class="accordion-item mb-3 border">
                <h2 class="h5 px-4 py-3 accordion-header d-flex justify-content-between align-items-center">
                  <div class="form-check w-100 collapsed" data-bs-toggle="collapse" data-bs-target="#collapseRP" aria-expanded="false">
                    <input class="form-check-input" type="radio" name="payment" id="payment3">
                    <label class="form-check-label pt-1" for="payment3">
                      RozarPay
                    </label>
                  </div>
                  <span>
                    
                    <svg width="103" height="25" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"  viewBox="0 0 122.88 26.53" style="enable-background:new 0 0 122.88 26.53" xml:space="preserve"><style type="text/css"><![CDATA[
                      .st0{fill:#3395FF;}
                      .st1{fill:#072654;}
                    ]]></style><g><polygon class="st1" points="11.19,9.03 7.94,21.47 0,21.47 1.61,15.35 11.19,9.03"/><path class="st1" d="M28.09,5.08C29.95,5.09,31.26,5.5,32,6.33s0.92,2.01,0.51,3.56c-0.27,1.06-0.82,2.03-1.59,2.8 c-0.8,0.8-1.78,1.38-2.87,1.68c0.83,0.19,1.34,0.78,1.5,1.79l0.03,0.22l0.6,5.09h-3.7l-0.62-5.48c-0.01-0.18-0.06-0.36-0.15-0.52 c-0.09-0.16-0.22-0.29-0.37-0.39c-0.31-0.16-0.65-0.24-1-0.25h-0.21h-2.28l-1.74,6.63h-3.46l4.3-16.38H28.09L28.09,5.08z M122.88,9.37l-4.4,6.34l-5.19,7.52l-0.04,0.04l-1.16,1.68l-0.04,0.06L112,25.09l-1,1.44h-3.44l4.02-5.67l-1.82-11.09h3.57 l0.9,7.23l4.36-6.19l0.06-0.09l0.07-0.1l0.07-0.09l0.54-1.15H122.88L122.88,9.37z M92.4,10.25c0.66,0.56,1.09,1.33,1.24,2.19 c0.18,1.07,0.1,2.18-0.21,3.22c-0.29,1.15-0.78,2.23-1.46,3.19c-0.62,0.88-1.42,1.61-2.35,2.13c-0.88,0.48-1.85,0.73-2.85,0.73 c-0.71,0.03-1.41-0.15-2.02-0.51c-0.47-0.28-0.83-0.71-1.03-1.22l-0.06-0.2l-1.77,6.75h-3.43l3.51-13.4l0.02-0.06l0.01-0.06 l0.86-3.25h3.35l-0.57,1.88l-0.01,0.08c0.49-0.7,1.15-1.27,1.91-1.64c0.76-0.4,1.6-0.6,2.45-0.6C90.84,9.43,91.7,9.71,92.4,10.25 L92.4,10.25z M88.26,12.11c-0.4-0.01-0.8,0.07-1.18,0.22c-0.37,0.15-0.71,0.38-1,0.66c-0.68,0.7-1.15,1.59-1.36,2.54 c-0.3,1.11-0.28,1.95,0.02,2.53c0.3,0.58,0.87,0.88,1.72,0.88c0.81,0.02,1.59-0.29,2.18-0.86c0.66-0.69,1.12-1.55,1.33-2.49 c0.29-1.09,0.27-1.96-0.03-2.57S89.08,12.11,88.26,12.11L88.26,12.11z M103.66,9.99c0.46,0.29,0.82,0.72,1.02,1.23l0.07,0.19 l0.44-1.66h3.36l-3.08,11.7h-3.37l0.45-1.73c-0.51,0.61-1.15,1.09-1.87,1.42c-0.7,0.32-1.45,0.49-2.21,0.49 c-0.88,0.04-1.76-0.21-2.48-0.74c-0.66-0.52-1.1-1.28-1.24-2.11c-0.18-1.06-0.12-2.14,0.19-3.17c0.3-1.15,0.8-2.24,1.49-3.21 c0.63-0.89,1.44-1.64,2.38-2.18c0.86-0.5,1.84-0.77,2.83-0.77C102.36,9.43,103.06,9.61,103.66,9.99L103.66,9.99z M101.92,12.14 c-0.41,0-0.82,0.08-1.19,0.24c-0.38,0.16-0.72,0.39-1.01,0.68c-0.67,0.71-1.15,1.59-1.36,2.55c-0.28,1.08-0.28,1.9,0.04,2.49 c0.31,0.59,0.89,0.87,1.75,0.87c0.4,0.01,0.8-0.07,1.18-0.22s0.71-0.38,1-0.66c0.59-0.63,1.02-1.38,1.26-2.22l0.08-0.31 c0.3-1.11,0.29-1.96-0.03-2.53C103.33,12.44,102.76,12.14,101.92,12.14L101.92,12.14z M81.13,9.63l0.22,0.09l-0.86,3.19 c-0.49-0.26-1.03-0.39-1.57-0.39c-0.82-0.03-1.62,0.24-2.27,0.75c-0.56,0.48-0.97,1.12-1.18,1.82l-0.07,0.27l-1.6,6.11h-3.42 l3.1-11.7h3.37l-0.44,1.72c0.42-0.58,0.96-1.05,1.57-1.4c0.68-0.39,1.44-0.59,2.22-0.59C80.51,9.48,80.83,9.52,81.13,9.63 L81.13,9.63z M68.5,10.19c0.76,0.48,1.31,1.24,1.52,2.12c0.25,1.06,0.21,2.18-0.11,3.22c-0.3,1.18-0.83,2.28-1.58,3.22 c-0.71,0.91-1.61,1.63-2.64,2.12c-1.05,0.49-2.19,0.74-3.35,0.73c-1.22,0-2.22-0.24-3-0.73c-0.77-0.48-1.32-1.24-1.54-2.12 c-0.24-1.06-0.2-2.18,0.11-3.22c0.3-1.17,0.83-2.27,1.58-3.22c0.71-0.9,1.62-1.63,2.66-2.12c1.06-0.49,2.22-0.75,3.39-0.73 C66.57,9.41,67.6,9.67,68.5,10.19L68.5,10.19z M64.84,12.1c-0.81-0.01-1.59,0.3-2.18,0.86c-0.61,0.58-1.07,1.43-1.36,2.57 c-0.6,2.29-0.02,3.43,1.74,3.43c0.8,0.02,1.57-0.29,2.15-0.85c0.6-0.57,1.04-1.43,1.34-2.58c0.3-1.13,0.31-1.98,0.01-2.57 C66.25,12.37,65.68,12.1,64.84,12.1L64.84,12.1z M57.89,9.76l-0.6,2.32l-7.55,6.67h6.06l-0.72,2.73H45.05l0.63-2.41l7.43-6.57 h-5.65l0.72-2.73H57.89L57.89,9.76z M40.96,9.99c0.46,0.29,0.82,0.72,1.02,1.23l0.07,0.19l0.44-1.66h3.37l-3.07,11.7h-3.37 l0.45-1.73c-0.51,0.6-1.14,1.08-1.85,1.41s-1.48,0.5-2.27,0.5c-0.88,0.04-1.74-0.22-2.45-0.74c-0.66-0.52-1.1-1.28-1.24-2.11 c-0.18-1.06-0.12-2.14,0.19-3.17c0.29-1.15,0.8-2.24,1.49-3.21c0.63-0.89,1.44-1.64,2.37-2.18c0.86-0.5,1.84-0.76,2.83-0.76 C39.66,9.44,40.36,9.62,40.96,9.99L40.96,9.99z M39.23,12.14c-0.41,0-0.81,0.08-1.19,0.24c-0.38,0.16-0.72,0.39-1.01,0.68 c-0.68,0.71-1.15,1.59-1.36,2.55c-0.28,1.08-0.27,1.9,0.04,2.49c0.31,0.59,0.89,0.87,1.75,0.87c0.4,0.01,0.8-0.07,1.18-0.22 c0.37-0.15,0.72-0.38,1-0.66c0.59-0.62,1.03-1.38,1.26-2.22l0.08-0.31c0.29-1.11,0.26-1.94-0.03-2.53 C40.64,12.44,40.06,12.14,39.23,12.14L39.23,12.14z M26.85,7.81h-3.21l-1.13,4.28h3.21c1.01,0,1.81-0.17,2.35-0.52 c0.57-0.37,0.98-0.95,1.13-1.63c0.2-0.72,0.11-1.27-0.27-1.62C28.55,7.99,27.86,7.81,26.85,7.81L26.85,7.81z"/><polygon class="st0" points="18.4,0 12.76,21.47 8.89,21.47 12.7,6.93 6.86,10.78 7.9,6.95 18.4,0"/></g></svg>
                  </span>
                </h2>
                <div id="collapseRP" class="accordion-collapse collapse" data-bs-parent="#accordionPayment" style="">
                  <div class="accordion-body">
                    {{-- <div class="form-group px-2 col-lg-6 mb-3">
                      <label class="form-label">Email address</label>
                      <input type="email" class="form-control">
                    </div> --}}
                        <div class="row">
                             <div class="col-md-4 col-md-offset-2 text-center"> 
                                <button id="rzp-button1" type="submit" class="axil-btn btn-bg-primary checkout-btn mt-2">Pay with RozarPay</button>
                             </div>
                         </div> 
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!-- Right -->
          <div class="col-lg-3">
            <div class="card position-sticky top-0">
              <div class="p-3 bg-light bg-opacity-10">
                <h6 class="card-title mb-3 h3">Order Summary</h6>
                <div class="d-flex justify-content-between mb-1 h4">
                  <span>Subtotal</span> <span>
                    @if ($data['payment_currency'] === "USD")$@else₹@endif
                  {{ number_format($data['before_shipping'], 2)}}</span>
                </div>
                <div class="d-flex justify-content-between mb-1 h4">
                  <span>Shipping</span> <span> 
                    @if ($data['payment_currency'] === "USD")
                    $0
                    @else
                    ₹0
                    @endif
                  </span>
                </div>
                {{-- <div class="d-flex justify-content-between mb-1 h4">
                  <span>Coupon (Code: NEWYEAR)</span> <span class="text-danger">-</span>
                </div> --}}
                <hr>
                <div class="d-flex justify-content-between mb-4 h4">
                  <span>TOTAL</span> <strong class="text-dark">
                    @if ($data['payment_currency'] === "USD")$@else₹@endif
                    {{ number_format($data['amount'], 2)}}</strong>
                </div>
                <div class="form-check mb-1 small">
                  <input class="form-check-input" type="checkbox" value="" id="tnc">
                  <label class="form-check-label" for="tnc">
                    I agree to the <a href="#">terms and conditions</a>
                  </label>
                </div>
                <div class="form-check mb-3 small">
                  <input class="form-check-input" type="checkbox" value="" id="subscribe">
                  <label class="form-check-label" for="subscribe">
                    Get emails about product updates and events. If you change your mind, you can unsubscribe at any time. <a href="#">Privacy Policy</a>
                  </label>
                </div>
                {{-- <button class="btn btn-primary w-100 mt-2">Place order</button> --}}
                <button type="button" id="submit-button" class="axil-btn btn-bg-primary checkout-btn mt-2">Place order</button>
              </div>
            </div>
          </div>
        </div>
      </div>

</main>
@endsection
@push('scripts')
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "rzp_test_M2EkLjsjHzpcGW", // Enter the Key ID generated from the Dashboard
    "amount": "{{$data['amount']}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "{{$data['payment_currency']}}",
    "name": "The Surat Diamond", //your business name
    "description": "Transaction is for Order",
    "image": "https://yt3.googleusercontent.com/ytc/AIdro_n9Wrrd23vL8_Ml-ZuxgNqA5F97MO_8trdSutivkCLVXz4=s160-c-k-c0x00ffffff-no-rj",
    "order_id": "{{$data['order_id']}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler" : function(response){
      const token = $('meta[name="csrf-token"]').attr('content');

                  $.ajax({
                    url: '/payment-callback',
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                      'X-CSRF-TOKEN': token
                    },

                    data: {
                      razorpay_payment_id: response.razorpay_payment_id,
                      razorpay_order_id: response.razorpay_order_id,
                      name: "{{$data['name']}}", //your customer's name
                      email:" {{$data['email']}}", 
                      contact: "{{$data['phone']}}"

                    },

                    success: function(){
                      window.location.href = `/payment-success?payment_id=${response.razorpay_payment_id}&order_id=${response.razorpay_order_id}&name={{$data['name']}}&email={{$data['email']}}&contact={{$data['phone']}}&amount={{$data['amount']}}&payment_currency={{$data['payment_currency']}}&status=Paid&order_main_id={{$data['order_main_id']}}`;
                    },

                    error: function(xhr, status, error){
                      console.error('payment verification error', xhr.responseText);
                      window.location.href = `/payment-success?payment_id=${response.razorpay_payment_id}&order_id=${response.razorpay_order_id}&name={{$data['name']}}&email={{$data['email']}}&contact={{$data['phone']}}&amount={{$data['amount']}}&payment_currency={{$data['payment_currency']}}&status=Failed&order_main_id={{$data['order_main_id']}}`;
                    }

                  });
                },
                "prefill": { //We recommend using the prefill parameter to auto-fill customer's contact information, especially their phone number
                    "name": "{{$data['name']}}", //your customer's name
                    "email": "{{$data['email']}}", 
                    "contact": "{{$data['phone']}}"  //Provide the customer's phone number for better conversion rates 
                },
                "notes": {
                    "address": "Razorpay Corporate Office"
                },
                "theme": {
                    "color": "#3399cc"
                }
            };
            var rzp1 = new Razorpay(options);
            rzp1.on('payment.failed', function (response){
                    // alert(response.error.code);
                    // alert(response.error.description);
                    // alert(response.error.source);
                    // alert(response.error.step);
                    // alert(response.error.reason);
                    // alert(response.error.metadata.order_id);
                    // alert(response.error.metadata.payment_id);

                    // Redirect to payment-failure page with parameters
            window.location.href = `/payment-failure?payment_id=${response.error.metadata.payment_id}&order_id=${response.error.metadata.order_id}&name={{$data['name']}}&email={{$data['email']}}&contact={{$data['phone']}}&amount={{$data['amount']}}&payment_currency={{$data['payment_currency']}}&status=Failed&code=${response.error.code}&description=${response.error.description}&source=${response.error.source}&step=${response.error.step}&reason=${response.error.reason}`;
            });
            document.getElementById('rzp-button1').onclick = function(e){

              if (document.getElementById('tnc').checked) {
                    rzp1.open();
                e.preventDefault();
                } else {
                    alert("Please agree to the terms and conditions.");
                }
                
            }

                    // New button for submitting the form directly
            document.getElementById('submit-button').onclick = function(e) {
                // Check if terms and conditions are accepted
                if (document.getElementById('tnc').checked) {
                  rzp1.open();
                  e.preventDefault();
                } else {
                    alert("Please agree to the terms and conditions.");
                }
            };

</script>
{{-- 
<script>
    $(document).ready(function(){
      $('#pay-with-rozarpay').click(function(){
        const order_id = $('#order_id').val();
        const total_amount = $('#total_amount').val();
        const payment_method = $('#payment_method').val();
        
        const token = $('meta[name="csrf-token"]').attr('content');

        $.ajax({
          url: '/create-order',
          type: 'POST',
          dataType: 'json',
          headers: {
            'X-CSRF-TOKEN': token
          },

          data: {
            order_id:order_id,
            total_amount:total_amount,
            payment_method:payment_method,
          },

          success: function(data){

            const name = data.name;
            const email = data.email;
            const contact = data.phone;

            console.log(data);

              var options ={
                "key": data.key,
                "amount": data.amount,
                "currency" : "INR",
                "name" : "The Surat Diamond",
                "description" : "Payment for order",
                "order_id" : data.order_id,
                "handler" : function(response){

                  $.ajax({
                    url: '/payment-callback',
                    type: 'POST',
                    dataType: 'json',
                    headers: {
                      'X-CSRF-TOKEN': token
                    },

                    data: {
                      razorpay_payment_id: response.razorpay_payment_id,
                      razorpay_order_id: response.razorpay_order_id
                    },

                    success: function(){
                      window.location.href = '/payment-success';
                    },

                    error: function(xhr, status, error){
                      console.error('payment verification error', xhr.responseText);
                      window.location.href = '/payment-failure';
                    }

                  });
                },
                "prefill": {
                    "name": name,
                    "email": email,
                    "contact": contact
                },
                
            };
            var rzp1 = new Razorpay(options);
            rzp1.open();
          },
         

        });

      });
    });

</script> --}}
@endpush