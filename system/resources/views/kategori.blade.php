@extends('template.base')

@section('content')
	
<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Kategori</h1>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-header">
                <div class="card-title">
                  Sepatu Anak-Anak
                </div>
              </div>
                <div>
                  <div class="filter-container p-0 row mt-5">
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="{{url('public')}}/img/1.jpg" data-toggle="lightbox" data-title="sample 1 - white">
                        <img src="{{url('public')}}/img/1.jpg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="{{url('public')}}/img/2.jpg" data-toggle="lightbox" data-title="sample 2 - black">
                        <img src="{{url('public')}}/img/2.jpg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                      <a href="{{url('public')}}/img/3.jpg" data-toggle="lightbox" data-title="sample 3 - red">
                        <img src="{{url('public')}}/img/3.jpg" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="3, 4" data-sort="red sample">
                      <a href="{{url('public')}}/img/4.jpg" data-toggle="lightbox" data-title="sample 4 - red">
                        <img src="{{url('public')}}/img/4.jpg" class="img-fluid mb-2" alt="red sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="2, 4" data-sort="black sample">
                      <a href="{{url('public')}}/img/5.jpg" data-toggle="lightbox" data-title="sample 5 - black">
                        <img src="{{url('public')}}/img/5.jpg" class="img-fluid mb-2" alt="black sample"/>
                      </a>
                    </div>
                    <div class="filtr-item col-sm-2" data-category="1" data-sort="white sample">
                      <a href="{{url('public')}}/img/6.jpg" data-toggle="lightbox" data-title="sample 6 - white">
                        <img src="{{url('public')}}/img/6.jpg" class="img-fluid mb-2" alt="white sample"/>
                      </a>
                    </div>
                  </div>
                </div>

              </div>
            </div>
          </div>
          <div class="col-12">
            <div class="card card-primary">
              <div class="card-body">
                <div class="row">
                  <div class="col-sm-2">
                    <a href="{{url('public')}}/img/7.jpg" data-toggle="lightbox" data-title="sample 1 - white" data-gallery="gallery">
                      <img src="{{url('public')}}/img/7.jpg" class="img-fluid mb-2" alt="white sample" style="width: 350px; height: 150px;" />
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{url('public')}}/img/8.jpg" data-toggle="lightbox" data-title="sample 2 - black" data-gallery="gallery">
                      <img src="{{url('public')}}/img/8.jpg" class="img-fluid mb-2" alt="black sample" style="width: 350px; height: 150px;" />
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{url('public')}}/img/9.jpg" data-toggle="lightbox" data-title="sample 3 - red" data-gallery="gallery">
                      <img src="{{url('public')}}/img/9.jpg" class="img-fluid mb-2" alt="red sample" style="width: 350px; height: 150px;" />
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{url('public')}}/img/10.jpg" data-toggle="lightbox" data-title="sample 4 - red" data-gallery="gallery">
                      <img src="{{url('public')}}/img/10.jpg" class="img-fluid mb-2" alt="red sample" style="width: 350px; height: 150px;" />
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{url('public')}}/img/11.jpg" data-toggle="lightbox" data-title="sample 5 - black" data-gallery="gallery">
                      <img src="{{url('public')}}/img/11.jpg" class="img-fluid mb-2" alt="black sample" style="width: 350px; height: 150px;" />
                    </a>
                  </div>
                  <div class="col-sm-2">
                    <a href="{{url('public')}}/img/12.jpg" data-toggle="lightbox" data-title="sample 6 - white" data-gallery="gallery">
                      <img src="{{url('public')}}/img/12.jpg" class="img-fluid mb-2" alt="white sample" style="width: 350px; height: 150px;" />
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


@endsection