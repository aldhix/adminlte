<x-adminlte.sidebar.menu 
 label="Dasboard" 
 icon="fas fa-tachometer-alt" 
 href="{{url('demo')}}" />

<li class="nav-header">COMPONENTS</li>

<x-adminlte.sidebar.menu 
 label="Form" 
 icon="far fa-list-alt "
 :href="url('demo/form')" />

 <x-adminlte.sidebar.menu 
 label="Tabel" 
 icon="fas fa-th-list "
 :href="url('demo/table')" />

<li class="nav-header">SETTINGS</li>

<x-adminlte.sidebar.menu 
 label="Users" 
 icon="fas fa-user-friends"
 is="user*"
 has-treeview="true">

  <x-adminlte.sidebar.submenu
   label="All User"
   href="#"/>

  <x-adminlte.sidebar.submenu
   label="Add New"
   href="#"/>

</x-adminlte.sidebar.menu>

<x-adminlte.sidebar.menu 
 label="Simple Link" 
 icon="fas fa-th"
 badge="New" />

 <x-adminlte.sidebar.menu 
 label="About" 
 icon="fas fa-exclamation-circle"
 :href="url('demo/about')" />