
@extends('main')
@section('title', '| Contact' )
@section('content')

  <div class = "row" style="margin-top: 80px;">
    <div class = "col-md-8 offset-md-2">
      <h1>Contact Us</h1>
      <hr>
      <form>
        <div class = "form-group">
          <label name = "email">Email:</label>
          <input id = "email" name="email" class = "form-control">
        </div>

        <div class = "form-group">
          <label name = "subject">Subject:</label>
          <input id = "subject" name="subject" class = "form-control">
        </div>

        <div class = "form-group">
          <label name = "message">message:</label>
          <textarea  id = "messsage" name ="message" class = "form-control">Type your message here...</textarea>
        </div>

        <input type="submit" value="Send Message" class = "btn btn-success">
      </form>
    </div>
  </div>
  
@endsection
