@include('layouts/header')
<main>
    <!-- Hero Area Start-->
    <div class="slider-area">
      <div
        class="single-slider section-overly slider-height2 d-flex align-items-center"
        data-background="{{asset('assets/img/hero/about.jpg')}}"
      >
        <div class="container">
          <div class="row">
            <div class="col-xl-12">
              <div class="hero-cap text-center">
                <h2>Get your job</h2>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Hero Area End -->
    <!-- Job List Area Start -->
    <div class="job-listing-area pt-120 pb-120">
      <div class="container">
        <div class="row">
          <!-- Left content -->
          <div class="col-xl-3 col-lg-3 col-md-4">
            <div class="row">
              <div class="col-12">
                <div class="small-section-tittle2 mb-45">
                  <div class="ion">
                    <svg
                      xmlns="http://www.w3.org/2000/svg"
                      xmlns:xlink="http://www.w3.org/1999/xlink"
                      width="20px"
                      height="12px"
                    >
                      <path
                        fill-rule="evenodd"
                        fill="rgb(27, 207, 107)"
                        d="M7.778,12.000 L12.222,12.000 L12.222,10.000 L7.778,10.000 L7.778,12.000 ZM-0.000,-0.000 L-0.000,2.000 L20.000,2.000 L20.000,-0.000 L-0.000,-0.000 ZM3.333,7.000 L16.667,7.000 L16.667,5.000 L3.333,5.000 L3.333,7.000 Z"
                      />
                    </svg>
                  </div>
                  <h4>Filter Jobs</h4>
                </div>
              </div>
            </div>
            <!-- Job Category Listing start -->
            <div class="job-category-listing mb-50">
              <!-- single one -->
              <div class="single-listing">
                <div class="small-section-tittle2">
                  <h4>Job Category</h4>
                </div>
                <!-- Select job items start -->
                <div class="select-job-items2 mb-5">
                  <select name="select">
                    <option value="">All Category</option>
                    <option value="">Category 1</option>
                    <option value="">Category 2</option>
                    <option value="">Category 3</option>
                    <option value="">Category 4</option>
                  </select>
                </div>
                <!--  Select job items End-->
              </div>
              <!-- single two -->
            </div>
            <!-- Job Category Listing End -->
          </div>
          <!-- Right content -->
          <div class="col-xl-9 col-lg-9 col-md-8">
            <!-- Featured_job_start -->
            <section class="featured-job-area">
              <div class="container">
                <!-- Count of Job list Start -->
                <div class="row">
                  <div class="col-lg-12">
                    <div class="count-job mb-35">
                      <span>39, 782 Jobs found</span>
                    </div>
                  </div>
                </div>
                <!-- Count of Job list End -->
          
                  
              @foreach ($data as $item)
                <!-- single-job-content -->
                <div class="single-job-items mb-30">
                  <div class="job-items">
                    <div class="company-img">
                      <a href="{{ route('job.show', $item->id) }}"><img src="{{asset('assets/img/icon/job-list1.png')}}" alt=""/>
                    </div>
                    <div class="job-tittle job-tittle2">
                        <h4>{{$item->job_name}}</h4>
                      </a>
                      <ul>
                        <li>
                          <i class="fas fa-map-marker-alt"></i>{{$item->job_location}}
                        </li>
                        <li>{{$item->job_salary}}</li>
                      </ul>
                    </div>
                  </div>
                  <div class="items-link items-link2 f-right">
                    <a href="job_details.html">{{$item->employment_type}}</a>
                    <span>{{$item->created_at}}</span>
                  </div>
                </div>
                
              @endforeach

              </section>
              
            <!-- Featured_job_end -->
          </div>
        </div>
      </div>
    </div>
    <!-- Job List Area End -->
    <!--Pagination Start  -->
    <div class="pagination-area pb-115 text-center">
      <div class="container">
        <div class="row">
          <div class="col-xl-12">
            <div class="single-wrap d-flex justify-content-center">
              <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-start">
                  <li class="page-item active">
                    <a class="page-link" href="#">01</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">02</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#">03</a>
                  </li>
                  <li class="page-item">
                    <a class="page-link" href="#"
                      ><span class="ti-angle-right"></span
                    ></a>
                  </li>
                </ul>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!--Pagination End -->
  </main>
  @include('layouts/footer');