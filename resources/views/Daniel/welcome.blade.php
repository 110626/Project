@extends('Daniel.layouts.main')

@section('content')
 <div class="row">
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Students</h4>
                  <td>
                             <a href="{{ url('students') }}" class=" btn btn-outline-primary btn-md">
                          New Student
                                                   
                        </a>
                          </td>
                   </div>
               <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                      <thead>
                        <tr>
                          <th>
                            Student Number
                          </th>
                          <th>
                            First Name
                          </th>
                          <th>
                            Last Name
                          </th>
                          <th>
                            Date Of Birth
                          </th>
                          <th>
                            Address
                          </th>
                          
                        </tr>
                      </thead>
                       <tbody>
                   @if(count($data['students'])>0)
                   @foreach($data['students'] as $student)
                        <tr>
                          <td>
                           {{$student->student_number}} 
                          </td>
                          <td>
                           {{$student->first_name}} 
                          </td>
                          <td>
                           {{$student->last_name}}
                          </td>
                          <td>
                           {{$student->date_of_birth}}
                          </td>
                          <td>
                           {{$student->address}}
                          </td>
                          
                          
                          
                       </tr>
                       @endforeach 
                      </tbody>
                    </table>
                  </div>
                

                        @else
                        <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                       <tbody>
                        <tr>
                        <td>No Student</td>
                         </tr>
                         </tbody>
                         </table> 
                         </div>           
                          @endif 


  
                  </div>
                </div>
              
            <div class="col-md-6 grid-margin stretch-card">
              <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Fees</h4>
                  <td>
                             <a href="{{ url('fees') }}" class=" btn btn-outline-primary btn-md">
                          New Fee
                                                   
                        </a>
                          </td>
                   </div>
               <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                      <thead>
                        <tr>
                          <th>
                            Student Name
                          </th>
                          <th>
                            Date Paid
                          </th>
                          <th>
                            Amount Paid
                          </th>
                          
                        </tr>
                      </thead>
                       <tbody>
                   @if(count($data['fees'])>0)
                   @foreach($data['fees'] as $fee)
                        <tr>
                          <td>
                           {{$fee->student_name}}
                          </td>
                          <td>
                           {{$fee->date_of_payment}}
                          </td>
                          <td>
                           {{$fee->amount_paid}}
                          </td>
                          
                          
                          
                       </tr>
                       @endforeach 
                      </tbody>
                    </table>
                  </div>
                

                        @else
                        <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                      
                       <tbody>
                        <tr>
                        <td>No Fees</td>
                         </tr>
                         </tbody>
                         </table> 
                         </div>           
                          @endif 


  
                  </div>
                </div>
              </div>
                       
                          
                     


  
           
@endsection 