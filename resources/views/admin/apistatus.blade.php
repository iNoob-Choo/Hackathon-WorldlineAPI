@extends('layouts.app')
@section('content')
  <!-- Bootstrap Boilerplate... -->
<div class="panel-body">
  <table class="table table-striped task-table">
   <!-- Table Headings -->
     <thead>
       <tr>
         <th>URL</th>
         <th>Method</th>
         <th>Status</th>
       </tr>
     </thead>

   <!-- Table Body -->
     <tbody>
       <tr>
         <td>/api/v1/Accounts</td>
         <td>GET</td>
         <td id="url1"></td>
       </tr>
       <tr>
         <td>/api/Accounts/Profiles/1</td>
         <td>POST</td>
         <td id="url2"></td>
       </tr>
       <tr>
         <td>/api/Accounts/Profiles/1</td>
         <td>GET</td>
         <td id="url3"></td>
       </tr>
       <tr>
         <td>/api/Accounts/Loans</td>
         <td>GET</td>
         <td id="url4"></td>
       </tr>
       <tr>
         <td>/api/Accounts/Bills</td>
         <td>POST</td>
         <td id="url5"></td>
       </tr>
       <tr>
         <td>/api/Accounts/Payments/1</td>
         <td>DELETE</td>
         <td id="url6"></td>
       </tr>
     </tbody>
  </table>

<a class="btn btn-danger "href="{{ URL::previous() }}">Go Back</a>
</div>
<script type="text/javascript">
  $( document ).ready(function() {
    $.ajax({
        url: "/api/v1/Accounts",
        type: "GET",
        data: {
            //Set an empty response to see the error
            xml: "<response></response>"
        },
        dataType:"text xml",
        complete: function(xhr, textStatus) {
            console.log(xhr.status);
            $('#url1').text(xhr.status);
        }
    });
    $.ajax({
        url: "/api/Accounts/Profiles/1",
        type: "POST",
        data:"",
        dataType:"text xml",
        complete: function(xhr, textStatus) {
            console.log(xhr.status);
            $('#url2').text(xhr.status);
        }
    });
    $.ajax({
        url: "/api/Accounts/Profiles/1",
        type: "GET",
        data: {
            //Set an empty response to see the error
            xml: "<response></response>"
        },
        dataType:"text xml",
        complete: function(xhr, textStatus) {
            console.log(xhr.status);
            $('#url3').text(xhr.status);
        }
    });
    $.ajax({
        url: "/api/Accounts/Loans",
        type: "GET",
        data: {
            //Set an empty response to see the error
            xml: "<response></response>"
        },
        dataType:"text xml",
        complete: function(xhr, textStatus) {
            console.log(xhr.status);
            $('#url4').text(xhr.status);
        }
    });
    $.ajax({
        url: "/api/Accounts/Bills",
        type: "POST",
        data: {
            //Set an empty response to see the error
            xml: "<response></response>"
        },
        dataType:"text xml",
        complete: function(xhr, textStatus) {
            console.log(xhr.status);
            $('#url5').text(xhr.status);
        }
    });
    $.ajax({
        url: "/api/Accounts/Payments/1",
        type: "DELETE",
        data: {
            //Set an empty response to see the error
            xml: "<response></response>"
        },
        dataType:"text xml",
        complete: function(xhr, textStatus) {
            console.log(xhr.status);
            $('#url6').text(xhr.status);
        }
    });
  });

</script>

@endsection
