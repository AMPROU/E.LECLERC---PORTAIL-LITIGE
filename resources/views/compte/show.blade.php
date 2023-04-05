@extends('layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet">
<div class="container">
   <div class="row">
      <div class="col-md-12">
         <div id="content" class="content content-full-width">
            <!-- begin profile -->
            <div class="profile">
               <div class="profile-header">
                  <!-- BEGIN profile-header-cover -->
                  <div class="profile-header-cover"></div>
                  <!-- END profile-header-cover -->
                  <!-- BEGIN profile-header-content -->
                  <div class="profile-header-content">
                     <!-- BEGIN profile-header-img -->
                     <div class="profile-header-img">
                        <img src="{{Auth::user()->avatar}}">

                     </div>

                     <!-- END profile-header-img -->
                     <!-- BEGIN profile-header-info -->
                     <div class="profile-header-info">
                        <h5 class="m-t-10 m-b-5">{{Auth::user()->name}}</h5>
                     </div>
                     <!-- END profile-header-info -->
                  </div>
                  <!-- END profile-header-content -->

               </div>
            </div>
            <!-- end profile -->
            <!-- begin profile-content -->
            <div class="profile-content">
               <!-- begin tab-content -->
               <div class="tab-content p-0">

                  <!-- begin #profile-about tab -->
                  <div class="tab-pane fade in active show" id="profile-about">
                     <!-- begin table -->
                     <div class="table-responsive">
                        <table class="table table-profile">
                           <tbody>
                              <tr class="highlight">
                                 <td class="field">Magasin :</td>
                                 <td><a href="{{ route('magasin.voir', ['id' => 1])}}">{{$magasin->nom_magasin}}</a></td>
                              <tr>
                                 <td class="field">Téléphone</td>
                                 <td><i class="fa fa-mobile fa-lg m-r-5"></i> {{$magasin->telephone}}</td>
                              </tr>
                              <tr>
                                 <td class="field">Mail</td>
                                 <td>{{Auth::user()->email}}</td>
                              </tr>
                              <tr>
                                 <td class="field">Goolgle Auth</td>
                                 <td>{{Auth::user()->google_id}}</td>
                              </tr>
                              <tr class="highlight">
                                 <td class="field">Token Google</td>
                                 <td>{{Auth::user()->token}}</td>
                              </tr>
               

                               <tr class="highlight">
                                 <td class="field">Centrales</td>
                                 <td>{{$magasin->centrale}}</td>
                              </tr>
                              <tr>
                                 <td class="field">adresse</td>
                                 <td>{{$magasin->adresse}}</td>
                              </tr>
                              <tr>
                                 <td class="field">Code Postal</td>
                                 <td>{{$magasin->code_postal}}</td>
                              </tr>
                              <tr>
                              <td class="field">Ville</td>
                                 <td>{{$magasin->ville}}</td>
                              </tr>
                              
                                 
                              </tr>
                              <tr>
                                 
                              </tr>
                              <tr class="divider">
                                 <td colspan="2"></td>
                              </tr>
                              <tr class="highlight">

                              </tr>
                           </tbody>
                        </table>
                     </div>
                     <!-- end table -->
                  </div>
                  <!-- end #profile-about tab -->
               </div>
               <!-- end tab-content -->
            </div>
            <!-- end profile-content -->
         </div>
      </div>
   </div>
</div>
    	</div>
	</div>
</div>


@endsection

@push('js')

@endpush