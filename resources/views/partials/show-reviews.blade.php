<li class="comment">
    <div class="comment-body">
        <div class="single-comment">
            <div class="comment-img">
                <img style="max-width: 50px" src="{{ asset('user/assets/images/aman.png') }}" alt="Author Images">
            </div>
            <div class="comment-inner">
                <h6 class="commenter">
                    <a class="hover-flip-item-wrapper" href="javascript:void(0)">
                        <span class="hover-flip-item">
                            <span data-text="Cameron Williamson">{{ $review->name }}</span>
                        </span>
                    </a>
                    <span class="commenter-rating ratiing-four-star">
                       
                    @for ($i = 1; $i <= 5; $i++)
                        <a href="javascript:void(0)"><i class="fas fa-star {{ $i <= $review->rating ? '' : 'empty-rating' }}"></i></a>
                    @endfor
                    </span>
                </h6>
                <div class="comment-text">
                    <p>“{{ $review->comment }}! ” </p>
                </div>
            </div>
        </div>
    </div>
</li>