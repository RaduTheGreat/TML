@extends('layouts.master')


@section('content')

<!--MESSAGES PAGE-->

<div class="content-wrapper">
  <div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
      <li class="breadcrumb-item">
        <a href="index.html">Bord</a>
      </li>
      <li class="breadcrumb-item active">Mesaje</li>
    </ol>

    <!--messenger style-->
    <div class="row">
      <div class="col-12">
        

        <div class="input-group">

        <!--search for something in conversations-->
        <input name="homework-search" class="form-control" type="text" placeholder="Cauta in conversatii...">

        <span class="input-group-append">
        <button class="btn btn-primary" type="button">
        <i class="fa fa-search"></i>
        </button>

        </span>
        </div>
        <br>


        <!--CONVERSATION WITH SOMEONE BODY-->
        <div class="card text">
          <div class="card-body">

          <!--SOMEONE'S NAME-->
          <h5 class="card-title">Traian Basescu</h5>
          <!--someone's last message to you-->
          <a href="{{ url('/messages-sg') }}">
          <p class="card-text">[7:00] Aici vine ultimul mesaj din conversatia cu Basescu.</p>
          </a>
          </div>
        </div>


        <!--CONVERSATION WITH SOMEONE BODY-->
        <div class="card text">
          <div class="card-body">
          <!--SOMEONE'S NAME-->
          <h5 class="card-title">Spuderman</h5>
          <a href="{{ url('/messages-sg') }}">
          <!--someone's last message to you-->
          <p class="card-text">[06:42] I am cooler than Batmon</p>
          </a>
          </div>
        </div>


         <!--CONVERSATION WITH SOMEONE BODY-->
         <div class="card text">
          <div class="card-body">
          <!--SOMEONE'S NAME-->
          <h5 class="card-title">Bed</h5>
          <a href="{{ url('/messages-sg') }}">
          <!--someone's last message to you-->
          <p class="card-text">[05:00] Come to sleep.</p>
          </a>
          </div>
        </div>


        <button type="submit" class="btn btn-primary">Compune</button>

      </div>
    </div>
  </div>
  <!-- /.container-fluid-->
</div>
<!-- /.content-wrapper-->

@endsection