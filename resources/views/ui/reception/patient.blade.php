@extends('common.default')
@section('content')

<div class="col-md-8  description">
	<h3 class="text">Add new patient</h3>
	<hr>
	{!! Form::open(array('class'=>'form')) !!}
	  <div class="form-group">
    <label for="fullname" class="text">Full Name:</label>
    <input  name="fullname" value="{{$p->fullname or ''}}"class="form-control" id="fullname">
  </div>
  <div class="form-group">
    <label for="age" class="text">Age</label>
    <input type="number" class="form-control" id="age" name="age" value="{{$p->age or ''}}">
  </div>
    <div class="form-group">
    <label for="complaint" class="text">Complaint</label>
    <textarea class="form-control" name="complaint" id="complaint">{{$p->complaint or ''}} </textarea>
  </div>
    <div class="form-group">
    <label for="ref_by" class="text">Referred By</label>
    <textarea class="form-control" id="refer_by" name="ref_by">{{$p->ref_by or ''}} </textarea>
  </div>
    <div class="form-group">
    <label for="phone" class="text">Phone Number</label>
    <input  name="phone" value="{{$p->phone or ''}}"class="form-control" id="phone">
  </div>
  <div class="checkbox">
    <label class="text"><input type="checkbox" id="add_p" name="add_p"> Add Patient Info</label>
  </div>
  <div id="more_info" class="text">More Info </div>
  <button type="submit" class="btn btn-default">Submit</button>
	{!! Form::close() !!}
</div>
{{-- </div> --}}
<div class="col-md-4">
<h3 class="text">Recent Patients</h3>
  @if(isset($patient) and !is_null($patient))
  <table class="table">
  @foreach($patient as $p)
    <tr>
      <td><a href="#"> {{$p->name}}</a></td>
      <td><a href="{{$p->id}}" class="btn btn-primary">Add Bio</a></td>
    </tr>
  @endforeach
  </table>
  @endif
</div>

<script type="text/javascript">
  $(document).ready(function(){
    $('#add_p').change(function(){
      if (this.checked) {
        $('#more_info').fadeIn('slow');
      }
      else{
        $('#more_info').fadeOut'slow');
      };
    });
  });
</script>
@stop