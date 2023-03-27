
<div class="list-group">

    <a href="{{ route('admin.about') }}" class="list-group-item list-group-item-action {{ request()->routeIs('admin.about') ? 'active' : '' }}">About</a>
    <a href="{{ route('organize.index') }}" class="list-group-item list-group-item-action {{ request()->routeIs('organize.index') ? 'active' : '' }}">Organizing Committee</a>
    <a href="{{ route('director.index') }}" class="list-group-item list-group-item-action {{ request()->routeIs('director.index') ? 'active' : '' }}">BOARD OF DIRECTOR</a>
    <a href="{{ route('adviser.index') }}" class="list-group-item list-group-item-action {{ request()->routeIs('adviser.index') ? 'active' : '' }}">BOARD OF ADVISER</a>

 </div>
