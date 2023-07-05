@extends('admin.admin_layouts')

@section('admin_content')

    <div class="sl-mainpanel">

      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>{{ __('All Requested Orders') }}</h5>
        </div><!-- sl-page-title -->

        <livewire:all-returns />
        
      </div>

    </div><!-- sl-mainpanel -->

@endsection