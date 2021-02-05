@extends('user.layout.assignment_user')
@section('body')
<style>
    .userTable
    {
        background-color:#baeee9;
        margin-top:50px;
        padding-top:8px;
        padding-bottom:4px;
}
</style>
     <div class="container-fluid" style="padding-top:11%;">
        <div class="row">
            <div class="col-sm-2">&nbsp</div>
            <div class="col-sm-8 userTable">

               <h3 style="display:inline;">YOUR ACTIVE ASSIGNMENTS</h3>
               <div class="search-container" style="float:right;">
                  <form action="/action_page.php">
                  <input type="text" placeholder="Search.." name="search">
                  <button type="submit"><i class="fa fa-search"></i></button>
                  </form>
               </div>
               <hr style="border:1px solid black;">
               <p style="display:inline;margin-top:0px;">Show </p><Select style="display:inline;height:25px;width:45px;margin-top:0px;">
                  <option>10</option>
                  <option>25</option>
                  <option>50</option>
                  <option>100</option>
               </select>
               <p style="margin-top:0px;display:inline;"> entries</p>
               <div>&nbsp</div>
               <div class="table-responsive">
                  <table class="table" style="border:1px solid black;">
                      <thead>
                          <tr style="background-color:#b2d3c2;">
                             <th>ORDER ID</th>
                             <th>SUBJECT</th>
                             <th>PAYMENT</th>
                             <th>ORDER QUOTE</th>
                             <th>PAID AMOUNT</th>
                             <th>DUE DATE</th>
                          </tr>
                          <tr>
                            <td valign="top" colspan="6" style="text-align:center;"class="emptycol">No data available</td>
                          </tr>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                      <thead>
                  </table>
               </div>

                <p style="display:inline;">Showing  to  of  entries</p>
                <button type="button" class="btn btn-primary" style="float:right;">Next</button>
        
                <button type="button" class="btn btn-primary" style="margin-right:10px;float:right;">Previous</button>
            </div>
            <div class="col-sm-2">&nbsp</div>
        </row>
     </div>
@endsection