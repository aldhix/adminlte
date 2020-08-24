<x-lte-sidebar-menu 
 label="Dasboard" 
 icon="fas fa-tachometer-alt" 
 href="{{route('demo.index')}}" />

<li class="nav-header">COMPONENTS</li>

<x-lte-sidebar-menu 
 label="Form" 
 icon="far fa-list-alt "
 :href="route('demo.form')" />

 <x-lte-sidebar-menu 
 label="Tabel" 
 icon="fas fa-th-list "
 :href="route('demo.table')" />

<li class="nav-header">SETTINGS</li>

<x-lte-sidebar-menu
 label="Users" 
 icon="fas fa-user-friends"
 is="user*"
 has-treeview="true">

  <x-lte-sidebar-submenu
   label="All User"
   href="#"/>

  <x-lte-sidebar-submenu
   label="Add New"
   href="#"/>

</x-lte-sidebar-menu>

<x-lte-sidebar-menu 
 label="Simple Link" 
 icon="fas fa-th"
 badge="New" />

 <x-lte-sidebar-menu 
 label="About" 
 icon="fas fa-exclamation-circle"
 :href="route('demo.about')" />