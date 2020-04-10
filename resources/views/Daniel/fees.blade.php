@extends('Daniel.layouts.main')

@section('content')
<div class="content-wrapper">
           <div class="row">
            <div class="col-lg-12">
              <div class="card">
                <div class="card-body">
                  <h4 class="card-title">Fees</h4>
                  <td>
                             <a href="{{ url('/') }}" class=" btn btn-outline-primary btn-md">
                          Back
                                                   
                        </a>
                          </td>
{!! Form::open(['action' => 'FeesController@store', 'method' => 'POST']) !!}
                        <fieldset>
                          <div class="form-group">
                     {{Form::label('','')}}
                     
                      </div>
                      <div class="form-group">
                    <label for="student">Student</label>
                    <select name="student_name" class="form-control" id="student_name">
                  
                   @foreach($students as $student)
                      <option value="{{$student->first_name}} {{$student->last_name}}">{{$student->first_name}} {{$student->last_name}}</option>
                      @endforeach
                  

                    </select>
                  </div>
                     <div class="form-group">
                        {{Form::label('date_of_payment','Date Of Payment')}}
                     {{Form::date('date_of_payment','',[ 'class' => 'form-control'])}}
                      </div>
                      <div class="form-group">
                        {{Form::label('amount_paid','Amount Paid')}}
                     {{Form::text('amount_paid','Ksh.',[ 'class' => 'form-control'])}}
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