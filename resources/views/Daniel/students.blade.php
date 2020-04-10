@extends('Daniel.layouts.main')

@section('content')
<div class="content-wrapper">
           <div class="row">
            <div class="col-lg-12">
              <div class="card">

                <div class="card-body">
                  <h4 class="card-title">Students</h4>
                  <td>
                             <a href="{{ url('/') }}" class=" btn btn-outline-primary btn-md">
                          Back
                                                   
                        </a>
                          </td>

{!! Form::open(['action' => 'StudentsController@store', 'method' => 'POST']) !!}
                        <fieldset>
                          <div class="form-group">
                     {{Form::label('','')}}
                     
                      </div>
                          <div class="form-group">
                     {{Form::label('student_number','Student Number')}}
                     {{Form::text('student_number','',[ 'class' => 'form-control'])}}
                      </div>
                      <div class="form-group">
                     {{Form::label('first_name','First Name')}}
                     {{Form::text('first_name','',[ 'class' => 'form-control'])}}
                      </div>
                      <div class="form-group">
                     {{Form::label('last_name','Last Name')}}
                     {{Form::text('last_name','',[ 'class' => 'form-control'])}}
                      </div>
                     <div class="form-group">
                        {{Form::label('date_of_birth','Date Of Birth')}}
                     {{Form::date('date_of_birth','',[ 'class' => 'form-control'])}}
                      </div>
                      <div class="form-group">
                     {{Form::label('address','Address')}}
                     {{Form::text('address','',[ 'class' => 'form-control'])}}
                      </div>
                     
                  
                      
                      {{Form::submit('Submit',['class'=>'btn btn-primary'])}}
                    
                    </fieldset>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
{!! Form::close() !!}﻿

@endsection