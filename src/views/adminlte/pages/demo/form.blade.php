@extends('adminlte.layouts.app')
@section('title','Form')
@section('content-header','Form')
@section('content')
<x-lte-alert>
  <h5><i class="icon fas fa-check"></i> Alert!</h5>
  Success alert preview. This alert is dismissable.
</x-lte-alert>

<x-lte-alert type="danger">
  <h5><i class="icon fas fa-ban"></i> Alert!</h5>
  Danger alert preview. This alert is dismissable. A wonderful serenity has taken possession of my entire soul, like these sweet mornings of spring which I enjoy with my whole heart.
</x-lte-alert>

<?php 
$tabs = [
  ['label'=>"Form Inline",'url'=>'?tab=current'],
  ['label'=>"Form Input Group",'url'=>'?tab=input-group'],
];
$tab = request()->tab;
$tab_active = !empty($tab) ? '?tab='.$tab : '?tab=current';
?>

<form method="post" action="{{route('demo.store')}}">
<x-lte-tabs-card :data-tabs="$tabs" :active="$tab_active">

@if($tab == 'current')
<div class="row">
  <div class="col-6">
   @csrf()
  <x-lte-input label="Nama" name="nama" inline="true" />
  <?php $option = [
      ['value'=>'L','label'=>'Laki-laki'],
      ['value'=>'P','label'=>'Perempuan'],
    ]; ?>
  <x-lte-select label="Jenis Kelamin" name="jenis_kelamin" :option="$option" inline="true" />
  <x-lte-input label="Email" name="email" type="email" inline="true" />
  <x-lte-input label="Password" name="password" type="password" inline="true" />
  <x-lte-textarea label="Alamat" name="alamat" rows="5" inline="true" />
  </div>
</div>
<x-slot name="footer">
  <x-lte-button btn="primary">Simpan</x-lte-button>
  <x-lte-button type="link" href="#">cancel</x-lte-button>
</x-slot>
@else

<div class="row">
  <div class="col-6">
  @csrf()
  <x-lte-input label="Nama" name="nama">
    <x-slot name="append"><i class="fas fa-user"></i></x-slot>
  </x-lte-input>

  <?php $option = [
      ['value'=>'L','label'=>'Laki-laki'],
      ['value'=>'P','label'=>'Perempuan'],
    ]; ?>
  
  <x-lte-select label="Jenis Kelamin" name="jenis_kelamin" :option="$option">
    <x-slot name="prepend"><i class="fas fa-venus-mars"></i></x-slot>
  </x-lte-select>

  <x-lte-input label="Email" name="email" type="email">
    <x-slot name="append"><i class="fas fa-envelope"></i></x-slot>
  </x-lte-input>
  
  <x-lte-input label="Password" name="password" type="password">
    <x-slot name="append"><i class="fas fa-key"></i></x-slot>
  </x-lte-input>
  
  <x-lte-textarea label="Alamat" name="alamat" rows="5" />
  </div>
</div>

<x-slot name="footer">
  <x-lte-button btn="primary">Simpan</x-lte-button>
  <x-lte-button type="link" href="#">cancel</x-lte-button>
</x-slot>

@endif
</x-lte-tabs-card>
</form>

@endsection
