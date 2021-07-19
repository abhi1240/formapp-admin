@extends('layouts.app')
@section('content')
<div class="contents">
   <div class="container-fluid">
      <div class="row">
         <div class="col-lg-12">
            <div class="contact-breadcrumb">
               <div class="breadcrumb-main add-contact justify-content-sm-between ">
                  <div class=" d-flex flex-wrap justify-content-center breadcrumb-main__wrapper">
                     <div class="d-flex align-items-center add-contact__title justify-content-center mr-sm-25">
                        <h4 class="text-capitalize fw-500 breadcrumb-title">Data List</h4>
                        <span class="sub-title ml-sm-25 pl-sm-25"></span>
                     </div>
                     <div class="action-btn mt-sm-0 mt-15">
                        <a href="{{ route('firestore.addNew') }}" class="btn px-20 btn-primary ">
                        <i class="las la-plus fs-16"></i>Add New
                        </a>
                     </div>
                  </div>
                  <div class="breadcrumb-main__wrapper">
                     <form action="/" class="d-flex align-items-center add-contact__form my-sm-0 my-2">
                        <span data-feather="search"></span>
                        <input class="form-control mr-sm-2 border-0 box-shadow-none" type="search" id="userName" onkeyup="userFunction()" placeholder="Search by User Name" aria-label="Search">
                     </form>
                  </div>
               </div>
            </div>
            <!-- ends: contact-breadcrumb -->
         </div>
      </div>
      <div class="row">
         <div class="col-lg-12 mb-30">
            <div class="card">
               <div class="card-header color-dark fw-500">
                View List
               </div>
               <div class="card-body">
                  <div class="userDatatable global-shadow border-0 bg-white w-100">
                    @include('layouts.partials._message')
                     <div class="table-responsive">
                        <table id="userTable" class="table mb-0 table-borderless">
                           <thead>
                              <tr class="userDatatable-header">
                                  <th>
                                     <span class="userDatatable-title">Image</span>
                                  </th>
                                  <th>
                                     <span class="userDatatable-title">Name</span>
                                  </th>
                                 <th>
                                    <span class="userDatatable-title">emaill</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">phone</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">company</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">position</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title">status</span>
                                 </th>
                                 <th>
                                    <span class="userDatatable-title float-right">action</span>
                                 </th>
                              </tr>
                           </thead>
                           <tbody>
                               @foreach ($basicInfos as $basicInfo)
                              <tr>
                                 <td>
                                    <img class="rounded-circle wh-34" src="{{ asset($basicInfo->image) }}" alt="{{ $basicInfo->name }} ">
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                       {{ $basicInfo->name }}
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                        {{ $basicInfo->email }}
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                        {{ $basicInfo->phone }}
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                        {{ $basicInfo->company }}
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content">
                                        {{ $basicInfo->position }}
                                    </div>
                                 </td>
                                 <td>
                                    <div class="userDatatable-content d-inline-block">
                                       @if ($basicInfo->status=='active')
                                       <span class="bg-opacity-success color-success rounded-pill userDatatable-content-status active">{{ $basicInfo->status }}</span>
                                       @elseif($basicInfo->status=='deactivated')
                                       <span class="bg-opacity-warning  color-warning rounded-pill userDatatable-content-status active">deactivete</span>
                                       @else 
                                       <span class="bg-opacity-danger  color-danger rounded-pill userDatatable-content-status active">blocked</span>
                                       @endif
                                    </div>
                                 </td>
                                 <td>
                                    <ul class="orderDatatable_actions mb-0 d-flex flex-wrap">
                                       <li>
                                          <a href="{{ route('firestore.edit', $basicInfo->id) }}" class="edit">
                                          <span data-feather="edit"></span></a>
                                       </li>
                                       <li>
                                          <a href="{{ route('firestore.delete', $basicInfo->id) }}"
                                            onclick="return confirm('Do you want to delete this information {{$basicInfo->name }} ?');" class="remove">
                                          <span data-feather="trash-2"></span></a>
                                       </li>
                                    </ul>
                                 </td>
                              </tr>
                              @endforeach
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
{{-- Scripts Section --}}
@section('scripts')
<script>
   function userFunction() {
     // Declare variables
     var input, filter, table, tr, td, i, txtValue;
     input = document.getElementById("userName");
     filter = input.value.toUpperCase();
     table = document.getElementById("userTable");
     tr = table.getElementsByTagName("tr");
   
     // Loop through all table rows, and hide those who don't match the search query
     for (i = 0; i < tr.length; i++) {
       td = tr[i].getElementsByTagName("td")[1];
       if (td) {
         txtValue = td.textContent || td.innerText;
         if (txtValue.toUpperCase().indexOf(filter) > -1) {
           tr[i].style.display = "";
         } else {
           tr[i].style.display = "none";
         }
       }
     }
   }
</script>
@endsection
