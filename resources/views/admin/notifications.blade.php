@extends('admin.layouts.app')
@section('content')
  <style media="screen">
.notify-card{
  box-shadow: 0px 0px 5px rgb(139 159 250 / 58%);
  background-color: #f0edff;
}

</style>
<div class="contents ">
   <div class="container-fluid ">
     <div class="row">
       <div class="col-md-12">
         <div class="card">
           <div class="card-header">
             Notifiications
           </div>
           <div class="card-body">
             @forelse (auth()->user()->unreadNotifications as $notification)
             <div class="card notify-card p-2 mb-3">
               <div class="row">
                 <div class="col-md-10">
                   <span>{{$notification->data['body']}} on <span>{{ \Carbon\Carbon::parse($notification->created_at)->toDayDateTimeString()}}</span></span>
                 </div>
                 <div class="col-md-2">
                   <form class="" action="{{route('admin.mark.Notification')}}" method="post">
                     @csrf
                     <input type="hidden" name="id" value="{{$notification->id}}">
                     <button type="submit" class="btn btn-primary btn-sm btn-rounded" name="button">mark as read</button>
                   </form>
                 </div>
               </div>
             </div>
           @empty
             no data available
           @endforelse
           </div>
         </div>
       </div>
     </div>
   </div>
</div>
@endsection
