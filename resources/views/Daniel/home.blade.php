@extends('layouts.main')

@section('content')

            <div class="row">
            <div class="col-lg-12 grid-margin stretch-card">
              <div class="card">
               <div class="card-body">
                  <h4 class="card-title">Home</h4>
                  <div>
                     <a href="bank/create" class=" btn btn-outline-primary btn-md">
                          New Student
                                                   
                        </a>
                        <a href="bank/create" class=" btn btn-outline-primary btn-md">
                            New Payment
                                                     
                          </a>
                   </div>
               <div class="table-responsive">
                    <table class="table table-bordered table-striped" >
                      <thead>
                        <tr>
                          <th>
                            Student Name
                          </th>
                          <th>
                            Payment Method
                          </th>
                         </tr>
                      </thead>
                      <tbody>
                   @if(count($banks)>0)
                   @foreach($banks as $bank)
                        <tr>
                          <td>
                           {{$bank->BankCode}}
                          </td>
                          <td>
                           {{$bank->BankName}}
                          </td>
                       
                          <td>
                             <a href="bank/{{$bank->BankCode}}/edit" class=" btn btn-outline-primary btn-md">
                          Edit
                                                   
                        </a>
                          </td>
                           <td>

                            {{Form::open(['action' => ['BanksController@destroy', $bank->BankCode],'method' => 'POST'])}}
                            {{Form::hidden('_method', 'DELETE')}}
                            {{Form::submit('Delete', ['class'=>'btn btn-outline-danger btn-md'], ['class'=>'mdi mdi-file-check btn-icon-append'])}}
                            {{Form::close()}}
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
                        <td>No Students</td>
                         </tr>
                         </tbody>
                         </table> 
                         </div>           
                          @endif 


  
                  </div>
                </div>
              </div>
           </div>
          

    
@endsection