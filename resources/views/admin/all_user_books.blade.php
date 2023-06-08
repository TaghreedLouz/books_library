    @extends('admin.layouts.layout-customer')
    @section('title', 'All User Books')
    @section('content')


    <!-- breadcrumb area start here -->
    <section class="bd-breadcrumb-area p-relative fix theme-bg">
       <!-- breadcrumb background image -->
       <div class="bd-breadcrumb-bg" data-background="{{asset('admin-assets/img/bg/breadcrumb-bg.jpg')}}"></div>
       <div class="bd-breadcrumb-wrapper mb-60 p-relative">
          <div class="container">
             <div class="bd-breadcrumb-shape d-none d-sm-block p-relative">
                <div class="bd-breadcrumb-shape-1">
                   <img src="{{asset('admin-assets/img/shape/curved-line-2.png')}}" alt="img not found!">
                </div>
                <div class="bd-breadcrumb-shape-2">
                   <img src="{{asset('admin-assets/img/shape/white-curved-line.png')}}" alt="img not found!">
                </div>
             </div>
             <div class="row justify-content-center">
                <div class="col-xl-10">
                   <div class="bd-breadcrumb d-flex align-items-center justify-content-center">
                      <div class="bd-breadcrumb-content text-center">
                         <h1 class="bd-breadcrumb-title">All Books</h1>
                         <div class="bd-breadcrumb-list">
                            <span><a href="index.html"><i class="flaticon-hut"></i>Kindedo</a></span>
                            <span>Classes</span>
                         </div>
                      </div>
                   </div>
                </div>
             </div>
          </div>
       </div>
       <div class="bd-wave-wrapper bd-wave-wrapper-3">
          <div class="bd-wave bd-wave-3"></div>
          <div class="bd-wave bd-wave-3"></div>
       </div>




    </section>

    <div style="padding: 10px 120px 10px 120px;">

       <!-- breadcrumb area end here  -->
       <div class="row">
          @if($books->isEmpty())
          <div class="alert alert-info">No books found.</div>
          @else
          @foreach($books as $book)
          <div class="col-xl-4 col-md-6">
             <div class="bd-class-3 fix radius-24 p-relative mb-50 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                <div class="bd-class-thumb">
                   <img src="{{asset('storage/'.$book->book_img)}}" alt="class image not found!">
                </div>
                <div class="bd-class-content-3 theme-bg-6">
                   <h3 class="bd-class-title-3"><a href="{{route('index.books.details',[$book->id])}}">{{$book->name}}</a></h3>
                   <div class="bd-class-meta-wrapper d-flex justify-content-between align-items-center flex-wrap">
                      <div class="bd-class-meta d-flex align-items-center flex-wrap">
                         <span><a href="{{route('index.books.details',[$book->id])}}">{{$book->category->name}}</a></span>
                      </div>
                      <div class="bd-class-meta">
                         <div class="bd-class-meta-price">
                            <span>{{$book->price}}$</span>
                         </div>
                      </div>
                   </div>
                </div>

                <form action="{{route('index.books.buyBook')}}" method="post" enctype="multipart/form-data">
                   @csrf
                   @method('POST')
                   <input type="hidden" name="book_id" value="{{ $book->id }}">

                   <div class="bd-class-btn-3 theme-bg-2 text-center">
                      <button type="submit" href="">Buy Now</button>
                   </div>

                </form>


             </div>
          </div>
          @endforeach
          @endif
          <div class="row">
             <div class="col-12">
                <div class="bd-pagination pt-20 wow fadeInUp" data-wow-duration="1s" data-wow-delay=".3s">
                   <ul class="justify-content-center">
                      {{ $books->links() }}

                   </ul>
                </div>
             </div>

          </div>

          <br />
          <br />
          <br />
          <br />

       </div>
    </div>




    <!-- class area end here -->




    <!-- promotion area end here  -->
    @endsection