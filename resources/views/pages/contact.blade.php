@extends('layouts.app')
@section('title','Contact')
@section('content')

<div class ="row">
    <div class="col-md-12">
        <h1 >Contact Me</h1>
        <hr style="margin:10px 0 15px 0px">
        <form>
            <div class="form-group">
                <label name="email">Email:</label>
                <input id="email" name="email" class ="form-control">
                <br>
                <label name="subject">Subject:</label>
                <input id="subject" name="subject" class ="form-control">
                <br>
                <label name="message">Message:</label>
                <textarea id="message" name="message" class ="form-control">Type your message here.</textarea>
                <br>
                <input type="submit" value = "Send Message" class="btn btn-success">
            </div>
        </form>
    </div>
</div>
@endsection
