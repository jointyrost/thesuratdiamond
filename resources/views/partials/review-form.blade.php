<div class="comment-respond pro-des-commend-respond mt--0">
    <h5 class="title mb--30">Add a Review</h5>
    <p>Your email address will not be published. Required fields are marked *</p>
    <form action="{{url('review')}}" method="POST">
        @csrf
        <div class="rating-wrapper d-flex-center mb--40">
            Your Rating <span class="require">*</span>
            <div class="rating-inner ml--20">
                <input type="radio" id="star1" name="rating" value="5" required>
                <label for="star1"><i class="fal fa-star"></i></label>
                <input type="radio" id="star2" name="rating" value="4">
                <label for="star2"><i class="fal fa-star"></i></label>
                <input type="radio" id="star3" name="rating" value="3">
                <label for="star3"><i class="fal fa-star"></i></label>
                <input type="radio" id="star4" name="rating" value="2">
                <label for="star4"><i class="fal fa-star"></i></label>
                <input type="radio" id="star5" name="rating" value="1">
                <label for="star5"><i class="fal fa-star"></i></label>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <div class="form-group">
                    <label>Other Notes (optional)</label>
                    <textarea name="comment" placeholder="Your Comment"></textarea>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label>Name <span class="require">*</span></label>
                    <input id="name" name="name" type="text">
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-12">
                <div class="form-group">
                    <label>Email <span class="require">*</span> </label>
                    <input id="email" name="email" type="email">
                </div>
            </div>
            <div class="col-lg-12">
                <div class="form-submit">
                    <input type="hidden" name="product_id" value="{{$product_id}}">
                    <input type="hidden" name="product_type" value="{{$product_type}}">
                    <button type="submit" id="submit" class="axil-btn btn-bg-primary w-auto">Submit Comment</button>
                </div>
            </div>
        </div>
    </form>
</div>