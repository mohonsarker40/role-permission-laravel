@extends('admin.home')

@section('content')
   <section class="section dashboard">
       <div class="row">
           <div class="col-xxl-2 col-md-3">
               <div class="card info-card sales-card">
                   <div class="card-body">
                       <div class="d-flex align-items-center pt-4">
                           <div class="card-icon rounded-circle d-flex align-items-center justify-content-center">
                               <i class="bi bi-person"></i>
                           </div>
                           <div class="ps-3">
                               <h6>{{ $users }}</h6>
                               <span class="text-success small pt-1 fw-bold">User</span></span>
                           </div>
                       </div>
                   </div>

               </div>
           </div>
       </div>
   </section>
@endsection